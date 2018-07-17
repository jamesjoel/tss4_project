<?php
include('db.php');
include('header.php');

if(! isset($_SESSION['is_company_logged_in'])) // Backdoor Entry Protaction Code
{
	header("location:employee_login.php");
}



$check = false;
$data = array("job_title"=>"", "category"=>"", "vacancy"=>"", "salary"=>"", "min_que"=>"", "skills"=>"");
$jid = "";


if(isset($_GET['key']))
{
	$check=true;
	$jid = $_GET['key'];
	$que = "SELECT * FROM jobs WHERE id=".$_GET['key'];
	$res = mysqli_query($con, $que);
	$data = mysqli_fetch_assoc($res);	

}



?>	
		<div id="right-content">
			<h3><?php echo $check ? "Update" : "Create New" ?> Jobs</h3>
			<div id="login-box">
				<form method="post" action="job_save.php">
					<input type="hidden" name="jid" value="<?php echo $jid; ?>" />
				<table id="tab" align="center">
					<tr>
						<td>Job Title</td>
						<td><input type="text" name="title" class="input" value="<?php echo $data['job_title'];?>" placeholder="Title"></td>
					</tr>
					<tr>
						<td>Job Category</td>
						<td><select class="input" name="cate">
							<option>Select</option>
							<option <?php if($data['category']=="Marketing"){ echo "selected='selected'"; } ?>>Marketing</option>
							<option <?php if($data['category']=="Finanace"){ echo "selected='selected'"; } ?>>Finanace</option>
							<option <?php if($data['category']=="IT"){ echo "selected='selected'"; } ?>>IT</option>
							<option <?php if($data['category']=="Services"){ echo "selected='selected'"; } ?>>Services</option>
							<option <?php if($data['category']=="Government"){ echo "selected='selected'"; } ?>>Government</option>

						</select></td>
					</tr>
					<tr>
						<td>Vacancy</td>
						<td><input type="text" name="vacancy" class="input" value="<?php echo $data['vacancy'];?>"></td>
					</tr>
					<tr>
						<td>Salary</td>
						<td><input value="<?php echo $data['salary'];?>" type="text" name="salary" class="input"></td>
					</tr>
					<tr>
						<td>Qua</td>
						<td><select class="input" name="min_qua">
							<option>Select</option>
							<option <?php if($data['min_que']=="Under Graduate"){ echo "selected='selected'"; } ?>>Under Graduate</option>
							<option <?php if($data['min_que']=="Graduate"){ echo "selected='selected'"; } ?>>Graduate</option>
							<option <?php if($data['min_que']=="Post Graduate"){ echo "selected='selected'"; } ?>>Post Graduate</option>
							<option <?php if($data['min_que']=="Ph. D."){ echo "selected='selected'"; } ?>>Ph. D.</option>

						</select></td>
					</tr>
					
					<tr>
						<td>Skills</td>
						<td><textarea name="skills"><?php echo $data['skills'];?></textarea></td>
					</tr>
					
					<tr>
						<td colspan="2" align="center">
							<input class="btn" type="submit" value="<?php echo $check ? 'Update' : 'Add'; ?>">
						</td>
					</tr>
				</table>
			</div>
						
		</div>
<?php
include('footer.php');

?>