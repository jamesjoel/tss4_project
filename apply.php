<?php
include('db.php');
if(!isset($_SESSION['is_employee_logged_in']))
{
	$_SESSION['msg']="You are not Logged in, for apply this job please Login First....!";
	header("location:employee_login.php");

}
include('header.php');
?>
<div id="right-content">
	<h3>Apply For the Job</h3>
	<div id="login-box">
		<form action="apply_save.php" method="post" enctype="multipart/form-data">
			
		<table id="tab" align="center">
			<tr>
				<td>Cover Message</td>
				<td><textarea name="msg" placeholder="Message" cols="30" rows="5"></textarea></td>
			</tr>
			<tr>
				<td>Upload Your Resume</td>
				<td><input type="file" name="resume" />
			</td>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Apply" class="btn">
				</td>
			</tr>
		</table>
			<p class="error">
			<?php
			if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			
			?>
		</p>
	</div>
		</form>
</div>
