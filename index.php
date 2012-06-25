<?php require_once("Detector/lib/Detector/Detector.php"); ?>
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

	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/grid.css">

</head>

<body>

	<div class="page">

		<header>
			<div class="hgroup container_12">
				<div class="logo grid_4">
					<strong>RESS Detector</strong>
				</div>
				<nav class="grid_8">
					<!-- main menu -->
					<ul>
						<li><a href="#">This</a></li>
						<li><a href="#">That</a></li>
						<li><a href="#">Another</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="content">
			<div class="full container_12">

			<?php print_r($ua->family); ?>

			<?php if ($ua->isMobile) : ?>
				<section class="value story">
					<article class="pitch center grid_12">
						<h1>Mobile Feed</h1>
						<p>Growing applications and collaboration one commit at a time.</p>
					</article>
					<ul class="step horizontal blocks">
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>1. Start a blank</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>2. Invite collaborators</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>3. Explore the Greenhouse</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>1. Start a blank</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>2. Invite collaborators</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>3. Explore the Greenhouse</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
					</ul>
				</section>

			<?php else : ?>

				<section class="value story">
					<article class="pitch center grid_12">
						<h1>Desktop Feed</h1>
						<p>Growing applications and collaboration one commit at a time.</p>
					</article>
					<ul class="step horizontal blocks">
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>1. Start a blank</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>2. Invite collaborators</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>3. Explore the Greenhouse</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>1. Start a blank</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>2. Invite collaborators</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
						<li class="step-1 grid_4">
							<figure class="">
							<img src="" />
							</figure>
							<h3>3. Explore the Greenhouse</h3>
							<p>Post-ironic bespoke pork belly, dolore photo booth nesciunt ennui consequat viral dolor delectus organic proident. </p>
						</li>
					</ul>
				</section>

			<?php endif; ?>

			</div>
		</div>

		<div>
			<footer>
				<div class="inner container_12">
					<div class="grid_6">
						<p>&copy; 2012 <a href="http://mistermachine.com">Mister Machine, LLC</a> - all rights reserved</p>
					</div>
					<nav class="grid_6">
						<!-- main menu -->
						<ul>
							<li><a href="/index.php?family=desktop">View Desktop Site</a></li>
							<li><a href="/index.php?family=mobile-basic">View Mobile Site</a></li>
						</ul>
					</nav>
				</div>
			</footer>
		</div>

	</div>

</body>
</html>