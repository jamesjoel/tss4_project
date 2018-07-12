<?php
include('db.php');
include('header.php');

if(! isset($_SESSION['is_employee_logged_in'])) // Backdoor Entry Protaction Code
{
	header("location:employee_login.php");
}

?>	
		<div id="right-content">
			<h3>Welcome To Dashboard</h3>
			<?php
			if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
						
		</div>
<?php
include('footer.php');

?>