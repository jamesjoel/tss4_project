<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 300px;
			width: 300px;
			background-color: #145200;
		}
	</style>
	<script type="text/javascript">
		function add()
		{
			var h1 = document.createElement("h1");
			h1.innerHTML="hello";
			var box = document.getElementById("box");
			box.appendChild(h1);
		}
	</script>
</head>
<body>
<button onclick="add()">OK</button>
<div id="box"></div>
</body>
</html>