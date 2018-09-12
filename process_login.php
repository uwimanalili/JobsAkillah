<?php
session_start();
$link = mysqli_connect("localhost","root","","jobscope") or die("Cannot Connect");
if(empty($_POST))
{
	exit;
}
if(empty($_POST['unm'])||empty($_POST['pwd']))
{
	echo "You must enter all fields";
}
else
{
	$q = "select * from employees where ee_email = '".$_POST['unm']."'";
	$res = $link->query($q) or die("wrong query");
	$row=$res->fetch_assoc();
	if(!empty($row))
	{
		if(md5($_POST['pwd'])==$row['ee_pwd'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION['unm']=$row['ee_fnm'];
			$_SESSION['eeid']=$row['ee_id'];
			$_SESSION['cat']='employee';
			$_SESSION['status']=1;
			$_SESSION['employee']=1;
			header("location:index.php");
		}
		else
		{
			echo "Wrong Password";
		}
	}
	else
	{
		$q = "select * from employers where er_email = '".$_POST['unm']."'";
		$res = $link->query($q) or die("wrong query");
		$row=$res->fetch_assoc();
		if(!empty($row))
		{
			if(md5($_POST['pwd'])==$row['er_pwd'])
			{
				//login
				$_SESSION = array();
				
				$_SESSION['unm']=$row['er_fnm'];
				$_SESSION['eid']=$row['er_id'];
				$_SESSION['cat']='employer';
				$_SESSION['status']=1;
				$_SESSION['employer']=1;
				header("location:index.php");
			}
			else
			{
				echo "Wrong Password .";
			}
		}
		else
		{
			echo "No Such User";
		}
	}
}
?>