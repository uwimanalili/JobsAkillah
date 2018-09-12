<ul>
					<li>
					<?php


				if(isset($_SESSION['status']))
				{
					echo '<h2 class="title">Hello '.$_SESSION['unm'].'!</h2>';
				}
				else
				{
					echo'
						<form action="process_login.php" method=POST>
						<b>Login:</b><br> <input type="text" name="unm" >
						<br>
						<br>
						<b>Password:</b><br><input type="password" name="pwd">
						<br>
						<br>
						<b><input type="submit" value="login">
						</form>
					';
					
				}
				?>
					</li>
					<li>
						<h2>categories </h2>
						<ul>
					<?php
						$link=mysqli_connect("localhost","root","","jobscope")or die("can not connect");
					
						$q="select * from categories";
						$res=$link->query($q) or die("cant connect");
						while($row=$res->fetch_assoc())
						{

							$q_ = "select COUNT(j_id) AS count from jobs where j_category ='".$row['cat_nm']."' and j_active=1";
							$res_ =$link->query($q_) or die("Wrong Query");
							$row_ = $res_->fetch_array();
							
							echo '<li><a href="jobs_by_category.php?cat='.$row['cat_nm'].'">'.$row['cat_nm'].' ('.$row_['count'].') '.'</a></li>';
						}
						
					?>

						</ul>
					</li>
					
				</ul>