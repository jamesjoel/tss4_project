<?php
include('db.php');
include('header.php');
?>
		<div id="right-content">
			<h3>Company Login Here</h3>
			<div id="login-box">
				<form action="company_auth.php" method="post">
					
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
			
<?php
include('footer.php');
?>