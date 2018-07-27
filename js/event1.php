<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #000;
		}
	</style>
	<script type="text/javascript">
		var h=100;
		var w=100;
		function a()
		{
			document.getElementById("box").style.backgroundColor="green";
		}
		function b()
		{
			h++;
			w++;
			document.getElementById("box").style.height=h+"px";
			document.getElementById("box").style.width=w+"px";
			document.getElementById("h_show").innerHTML=h;
			document.getElementById("w_show").innerHTML=w;
		}
		function c()
		{
			h=100;
			w=100;
			document.getElementById("box").style.height="100px";
			document.getElementById("box").style.width="100px";	
			document.getElementById("box").style.backgroundColor="#000";	
			document.getElementById("h_show").innerHTML=h;
			document.getElementById("w_show").innerHTML=w;
		}
	</script>
</head>
<body>
<p>Height : <span id="h_show">100</span>px, Width : <span id="w_show">100</span>px</p>
<div id="box" onmouseover="a()" onmousemove="b()" onmouseout="c()"></div>
</body>
</html>