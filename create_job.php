<?php
include('db.php');
include('header.php');

if(! isset($_SESSION['is_company_logged_in'])) // Backdoor Entry Protaction Code
{
	header("location:employee_login.php");
}

?>	
		<div id="right-content">
			<h3>Create New Jobs</h3>
			<div id="login-box">
				<form method="post" action="job_save.php">
				<table id="tab" align="center">
					<tr>
						<td>Job Title</td>
						<td><input type="text" name="title" class="input" placeholder="Title"></td>
					</tr>
					<tr>
						<td>Job Category</td>
						<td><select class="input" name="cate">
							<option>Select</option>
							<option>Marketing</option>
							<option>Finanace</option>
							<option>IT</option>
							<option>Services</option>
							<option>Government</option>

						</select></td>
					</tr>
					<tr>
						<td>Vacancy</td>
						<td><input type="text" name="vacancy" class="input"></td>
					</tr>
					<tr>
						<td>Salary</td>
						<td><input type="text" name="salary" class="input"></td>
					</tr>
					<tr>
						<td>Qua</td>
						<td><select class="input" name="min_qua">
							<option>Select</option>
							<option>Under Graduate</option>
							<option>Graduate</option>
							<option>Post Graduate</option>
							<option>Ph. D.</option>

						</select></td>
					</tr>
					
					<tr>
						<td>Skills</td>
						<td><textarea name="skills"></textarea></td>
					</tr>
					
					<tr>
						<td colspan="2" align="center">
							<input class="btn" type="submit" value="Add">
						</td>
					</tr>
				</table>
			</div>
						
		</div>
<?php
include('footer.php');

?>