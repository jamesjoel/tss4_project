<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$.ajax({
					url : "only_call.php",
					type : "get"
				});
			});
		});
	</script>
</head>
<body>
<button>OK</button>
</body>
</html>