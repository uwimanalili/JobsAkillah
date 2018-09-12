<?php session_start();

$link=mysqli_connect("localhost","root","","jobscope")or die("can not connect");


$q="select * from jobs where j_active=1 order by j_id desc ";
$res=$link->query($q) or die ("can not select database");


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
					
					<h2 class="title"><center><b>WELCOME TO AKILAH</b></center></a></h2>
					
					<p class="meta"></p>
					<div class="entry"><font face color="black"><b>
						A job description is a basic HR management tool that can help to increase individual and organizational effectiveness. The HR Council has developed job profiles for key positions in small organizations that are available for you to use and adapt for your own use.<br /><br /><br />
                        For each employee, a good job description helps the incumbent to understand:<br /><br />

<li>Their duties and responsibilities</li><br />
<li>The relative importance of their duties</li><br />
<li>How their position contributes to the mission, goals and objectives of the organization</li><br /><br />
 
For the organization, good job descriptions contribute to organizational effectiveness by:<br /><br />

<li>Ensuring that the work carried out by staff is aligned with the organization's mission</li><br />
<li>Helping management clearly identify the most appropriate employee for new duties and realigning work loads</li><br /></font></b>
 
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
