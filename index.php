<?php require_once("Detector/Detector.php"); ?>
<!doctype html>	

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>		<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>		<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>		<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<link rel="stylesheet" href="css/style.css?v=2">
	<script src="js/libs/modernizr-1.6.min.js"></script>

</head>

<body>

	<div id="container">
		<header>
			<h1>RESS Detector</h1>
		</header>
		
		<div id="main">
		<?php 
		if ($ua->isMobile) {
			echo "Mobile";
		} else {
			echo "Desktop";
		}
		?>
		</div>
		
		<footer>

		</footer>
	</div> <!-- end of #container -->


	<script></script>
	
</body>
</html>