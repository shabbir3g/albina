<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package albina
 */

get_header(); ?>

	
			<?php
			while ( have_posts() ) : the_post(); ?>
			<div class="banner wow fadeInUp"> 
				<?php the_post_thumbnail(); ?>
			</div>
			<section style="padding: 100px 0;" class="contact-us wow lightSpeedIn"> 
			<div class="container">

				<div class="border-title">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="row"> 
					<div class="col-md-12"> 
						<p><?php the_content(); ?></p>
					</div>
				</div>
				</div><!-- #main -->
		</section><!-- #primary -->
			<?php 
			endwhile; // End of the loop.
			?>

		

<?php

get_footer();
