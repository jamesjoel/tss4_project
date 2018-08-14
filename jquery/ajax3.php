<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#btn").click(function(){
				var a = $("#name").val();
				var b = $("#age").val();
				var c = $("#fee").val();
				$.ajax({
					url : "call_send_rec.php",
					data : { stu_name : a, stu_age : b, stu_fee : c},
					type : "post",
					success : function(res){
						$("#box").html(res);
						$("#name").val("");
						$("#age").val("");
						$("#fee").val("");
					}
				})
			});
		});
	</script>
</head>
<body>
<table align="center" width="200">
	<tr>
		<td>Name</td>
		<td><input type="text" id="name"/></td>
	</tr>
	<tr>
		<td>Age</td>
		<td><input type="text" id="age"/></td>
	</tr>
	<tr>
		<td>Fee</td>
		<td><input type="text" id="fee"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="button" id="btn" value="Save">
		</td>
	</tr>
</table>
<hr />
<div id="box" style="margin: 0 auto; background-color: #ccc; text-align: center"></div>
</body>
</html>