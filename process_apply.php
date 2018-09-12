<?php session_start();
	if(empty($_POST))
	{
		header("location:index.php");
	
	}
	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("jobscope",$link) or die("can not select database");
	$q="insert into applicants (a_uid,a_jid)values(".$_SESSION['eeid'].",".$_POST['jid'].")";

	mysql_query($q,$link) or die("wrong query");

	if ($_FILES['resume']['name'] != "") {
		move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);

	$q="update employees set ee_resume = 'uploads/".$_FILES['resume']['name']."' WHERE ee_id = '".$_SESSION['eeid']."'";

	mysql_query($q,$link) or die("wrong query");

	}
	header("location:index.php");
	
?>