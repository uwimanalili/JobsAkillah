<?php
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
		$link=mysqli_connect("localhost","root","","jobscope")or die("can not connect");
		
		
		$q="delete from jobs where j_id=".$_GET['id'];
		
		$res=$link->query($q);
		
		header("location:manage.php");	
?>