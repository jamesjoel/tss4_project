<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: red;
		}
	</style>
	<script type="text/javascript">
		function demo()
		{
			document.getElementById("box").style.backgroundColor="blue";
			document.getElementById("box").style.height="300px";
			document.getElementById("box").style.width="300px";
		}
	</script>
</head>
<body>
<button onclick="demo()">OK</button>
<div id="box"></div>
</body>
</html>