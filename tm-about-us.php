<?php
/*
Template Name: About Us Page
*/
get_header();
?>

	<?php 
	 $about_banner = get_field('about_banner');
	 if($about_banner):  ?>
	<div class="banner wow fadeInUp"> 
		<img src="<?php echo $about_banner['url']; ?>" alt="<?php echo $about_banner['title']; ?>" />
	</div>
	<?php endif; ?>
	<section class="about-us wow lightSpeedIn"> 
		<div class="container">
			 <ul class="nav nav-tabs">
				<?php 
				 $tabs_title_01 = get_field('tabs_title_01');
				 if($tabs_title_01):  ?>
				<li class="active"><a data-toggle="tab" href="#home"><?php echo $tabs_title_01 ; ?></a></li>
				<?php endif; ?>
				
				<?php 
				 $tabs_title_02 = get_field('tabs_title_02');
				 if($tabs_title_02):  ?>
				<li><a data-toggle="tab" href="#menu1"><?php echo $tabs_title_02; ?></a></li>
				<?php endif; ?>
				
				
				<?php 
				 $tabs_title_03 = get_field('tabs_title_03');
				 if($tabs_title_03):  ?>
				<li><a data-toggle="tab" href="#menu2"><?php echo $tabs_title_03; ?></a></li>
				<?php endif; ?>
				
				
				<?php 
				 $tabs_title_04 = get_field('tabs_title_04');
				 if($tabs_title_04):  ?>
				<li><a data-toggle="tab" href="#menu3"><?php echo $tabs_title_04; ?></a></li>
				<?php endif; ?>
				
				
			  </ul>
			  <div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<?php 
					 $tabs_title_01 = get_field('tabs_title_01');
					 if($tabs_title_01):  ?>
					<div class="border-title">
					  <h2><?php echo  $tabs_title_01; ?></h2>
					</div>
					<?php endif; ?>
					<div class="row"> 
					
					
					<?php 
					 $tabs_content_01 = get_field('tabs_content_01');
					 if($tabs_content_01): echo $tabs_content_01;  ?>
					 
					 <?php endif; ?>
					
						
					</div>
				</div>
				<div id="menu1" class="tab-pane fade">
				  <?php 
					 $tabs_title_02 = get_field('tabs_title_02');
					 if($tabs_title_02):  ?>
					<div class="border-title">
					  <h2><?php echo  $tabs_title_02; ?></h2>
					</div>
					<?php endif; ?>
					<div class="row"> 
					
					<?php 
					 $tabs_content_02 = get_field('tabs_content_02');
					 if($tabs_content_02): echo $tabs_content_02;  ?>
					 
					 <?php endif; ?>
					
					</div>
				</div>
				<div id="menu2" class="tab-pane fade">
					<?php 
					 $tabs_title_03 = get_field('tabs_title_03');
					 if($tabs_title_03):  ?>
					<div class="border-title">
					  <h2><?php echo  $tabs_title_03; ?></h2>
					</div>
					<?php endif; ?>
					<div class="row"> 
						<?php 
						 $tabs_content_03 = get_field('tabs_content_03');
						 if($tabs_content_03): echo $tabs_content_03;  ?>
						 
						 <?php endif; ?>
					
					</div>
				</div>
				<div id="menu3" class="tab-pane fade">
				<?php 
					 $tabs_title_04 = get_field('tabs_title_04');
					 if($tabs_title_04):  ?>
					<div class="border-title">
					  <h2><?php echo  $tabs_title_04; ?></h2>
					</div>
					<?php endif; ?>
					<div class="row"> 
					
					<?php 
						 $tabs_content_04 = get_field('tabs_content_04');
						 if($tabs_content_04): echo $tabs_content_04;  ?>
						 
						 <?php endif; ?>
						
					</div>
				</div>
			  </div>
		</div>
	</section>
	<section class="vision-mission wow slideInRight"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-6"> 
					<div class="our-vision wow flipInY">

						<?php 
						 $our_vision = get_field('our_vision');
						 if($our_vision): echo $our_vision;  ?>
						 
						 <?php endif; ?>
						 
						 
						
					</div>
				</div>
				<div class="col-md-6"> 
					<div class="our-mission wow flipInX"> 
						<?php 
						 $our_mission = get_field('our_mission');
						 if($our_mission): echo $our_mission;  ?>
						 
						 <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="our-policy wow slideInLeft"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-12"> 
					
						<?php 
						 $our_policy = get_field('our_policy');
						 if($our_policy): echo $our_policy;  ?>
						 
						 <?php endif; ?>
						
					</div>
				</div>
			</div>
	</section>
<?php get_footer(); ?>