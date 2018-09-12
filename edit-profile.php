<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Flowerily 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090906

-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
		<!-- end #menu -->
		<div id="search">
		<?php
		
		include("includes/search.inc.php");
		?>
		</div>
		<!-- end #search -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<?php
	include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">
					
					<h2 class="title">EDIT</a></h2>
					<p class="meta">Edit my profile</p>
					<div class="entry">
						<?php

						$link=mysqli_connect("localhost","root","","jobscope") or die("can not connect");
						$id = $_SESSION['eeid'];
						$q="select * from employees where ee_id = '$id'";
						$res=$link->query($q) or die("cant connect");
						while($row=$res->fetch_assoc())
						{
							$names = $row['ee_fnm'];
							$gender = $row['ee_gender'];
							$email = $row['ee_email'];
							$phone = $row['ee_phno'];
							$mobile = $row['ee_mobileno'];
							$location = $row['ee_current_location'];
							$annual_salary = $row['ee_annualsalary'];
							$current_industry = $row['ee_current_industry'];
							$qualification = $row['ee_qualification'];
							$profile = $row['ee_profile'];
							$resume = $row['ee_resume'];
							$gender = strtolower($gender);
							$m_gender = (($gender == "m") ? "checked": "");
							$f_gender = (($gender == "f") ? "checked": "");
						}


						?>
						<form action="process_employee_edit.php" method="post" enctype="multipart/form-data">
							FULL NAME <br> <input type="text" name="nm" style="width:200px;" value="<?php echo $names; ?>">
							<BR><BR>GENDER <BR> <INPUT TYPE = "RADIO" value="Male" name="gender" <?php echo $m_gender; ?>>MALE<INPUT TYPE = "RADIO" VALUE="Female" name="gender" <?php echo $f_gender; ?>>FEMALE
							<br><BR>EMAIL <BR> <INPUT TYPE = "TEXT" name="email" style="width:200px;" value="<?php echo $email; ?>">
							<BR><BR>PHONE NO. <BR> <INPUT TYPE = "TEXT" name="ph" style="width:200px;" value="<?php echo $phone; ?>">
							<BR><BR>MOBILE NO.<BR> <INPUT TYPE = "TEXT" name="mobile" style="width:200px;" value="<?php echo $mobile; ?>">
							<br><br>CURRENT LOCATION <BR><INPUT TYPE="TEXT" name="cl" style="width:200px;" value="<?php echo $location; ?>">
							<BR><BR>CURRENT ANNUAL SALARY <BR><INPUT TYPE="TEXT" name="cas" style="width:200px;" value="<?php echo $annual_salary; ?>">
							<BR><BR>CURRENT INDUSTRY<BR><INPUT TYPE ="TEXT" name="cindustry" style="width:200px;" value="<?php echo $current_industry; ?>">
							<BR><BR>QUALIFICATION<BR><INPUT TYPE = "TEXT" name="quali" style="width:200px;" value="<?php echo $qualification; ?>">
							<BR><BR>PROFILE<BR> <TEXTAREA name="profile" style="width:200px;"><?php echo $profile; ?></TEXTAREA>
							<br><br>RESUME<br><input type="file" name="resume" style="width:200px;">
							<input type="hidden" name="id" value="<?php echo $id ?>">
							<center><br><br> <input type="submit" value="Edit"></center>					
						</form>
						
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.inc.php");
		?>	
	</div>
</div>
<!-- end #footer -->
</body>
</html>
