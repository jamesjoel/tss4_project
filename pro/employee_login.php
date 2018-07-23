<?php
include('db.php');	
// print_r($_SESSION);die;
include('header.php');
?>	
		<div id="right-content">
			<h3>Employee Login Here</h3>
			<div id="login-box">
				<form action="employee_auth.php" method="post">
				<table id="tab" align="center">
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" class="input" placeholder="Username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pass" class="input" placeholder="Password"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input class="btn" type="submit" value="Login">
						</td>
					</tr>
				</table>
			</form>
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
			
		</div>
<?php
include('footer.php');

?>