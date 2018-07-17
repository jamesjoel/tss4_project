<?php
include('db.php');
include('header.php');

if(! isset($_SESSION['is_company_logged_in'])) // Backdoor Entry Protaction Code
{
	header("location:employee_login.php");
}
$x = $_SESSION['cid'];

$que = "SELECT * FROM jobs WHERE cid = $x";
$result = mysqli_query($con, $que);
?>	
		<div id="right-content">
			<h3>Your All Jobs</h3>
			<div id="login-box">
				<table id="list" align="center" border="1">
					<tr>
						<th>S.No.</th>
						<th>Title</th>
						<th>Salary</th>
						<th>Vacancy</th>
						<th>Edit</th>
						<th>Delete</th>
						<th>Status</th>
						<th>Change</th>
					</tr>
					<?php
					$i=1;
					while($data = mysqli_fetch_assoc($result))
					{ 


						?>
						<Tr>
							<Td><?php echo $i;?></Td>
							<Td><?php echo $data['job_title'];?></Td>
							<Td><?php echo $data['salary'];?></Td>
							<Td><?php echo $data['vacancy'];?></Td>
							<td><a href="create_job.php?key=<?php echo $data['id'];?>" class="edit">Edit</a></td>
							<td><a href="job_delete.php?key=<?php echo $data['id'] ?>" class="delete">Delete</a></td>
							<?php
							if($data['status']==1)
							{ ?>
								<td>Active</td>
								
							<?php }else{ ?>

								<td>Deactive</td>
							<?php 
							}
							?>
							<td><a href="change_status.php?key=<?php echo $data['id']; ?>">Change</a></td>
						</Tr>
					<?php
					$i++;
					} 

					
					?>
				</table>
			</div>
						
		</div>
<?php
include('footer.php');

?>