<?php

/**
 * Maintenance mode template that's shown to logged out users.
 *
 * @package   dd-simplest-maintenance-mode
 * @copyright Copyright (c) 2022, Ankush Anand
 * @license   GPL
 */
?>

<!DOCTYPE html>
<html class="flexbox">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo esc_html(get_bloginfo('name')); ?> is Under Maintenance</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="">


	<!-- Google Fonts -->
	<link class="gf-headline" href='https://fonts.googleapis.com/css?family=Pacifico:400&subset=' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" href="<?php echo plugins_url('assets/css/maintenance.css', dirname(__FILE__)); ?>">
	<!-- Calculated Styles -->
	<style type="text/css">



	</style>

	<!-- Google Analytics Code Goes Here-->
</head>

<body>
	<div id="ddsmm-page">
		<div id="ddsmm-content">

			<h1 id="ddsmm-headline" class="fadeIn"><?php echo esc_html(get_bloginfo('name')); ?> will be Coming Soon</h1>

			<div id="ddsmm-description" class="fadeIn">Get ready! Something really cool is coming!</div>

			<span id="ddsmm-contact" class="fadeIn"><?php

													$admin_email = get_option('admin_email');
													echo '<a href="mailto:' . $admin_email . '">Wanna Contact Administrator?</a>';

													?></span>


		</div>



</body>

</html>