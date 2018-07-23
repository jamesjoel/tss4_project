<?php
include('db.php');
include('header.php');

if(! isset($_SESSION['is_company_logged_in'])) // Backdoor Entry Protaction Code
{
	header("location:employee_login.php");
}

$cid = $_SESSION['cid'];

$que = "SELECT * FROM company WHERE id = $cid";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);
// print_r($data);

?>	
		<div id="right-content">
			<h3>Your Profile</h3>
			<table align="center" cellpadding="10" width="300" border="1" style="font-size: 18px;">
				<tr>
					<td>Company Name</td>
					<td><?php echo $data['company_name'];?></td>
				</tr>
				<tr>
					<td>Logo</td>
					<td><img src="company_logo/<?php echo $data['logo']; ?>" height="80" width="80"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $data['username'];?></td>
				</tr>
				<tr>
					<td>Contact Person</td>
					<td><?php echo $data['contact_person'];?></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><?php echo $data['contact'];?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $data['address'];?></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?php echo $data['city'];?></td>
				</tr>
				
			</table>
			<a href="company_edit.php">Update Profile</a>
						
		</div>
<?php
include('footer.php');

?>