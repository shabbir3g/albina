<?php
/*
Template Name: Approvals Page
*/
get_header();
?>
	<?php 
	 $approval_banner = get_field('approval_banner');
	 if($approval_banner):  ?>
	<div class="banner wow fadeInUp"> 

		<img src="<?php echo $approval_banner['url']; ?>" alt="<?php echo $approval_banner['title']; ?>" />
	</div>
	<?php endif; ?>
	<section class="approvals wow lightSpeedIn"> 
		<div class="container">
		<?php 
		 $approvals_ttitle = get_field('approvals_ttitle');
		 if($approvals_ttitle):  ?>
			<div class="border-title">
				<h2><?php echo $approvals_ttitle; ?></h2>
			</div>
		<?php endif; ?>
			<div class="row"> 
				<div class="col-md-5"> 
					<?php 
					 $app_left_image = get_field('app_left_image');
					 if($app_left_image):  ?>
					<div class="col-md-4"> 
						<img src="<?php echo $app_left_image['url']; ?>" alt="<?php echo $app_left_image['title']; ?>" />
					</div>
					<?php endif; ?>
					
					<?php 
					 $app_left_content = get_field('app_left_content');
					 if($app_left_content):  ?>
					<div class="col-md-8"> 
						<p><?php echo $app_left_content; ?></p>
					</div>
					<?php endif; ?>
				</div>
				<div class="col-md-7"> 
					<div class="row"> 
						<?php 
						 $app_right_image = get_field('app_right_image');
						 if($app_right_image):  ?>
						<div class="col-md-5"> 
							<img src="<?php echo $app_right_image['url']; ?>" alt="<?php echo $app_right_image['title']; ?>" />
						</div>
						<?php endif; ?>
						
						<?php 
						 $app_right_content = get_field('app_right_content');
						 if($app_right_content):  ?>
						<div class="col-md-7"> 
							<p><?php echo $app_right_content; ?></p>
							
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>