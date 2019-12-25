<?php
/**
 * Maintenance mode template that's shown to logged out users.
 *
 * @package   dd-maintenance-mode
 * @copyright Copyright (c) 2022, Ankush Anand
 * @license   GPL
 */
?>

<!DOCTYPE html>
<html class="dd">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo esc_html( get_bloginfo( 'name' ) ); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="">
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Bootstrap and default Style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Google Fonts -->
	<link class="gf-headline" href='https://fonts.googleapis.com/css?family=Pacifico:400&subset=' rel='stylesheet' type='text/css'>
			
	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
	<link rel="stylesheet" href="<?php echo plugins_url( 'assets/css/maintenance.css', dirname( __FILE__ ) ); ?>">
	<!-- Calculated Styles -->
	<style type="text/css">
	
	

	</style>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Modernizr -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	
	<!-- Google Analytics Code Goes Here-->
</head>
<body>
	<div id="dd-page">
		<div id="dd-content">
			
			<h1 id="dd-headline"><?php echo esc_html( get_bloginfo( 'name' ) ); ?> will be Coming Soon</h1>			    				
			
			<div id="dd-description">Get ready! Something really cool is coming!</div>
			
			<!--By Uncommenting this Section and Adding Social Links, It Can be Shown in Front End-->
			
            <!--<div id="dd-socialprofiles">-->
			<!--	<a href="#" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a>			-->
			<!--	<a href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>			-->
			<!--	<a href="#" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>			-->
			<!--	<a href="#" target="_blank"><i class="fa fa-pinterest fa-2x"></i></a>			-->
			<!--	<a href="#" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>			-->
			<!--</div>-->
			
			<span id="dd-contact"><?php
			
			$admin_email = get_option('admin_email');
			echo '<a href="mailto:'.$admin_email.'">Wanna Contact Administrator</a>';
			
			?></span>

			
	</div>


	<script>
		// Animate Delay
		setTimeout(function(){ jQuery("#dd-content").show().addClass('animated fadeIn'); }, 250);

		
		$('#dd-content').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', 
			function(){
				var width = $('#dd-field-wrapper').width();
				if(width < 480 && width != 0){
					resize();
				}
			}
		);
	</script>

	</body>
</html>
