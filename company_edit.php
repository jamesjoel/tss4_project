<?php
include("db.php");
include('header.php');

if(! isset($_SESSION['is_company_logged_in'])) // Backdoor Entry Protaction Code
{
	header("location:company_login.php");
}

$cid = $_SESSION['cid'];

$que = "SELECT * FROM company WHERE id = $cid";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);

?>
		<div id="right-content">
			<h3>Update Your Profile</h3>
			<div id="login-box">
				<form method="post" action="company_update.php" enctype="multipart/form-data">
				<table id="tab" align="center">
					<tr>
						<td>Company Name</td>
						<td><input value="<?php echo $data['company_name']; ?>" type="text" name="c_name" class="input" placeholder="Company Name"></td>
					</tr>
					<tr>
						<td>Current Logo</td>
						<td><img src="company_logo/<?php echo $data['logo'];?>" height="50" width="50"/></td>
					<tr>
						<td>Company Logo</td>
						<td><input type="file" name="image" class="input" placeholder="Company Name"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input disabled="disabled" value="<?php echo $data['username'];?>" type="text" name="username" class="input" placeholder="Username"></td>
					</tr>
					
					<tr>
						<td>Contact Person</td>
						<td><input type="text" value="<?php echo $data['contact_person'];?>" name="c_person" class="input" placeholder="Contact Person"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><textarea placeholder="Address" name="add"><?php echo $data['address'];?></textarea></td>
					</tr>
					<tr>
						<td>City</td>
						<td><select class="input" name="city">
							<option>Select</option>
							<option <?php if($data['city']=='Indore') echo "selected='selected'"; ?>>Indore</option>
							<option <?php if($data['city']=='Ujjain') echo "selected='selected'"; ?>>Ujjain</option>
							<option <?php if($data['city']=='Bhopal') echo "selected='selected'"; ?>>Bhopal</option>
							<option <?php if($data['city']=='Mumbai') echo "selected='selected'"; ?>>Mumbai</option>
						</select></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><input type="text" name="contact" placeholder="Contact" value="<?php echo $data['contact'];?>" class="input"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input class="btn" type="submit" value="Update">
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