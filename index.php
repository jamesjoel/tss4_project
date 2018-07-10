<?php
include('db.php');
include('header.php');

$que = "SELECT * FROM jobs";
$result = mysqli_query($con, $que);


?>
		<div id="right-content">
			<h3>Latest Jobs</h3>
			<?php
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<div class="job-box">
					<div class="left-job">
						<p>Demo</p>
						<img src="" height="50" width="50" />
					</div>
					<div class="middle-job">
						<p class="title"><?php echo $data['job_title'];?>(<?php echo $data['vacancy'];?>)</p>
						<span><?php echo $data['skills'];?></span>
					</div>
					<div class="right-job"></div>
				</div>
			<?php
			}
			?>
			
		</div>

<?php
include('footer.php');

?>
