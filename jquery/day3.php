<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				// $("#box").hide();
				// $("#box").toggle();
				 // $("#box").slideUp(3000);
				 // $("#box").fadeOut(3000);
				 // $("#box").show();
				 // $("#box").slideDown(2000);
				 $("#box").fadeIn(2000);

			});
		});
	</script>
	<style type="text/css">
		#box{
			height: 300px;
			width: 300px;
			background-color: #65ACED;
			display: none;
		}
	</style>
</head>
<body>
<button>ok</button>
<div id="box"></div>
</body>
</html>