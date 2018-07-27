<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			var a = Math.random();
			var b = a*600;
			var c = Math.floor(b);
			

			var x = Math.random();
			var y = x*500;
			var z = Math.floor(y);
			
			document.getElementById("box").style.marginLeft=c+"px";
			document.getElementById("box").style.marginTop=z+"px";

			
		}
	</script>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #2451AC;
			border-radius: 100px;
		}
	</style>
</head>
<body>
<div id="box" onmouseover="show()"></div>
</body>
</html>