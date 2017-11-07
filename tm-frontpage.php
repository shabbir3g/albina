<?php 

/*
Template Name: Home Page
*/
get_header();

?>
	<?php 
	 $home_banner = get_field('home_banner');
	 if($home_banner):  ?>
	<div class="banner wow fadeInUp"> 
		<img src="<?php echo $home_banner['url'] ?>" alt="<?php echo $home_banner['title'] ?>" />
	</div>
	<?php endif; ?>
	<section class="who-we-area"> 
		<div class="container">
			 <div class="row">
				 <div class="col-md-8">
				 <dl class="featured-category-items wow fadeInLeft">
					<?php 
					 $home_title = get_field('home_title');
					 if($home_title):  ?>
					<dt>
					   <h1><?php echo $home_title; ?></h1>
					</dt>
					<?php endif; ?>
					<dd>
						<?php 
						 $home_content = get_field('home_content');
						 if($home_content):  ?>
						<div class="table-cell">
						<?php echo  $home_content; ?>
						
						
						<?php 
						 $home_read_more = get_field('home_read_more');
						 
						 if($home_read_more):  ?>
						<a href="<?php echo $home_read_more['url'] ?>" class="readmore"><?php echo $home_read_more['title'] ?></a>
						<?php endif; ?>
						</div>
						<?php endif; ?>
					</dd>
				 </dl>
				 </div>
				 <div class="col-md-4">
					<?php 
						 $home_feature_image = get_field('home_feature_image');
						 
						 if($home_feature_image):  ?>
					<div class="featured-category-image wow fadeInDown"> 
						<img src="<?php echo $home_feature_image['url'] ?>" alt="<?php echo $home_feature_image['title'] ?>" >
					</div>
					<?php endif; ?>
					
				 </div>
			 </div><!--row-->
		</div>
	</section>
	
	<?php  
	 $certified_background_image = get_field('certified_background_image');
	 
	 if($certified_background_image):  ?>
	<section class="certified-area wow slideInRight" style="background-image: url('<?php echo  $certified_background_image['url']; ?>');"> 
	
	
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-6 col-sm-6"> 
					<div class="left-certified wow flipInY"> 
					<?php  
						 $certified_left_text = get_field('certified_left_text');
						 
						 if($certified_left_text):  ?>
							<?php echo $certified_left_text; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6"> 
					<div class="right-certified wow flipInX">
						<?php  
						 $certified_right_text = get_field('certified_right_text');
						 
						 if($certified_right_text):  ?>
							<?php echo $certified_right_text; ?>
						<?php endif; ?>					
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	
	
	
	<?php  
	 $home_footer_slider = get_field('home_footer_slider');
	 
	
	 
	 
	 if($home_footer_slider):  ?>
	<section class="slider-bottom wow slideInLeft"> 
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		  <?php $ami = 1;  $tumi = 1;  foreach($home_footer_slider as $slider):  ?>
			<li data-target="#carousel-example-generic" data-slide-to="<?php echo $tumi++; ?>" class=""><?php echo $ami++; ?></li>
			<?php  endforeach;  ?>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  
		  <?php  foreach($home_footer_slider as $slider):  ?>
			<div class="item">
			  <img src="<?php echo $slider['slider_image']['url']; ?>" alt="...">
			  <div class="carousel-caption">
				<h2><?php echo $slider['slider_text']; ?></h2>
			  </div>
			</div>
			<?php endforeach; ?>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	</section>
	<?php endif; ?>
	
<?php get_footer(); ?>