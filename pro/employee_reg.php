<?php
include('header.php');

?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#submit_btn").click(function(){
			var a = $("#f_name").val();
			var b = $("#user_name").val();
			var c = $("#pass").val();
			var d = $("#re_pass").val();
			var e = $("#add").val();
			var f = $("#city").val();
			var g = $("#contact").val();




			var h = $("#male").is(":checked");
			var i = $("#female").is(":checked");





			var check_val=true;


			if(a=="")
			{
				check_val=false;
				$("#f_name_msg").html("Insert Your Full Name");
			}
			else
			{
				$("#f_name_msg").html("");

			}
			if(b=="")
			{
				check_val=false;
				$("#user_name_msg").html("Insert Your Username/Email");
			}
			else
			{
				$("#user_name_msg").html("");

			}
			if(c=="")
			{
				check_val=false;
				$("#pass_msg").html("Insert Password");
			}
			else
			{
				$("#pass_msg").html("");

			}
			if(d=="")
			{
				check_val=false;
				$("#re_pass_msg").html("Insert Re-Password");
			}
			else
			{
				$("#re_pass_msg").html("");
				if(c != d)
				{
					check_val=false;
					$("#re_pass_msg").html("Correct Your Re-Password");
				}
				else
				{
					$("#re_pass_msg").html("");

				}

			}
			if(e=="")
			{
				check_val=false;
				$("#add_msg").html("Insert Full Address");
			}
			else
			{
				$("#add_msg").html("");

			}
			if(f=="Select")
			{
				check_val=false;
				$("#city_msg").html("Select Your City");
			}
			else
			{
				$("#city_msg").html("");

			}
			if(g=="")
			{
				check_val=false;
				$("#contact_msg").html("Insert Your Contact Number");
			}
			else
			{
				$("#contact_msg").html("");
				if(isNaN(g)==true) // isNotaNumber
				{
					check_val=false;
					$("#contact_msg").html("Insert Numbers Only");
				}
				else
				{
					
					$("#contact_msg").html("");
					if(g.length != 10)
					{
						check_val=false;
						$("#contact_msg").html("Insert 10 Numbers Only");

					}
					else
					{
						
						$("#contact_msg").html("");
					}
				}

			}
			if(h == false && i == false)
			{
				check_val=false;
				$("#gender_msg").html("Select Your Gender");
			}
			else
			{
				$("#gender_msg").html("");

			}
			

			return check_val;
		});
	});
</script>
<style type="text/css">
	.error_msg td{
		height: 14px !important;
		font-size: 13px !important;
		color: red;
	}
</style>
		<div id="right-content">
			<h3>Employee Signup Here</h3>
			<div id="login-box">
				<form method="post" action="employee_save.php">
				<table id="tab" align="center">
					<tr>
						<td>Full Name</td>
						<td><input id="f_name" type="text" name="f_name" class="input" placeholder="Full Name"></td>
					</tr>
					<tr class="error_msg">
						<td></td>
						<td id="f_name_msg"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input id="user_name" type="text" name="username" class="input" placeholder="Username"></td>
					</tr>
					<tr class="error_msg">
						<td></td>
						<td id="user_name_msg"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input id="pass" type="password" name="pass" class="input" placeholder="Password"></td>
					</tr>
					<tr class="error_msg">
						<td></td>
						<td id="pass_msg"></td>
					</tr>
					<tr>
						<td>Re-Password</td>
						<td><input id="re_pass" type="password" class="input" placeholder="Re-Password"></td>
					</tr>
					<tr class="error_msg">
						<td></td>
						<td id="re_pass_msg"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><textarea id="add" placeholder="Address" name="add"></textarea></td>
					</tr>
					<tr class="error_msg">
						<td></td>
						<td id="add_msg"></td>
					</tr>
					<tr>
						<td>City</td>
						<td><select id="city" class="input" name="city">
							<option>Select</option>
							<option>Indore</option>
							<option>Ujjain</option>
							<option>Bhopal</option>
							<option>Mumbai</option>
						</select></td>
					</tr>
					<tr class="error_msg">
						<td></td>
						<td id="city_msg"></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><input id="contact" type="text" name="contact" placeholder="Contact" class="input"></td>
					</tr>
					<tr class="error_msg">
						<td></td>
						<td id="contact_msg"></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>Male<input id="male" type="radio" name="gender">
							Female<input id="female" type="radio" name="gender">
						</td>
					</tr>
					<tr class="error_msg">
						<td></td>
						<td id="gender_msg"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input class="btn" id="submit_btn" type="submit" value="Registration">
						</td>
					</tr>
				</table>
			</div>
			
<?php
include('footer.php');

?>