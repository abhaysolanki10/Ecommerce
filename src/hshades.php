<html>

<head>
	<link rel="stylesheet" href="../css/stylesheet3.css">
</head>

<body>
	<div id="nav"><br>
		<div id="nav_wrapper"><br>
			<ul>
				<li> <a href="http://localhost/Ecommerce/src/index.php">MEN</a></li>
				<li><a href="http://localhost/Ecommerce/src/women.php">WOMEN</a></li>
				<li><a href="http://localhost/Ecommerce/src/kidsproduct.php">KIDS</a></li>
				<li><a href="http://localhost/Ecommerce/src/login.php">LOGIN</a></li>
				<li><a href="ttp://localhost/Ecommerce/src/index.php">ABOUT US</a></li>

			</ul>
		</div>
	</div>
	<hr color="maroon">
	<center>
		<img src="mai1.jpg" id="slide" width="100%" height="400" />
	</center>
	<hr color="maroon">
	</pre>
	<script type="text/javascript">
		var slideimages = new Array()
		slideimages[0] = new Image()
		slideimages[0].src = "../asset/menshome.jpg"
		slideimages[1] = new Image()
		slideimages[1].src = "../asset/womenhome.jpg"
		slideimages[2] = new Image()
		slideimages[2].src = "../asset/menhome1.jpg"


		var step = 0

		function slideit() {
			if (!document.images)
				return
			document.getElementById('slide').src = slideimages[step].src
			if (step < 2)
				step++
			else
				step = 0
			setTimeout("slideit()", 3500)
		}

		slideit()
	</script>
</body>

</html>