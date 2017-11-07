<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package albina
 */

?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	 <meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	  
	<?php 
		 $favicon_uploader = get_field('favicon_uploader','options');
		 if($favicon_uploader):  ?>
	 <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon_uploader['url']; ?>" />
	<?php endif; ?>
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	 <!--[if lt IE 9]>
	 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	 <![endif]-->
	 <?php wp_head(); ?>
  </head>
	<body <?php body_class(); ?>>
	 <header>
		<nav class="navbar navbar-default">
		   <div class="container">
			  <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">
				 <span class="icon-bar"><span class="inner"></span></span>
				 <span class="icon-bar"><span class="inner"></span></span>
				 <span class="icon-bar"><span class="inner"></span></span>
				 </button>
				 
				 <?php 
				 $logo_uploader = get_field('logo_uploader','options');
				 if($logo_uploader):  ?>
				 <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $logo_uploader['url'] ?>" alt="<?php echo $logo_uploader['title'] ?>" /></a>
				 <?php endif; ?>
				 
			  </div>
			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <?php wp_nav_menu(array(
					'theme_location'		=> 'main-menu',
					'menu_class'		=> 'nav navbar-nav navbar-right',
					'fallback_cb'		=> 'main_default',
				  )); ?>
				
			  </div>
			  <!-- /.navbar-collapse -->
		   </div>
		   <!-- /.container-fluid -->
		</nav>
	 </header>