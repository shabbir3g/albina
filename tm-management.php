<?php
/*
Template Name: Management Page
*/
get_header();
?> 

	<?php 
	 $managment__banner = get_field('managment__banner');
	 if($managment__banner):  ?>
	<div class="banner wow fadeInUp"> 
		<img src="<?php echo $managment__banner['url']; ?>" alt="<?php echo $managment__banner['title']; ?>" />
	 </div>
	 <?php endif; ?>
	 <section class="management-container wow lightSpeedIn">
		<div class="container">
		<?php 
		 $managment_title = get_field('managment_title');
		 if($managment_title):  ?>
		   <div class="border-title">
			  <h2><?php echo $managment_title; ?></h2>
		   </div>
		   <?php endif; ?>
		   <div class="row">
			  <div class="col-md-12">
				 <div class="management-content">
						<?php 
						 $managment_content = get_field('managment_content');
						 if($managment_content):  ?>
						 
							<?php echo $managment_content; ?>
						 
						 <?php endif; ?>
						
				 </div>
			  </div>
		   </div>
		</div>
	 </section>
	 <section class="management-diagram wow slideInRight">
		 <?php 
		 $structure_title = get_field('structure_title');
		 if($structure_title):  ?>
		<h2 style="margin-left: 106px"><?php echo $structure_title; ?></h2>
		<?php endif; ?>
		
		 <?php 
		 $organization_structure_image = get_field('organization_structure_image');
		 if($organization_structure_image):  ?>
			<img src="<?php echo $organization_structure_image['url']; ?>" alt="<?php echo $organization_structure_image['title']; ?>" />
		<?php endif; ?>
	 </section>
<?php get_footer(); ?>