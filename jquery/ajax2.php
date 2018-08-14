<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$.ajax({
					url : "call_send.php",
					type : "post",
					data : { a :"rohit", b : 25, c : 3000 }
				});
			});
		});
	</script>
</head>
<body>
<button>OK</button>
</body>
</html>