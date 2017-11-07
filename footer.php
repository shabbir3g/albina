<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package albina
 */

?>
 <footer class="footer-area">
		<div class="container">
		   <div class="row">
			  <div class="col-md-3">
			  
				<?php echo dynamic_sidebar('footerwidget-1'); ?>
				
					
			  </div>
			  <div class="col-md-4">
			  <?php echo dynamic_sidebar('footerwidget-2'); ?>
				
			  </div>
			  <div class="col-md-5">
			   <?php echo dynamic_sidebar('footerwidget-3'); ?>
				
			  </div>
			  <div class="totop"> 
				 <a href="#"><i class="fa fa-chevron-up"></i></a>
			  </div>
		   </div>
		</div>
	 </footer>
	 
	 <?php wp_footer(); ?>
  </body>
</html>