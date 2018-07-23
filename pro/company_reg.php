<?php
include("db.php");
include('header.php');

?>
		<div id="right-content">
			<h3>Company Signup Here</h3>
			<div id="login-box">
				<form method="post" action="company_save.php" enctype="multipart/form-data">
				<table id="tab" align="center">
					<tr>
						<td>Company Name</td>
						<td><input type="text" name="c_name" class="input" placeholder="Company Name"></td>
					</tr>
					<tr>
						<td>Company Logo</td>
						<td><input type="file" name="image" class="input" placeholder="Company Name"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" class="input" placeholder="Username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pass" class="input" placeholder="Password"></td>
					</tr>
					<tr>
						<td>Re-Password</td>
						<td><input type="password" class="input" placeholder="Re-Password"></td>
					</tr>
					<tr>
						<td>Contact Person</td>
						<td><input type="text" name="c_person" class="input" placeholder="Contact Person"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><textarea placeholder="Address" name="add"></textarea></td>
					</tr>
					<tr>
						<td>City</td>
						<td><select class="input" name="city">
							<option>Select</option>
							<option>Indore</option>
							<option>Ujjain</option>
							<option>Bhopal</option>
							<option>Mumbai</option>
						</select></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><input type="text" name="contact" placeholder="Contact" class="input"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input class="btn" type="submit" value="Signup">
						</td>
					</tr>
				</table>
			</div>
			<?php
				if(isset($_SESSION['msg']))
				{
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			
<?php
include('footer.php');

?>