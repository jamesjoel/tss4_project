<?php
include('db.php');
include('header.php');

$que = "SELECT * FROM jobs LEFT JOIN company ON jobs.cid = company.id  WHERE jobs.status = 1 ORDER BY jobs.id DESC";
$result = mysqli_query($con, $que);


?>
		<div id="right-content">
			<h3>Latest Jobs</h3>
			<?php
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<div class="job-box">
					<div class="left-job">
						<p><?php echo $data['company_name'];?></p>
						<img src="company_logo/<?php echo $data['logo'];?>" height="50" width="50" />
					</div>
					<div class="middle-job">
						<p class="title"><?php echo $data['job_title'];?>(<?php echo $data['vacancy'];?>)</p>
						<span><?php echo $data['skills'];?></span>
					</div>
					<div class="right-job">
						<a href="apply.php">Apply</a>
					</div>
				</div>
			<?php
			}
			?>
			
		</div>

<?php
include('footer.php');

?>
