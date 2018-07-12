<?php
$url = $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Jobs</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">
	<div id="inside-header">
		<ul>
			<li><a href="index.php" <?php if(strstr($url, "index.php")) echo "class='active'"; ?>>Home</a></li>
			<li><a href="about.php"  <?php if(strstr($url, "about.php")) echo "class='active'"; ?>>About</a></li>
			<li><a href="contact.php" <?php if(strstr($url, "contact.php")) echo "class='active'"; ?>>Contact</a></li>
			<li><a href="help.php" <?php if(strstr($url, "help.php")) echo "class='active'"; ?>>Help</a></li>
			<li><a href="faq.php" <?php if(strstr($url, "faq.php")) echo "class='active'"; ?>>FAQ</a></li>
		</ul>
			<?php
			if(isset($_SESSION['cname']))
			{
				echo '<a href="#" id="username">';
				echo $_SESSION['cname'];
				echo '</a>';
			}
			if(isset($_SESSION['name']))
			{
				echo '<a href="#" id="username">';
				echo $_SESSION['name'];
				echo '</a>';
			}
			?>
	</div>
</div>
<div id="slider">
	<div id="inside-slider">
		<div id="core-slider">
			<div id="top-slider">
				<h1>Our Jobs</h1>
				<ul>
					<?php
					if(isset($_SESSION['is_employee_logged_in']))
					{ ?>
						<li><a href="employee_dash.php">Dashboard</a>|</li>
						<li><a href="logout.php">Logout</a>|</li>

					<?php
					}
					else
					{ ?>
						<li><a href="employee_reg.php">Register</a>|</li>
						<li><a href="employee_login.php">Login</a>|</li>

					<?php
					}
					if(isset($_SESSION['is_company_logged_in']))
					{ 
					?>
					<!-- <li><a href="company_dash.php"><?php echo $_SESSION['cname'];?></a>|</li> -->
					<li><a href="jobs.php">Jobs</a>|</li>
					<li><a href="create_job.php">Create Jobs</a>|</li>
					<li><a href="company_profile.php">Profile</a>|</li>
					<li><a href="logout.php">Logout</a></li>
				<?php }else{ ?>
					<li><a href="company_login.php">Company</a>|</li>
					<li><a href="company_reg.php">Company Signup</a></li>
				<?php } ?>
				</ul>
			</div>
			<div id="bottom-slider"></div>
		</div>
	</div>
</div>
<div id="content">
	<div id="inside-content">
		<div id="left-content">
			<h3>Job Category</h3>
			<ul>
				<li><a href="#">Marketing</a></li>
				<li><a href="#">Finance</a></li>
				<li><a href="#">IT</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Government</a></li>
			</ul>
		</div>