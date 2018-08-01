<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("p").click(function(){
				// $(this).css({"background-color":"red", "font-size":"25px"});
				 $(this).animate({"width" : "500px", "height" : "500px"}, 3000);

			});
		});
	</script>
	<style type="text/css">
		p{
			margin: 0;
			width: 300px;
			background-color: #566573;
			box-shadow: 0 0 10px #000;
			color: #000;
			border-radius: 5px;
			text-align: justify;
			padding: 10px;

		}
	</style>
</head>
<body>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


</body>
</html>