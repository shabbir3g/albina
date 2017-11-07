<?php
/*
Template Name: Contact Page
*/
get_header();
?>

	<?php 
	 $contacts_banner = get_field('contacts_banner');
	 if($contacts_banner):  ?>
	<div class="banner wow fadeInUp"> 
		<img src="<?php echo $contacts_banner['url']; ?>" alt="<?php echo $contacts_banner['title']; ?>" />
	</div>
	<?php endif; ?>
	<section class="contact-us wow lightSpeedIn"> 
		<div class="container">
			<?php 
			 $contacts_title = get_field('contacts_title');
			 if($contacts_title):  ?>
			<div class="border-title">
				<h2><?php echo  $contacts_title; ?></h2>
			</div>
			<?php endif; ?>
			<div class="row"> 
			
				<?php 
				 $contact_address_details = get_field('contact_address_details');
				 if($contact_address_details): 

				foreach($contact_address_details as $cont_details): ?>
				
				<?php echo $cont_details['address_details']; ?>
				
				<?php endforeach; ?>
				
				<?php endif; ?>
				
				
				
				
			</div>
			<div class="contact-bottom-form"> 
				<div class="row"> 
					<div class="col-md-5"> 
					
						<?php 
						 $left_text_cont = get_field('left_text_cont');
						 if($left_text_cont):  ?>
						 
						<?php echo $left_text_cont; ?>
						
						<?php endif; ?>
						
					</div>
					<div class="col-md-7"> 
						<div class="contact-form"> 
						<?php 
						 $contact_form_shortcode = get_field('contact_form_shortcode');
						 if($contact_form_shortcode):  ?>
						 
						<?php echo do_shortcode($contact_form_shortcode); ?>
						
						<?php endif; ?>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>