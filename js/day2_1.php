<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("f_num").value;
			var b = document.getElementById("s_num").value;

			var x = parseInt(a);
			var y = parseInt(b);


			var c = x+y;
			// document.getElementById("ans").value=c;
			document.getElementById("ans").innerHTML=c;
			// alert("Your Ans is "+c);
		}
	</script>
</head>
<body>
First Num <input type="text" id="f_num">
<Br />
<Br />
Second Num <input type="text" id="s_num">
<br />
<br />
<button onclick="demo()">OK</button>
<br />
<br />
<!-- Ans : <input type="text" id="ans" /> -->
Your Ans Is : <span id="ans">0</span>
</body>
</html>