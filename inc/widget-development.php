<?php 


	class albina_custom_widget extends WP_Widget{
		
		
		
		public function __construct(){
			
			
			parent::__construct('albina_custom_widget','Albina Contact Us',array(
				'description'	=> 'You can add your details here'
			));
			
			
		}
		
		public function widget($first, $second){


		$title = isset($second['title']) ? $second['title'] : '';
		$address = isset($second['address']) ? $second['address'] : '';
		$mobile = isset($second['mobile']) ? $second['mobile'] : '';
		$email = isset($second['email']) ? $second['email'] : '';
		?>
		
			<?php echo  $first['before_widget']; ?>
				<?php echo  $first['before_title']; ?><?php echo $title;  ?><?php echo  $first['after_title']; ?>
					<?php if($address):  ?>
					<p><i class="fa fa-map-marker"></i> <?php echo $address; ?></p>
					<?php endif; ?>
					
					<?php if($mobile): ?>
					<p><i class="fa fa-mobile"></i> <?php echo $mobile; ?></p>
					<?php endif; ?>
					
					<?php if($email): ?>
					<p><i class="fa fa-envelope"></i> <?php echo $email; ?></p>
					<?php endif; ?>
					<ul>
						<?php 
						$facebook = get_field('facebook_url','options');
						if($facebook):  ?>
					   <li><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook-square"></i></a></li>
					   <?php endif; ?>
					   
					   
					   <?php 
						$twitter_url = get_field('twitter_url','options');
						if($twitter_url):  ?>
					   <li><a href="<?php echo $twitter_url; ?>"><i class="fa fa-twitter"></i></a></li>
					    <?php endif; ?>
						
						<?php 
						$instagram_url = get_field('instagram_url','options');
						if($instagram_url):  ?>
					   <li><a href="<?php echo $instagram_url; ?>"><i class="fa fa-instagram"></i></a></li>
					   <?php endif; ?>
					   
					   
					   <?php $linkedin_url = get_field('linkedin_url','options');
						if($linkedin_url):  ?>
					   <li><a href="<?php echo $linkedin_url; ?>"><i class="fa fa-linkedin-square"></i></a></li>
					   <?php endif; ?>
					   
					    <?php $youtube_url = get_field('youtube_url','options');
						if($youtube_url):  ?>
					   <li><a href="<?php echo $youtube_url; ?>"><i class="fa fa-youtube"></i></a></li>
					   <?php endif; ?>
					</ul>
				
			<?php echo  $first['after_widget']; ?>
			
			
			
			<?php 
			
			}
			
		public function form($second){
			
			
			$title = isset($second['title']) ? $second['title'] : '';
			$address = isset($second['address']) ? $second['address'] : '';
			$mobile = isset($second['mobile']) ? $second['mobile'] : '';
			$email = isset($second['email']) ? $second['email'] : '';
			
			?>
			
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>">Title</label> 
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('address'); ?>">Address</label> 
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" value="<?php echo $address; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('mobile'); ?>">Mobile</label> 
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('mobile'); ?>" name="<?php echo $this->get_field_name('mobile'); ?>" value="<?php echo $mobile; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('email'); ?>">E-mail</label> 
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" value="<?php echo $email; ?>" />
			</p>
			
			
			
			
			
			
			<?php 
			
			
			
			
		}
		
		
		
		
		
		
	}
	
	
	
	
	
	add_action('widgets_init',function(){
		
		
		
		register_widget('albina_custom_widget');
		
		
		
		
	});




?>