<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				//var a = document.getElementById("").value;
				// var a = $("input").val();
				// alert(a);
				var a = "Mukul";
				//document.getElementById("").value=a;
				$("input").val(a);

			});
			$("h1").click(function(){
				// var b = $("h1").html();
				// alert(b);
				$("h1").html("indore");
			});
		});
	</script>
</head>
<body>
<input type="text" />
<br />
<br />
<button>OK</button>

<h1>hello</h1>
</body>
</html>