<?php

defined('Title') || define('Title', 'عنوان سایت');
defined('SubTitle') || define('SubTitle', 'توضیح سایت');


?>
<!DOCTYPE html>
<html>

<head>
	<title><?php echo Title; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.dropotron.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-panels.min.js"></script>
	<script src="js/init.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
		<link rel="stylesheet" href="css/style-noscript.css" />
	</noscript>
	<link rel="stylesheet" href="css/IRANSans_FaNum/css/fontiran.css" />
</head>


<body class="homepage">

	<!-- Header -->
	<div id="header">

		<!-- Inner -->
		<div class="inner">
			<header>
				<h1><a href="#" id="logo"><?php echo Title; ?></a></h1>
				<hr />
				<span class="byline"><?php echo SubTitle; ?></span>
			</header>
			<footer>
				<a href="#banner" class="button circled scrolly">مشاهده</a>
			</footer>
		</div>

		<?php include('nav.php') ?>

	</div>


	<?php include('carousel.php') ?>



	<?php include('main.php') ?>

	<?php include('footer.php') ?>


</body>

</html>