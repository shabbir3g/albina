<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package albina
 */

get_header(); ?>

	<div class="banner wow fadeInUp">
		<?php $banner_project = get_field('banner_project','options'); 
		if($banner_project):  ?>
		<img src="<?php echo $banner_project['url']; ?>" alt="<?php echo $banner_project['title']; ?>" />
		<?php endif; ?>
	 </div>
	 <section class="product-container wow lightSpeedIn">
		<div class="container">
			<?php $project_title = get_field('project_title','options'); 
			if($project_title):  ?>
		   <div class="border-title">
			  <h2><?php echo $project_title; ?></h2>
		   </div>
		   <?php endif; ?>
		   <div class="row">
			<?php $project_feature_image = get_field('project_feature_image','options'); 
				if($project_feature_image):  ?>
			  <div class="col-md-3">
				 <div class="product-image"> 
					<img src="<?php echo $project_feature_image['url']; ?>" alt="<?php echo $project_feature_image['title']; ?>" />
				 </div>
			  </div>
			  <?php endif; ?>
			  <?php $project_content = get_field('project_content','options'); 
				if($project_content):  ?>
			  <div class="col-md-9">
				 <div class="product-content">
					<p><?php echo $project_content; ?></p>
				 </div>
			  </div>
			  <?php endif; ?>
		   </div>
		</div>
	 </section>
	 <section class="project-bottom wow slideInRight">
		<div class="container">
		   <div class="row">
			<?php while(have_posts()): the_post(); ?>
				<div class="single-poroject">  
					<div class="col-md-6"> 
						<ul class="project-details"> 
						
							<?php $project_name = get_field('project_name'); 

							if($project_name):  ?>
							<li><a href="#">Project Name</a></li>
							<li><a href="#"><?php echo $project_name; ?></a></li>
							<?php endif; ?>
							
							<?php $project_type = get_field('project_type'); 

							if($project_type):  ?>
							<li><a href="#">Project Type</a></li>
							<li><a href="#"><?php echo $project_type; ?></a></li>
							<?php endif; ?>
							
							<?php $place_of_the_project = get_field('place_of_the_project'); 

							if($place_of_the_project):  ?>
							<li><a href="#">Place of the project</a></li>
							<li><a href="#"><?php echo $place_of_the_project; ?></a></li>
							<?php endif; ?>
							
							<?php $the_amount = get_field('the_amount'); 

							if($the_amount):  ?>
							<li><a href="#">The amount of concrete in cubic meters</a></li>
							<li><a href="#"><?php echo $the_amount; ?></a></li>
							<?php endif; ?>
						</ul>
					</div>
					<div class="col-md-6">
							<?php $proect_gallery = get_field('proect_gallery');  

						  if($proect_gallery):	 ?>				
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner projectslider" role="listbox">
						  
						 <?php 
						  foreach($proect_gallery as $url): ?>
							  
							<div class="item">
							  <img src="<?php echo $url['url']; ?>" alt="...">
							</div>
							
							  
							 
							  
						<?php endforeach; ?>
							
							
							
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<img src="<?php echo get_template_directory_uri(); ?>/images/project-left.png" alt="" />
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<img src="<?php echo get_template_directory_uri(); ?>/images/project-right.png" alt="" />
							<span class="sr-only">Next</span>
						  </a>
						</div>
						
						<?php  endif;  ?>
						
					</div>
				</div>
				
				<?php endwhile; ?>
				<ul class="project-pagination"> 
				<?php the_posts_pagination(array(
					'screen_reader_text'	=> ' ',
					'type'					=> 'list',
				)); ?>
				</ul>
				
				
		   </div>
		</div>
	 </section>
	 <?php get_footer(); ?>
