<?php
if(empty($_POST))
{
	exit;
}
$link=mysqli_connect("localhost","root","","jobscope")or die("can not connect");


$nm=$_POST['nm'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$ph=$_POST['ph'];
$mobile=$_POST['mobile'];
$cl=$_POST['cl'];
$cas=$_POST['cas'];
$cindustry=$_POST['cindustry'];
$quali=$_POST['quali'];
$profile=$_POST['profile'];
$id=$_POST['id'];
if($_FILES['resume']['name'] != "")
{
	move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);
	$path = "uploads/".$_FILES['resume']['name'];
	$q="update employees set ee_resume = 'uploads/".$_FILES['resume']['name']."' where ee_id = '$id'";
	$res=$link->query($q)or die("wrong query");
}
$q="update employees set ee_fnm = '$nm',ee_gender = '$gender',ee_email = '$email',ee_phno = '$ph',ee_mobileno = '$mobile',ee_current_location = '$cl',ee_annualsalary = '$cas',ee_current_industry = '$cindustry',ee_qualification = '$quali',ee_profile = '$profile' where ee_id = '$id'";
$res=$link->query($q)or die("wrong query");
mysqli_close($link);
header("location:edit-profile.php");
?>