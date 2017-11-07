<?php
/*
Template Name: Products Page
*/
get_header();
?>
	<div class="banner wow fadeInUp"> 
	<?php 
	 $products_banner = get_field('products_banner');
	 if($products_banner):  ?>
		<img src="<?php echo $products_banner['url']; ?>" alt="<?php echo $products_banner['title']; ?>" />
	<?php endif; ?>
	 </div>
	 <section class="product-container wow lightSpeedIn">
		<div class="container">
			<?php $products_title = get_field('products_title');
				if($products_title):  ?>
		   <div class="border-title">
			  <h2><?php echo $products_title; ?></h2>
		   </div>
		   <?php endif; ?>
		   <div class="row">
			  <div class="col-md-3">
				
				 <div class="product-image">
					<?php $products_feature_image = get_field('products_feature_image');
					if($products_feature_image):  ?>
					<img src="<?php echo $products_feature_image['url']; ?>" alt="<?php echo $products_feature_image['title']; ?>" />
					<?php endif; ?>
				 </div>
			  </div>
			  <div class="col-md-9">
				 <div class="product-content">
				 <?php $products_content = get_field('products_content');
					if($products_content):  ?>
					<p><?php echo $products_content; ?></p> 
					<?php endif; ?>
				 </div>
			  </div>
		   </div>
		</div>
	 </section>
	 <section class="vision-mission wow slideInRight">
		<div class="container">
		   <div class="row">
			  <div class="col-md-12">
				 <div class="enigma_blog_post_content">
					<table>
					   <thead>
					   <?php $product_table_01 = get_field('product_table_01');
						if($product_table_01):  ?>
						  <tr>
							 <th>Cement Content, kgs</th>
							 <th>Structure Type</th>
							 <th>Strength, MPa</th>
						  </tr>
						 
						 <?php foreach($product_table_01 as $pro_01): ?>
						  <tr>
							 <td><?php echo $pro_01['cement_content_kgs']; ?></td>
							 <td><?php echo $pro_01['structure_type']; ?></td>
							 <td><?php echo $pro_01['strength_mpa']; ?></td>
						  </tr>
						  <?php endforeach; ?>
						  <?php endif; ?>
						  
					   </thead>
					</table>
					<?php $table_01_content = get_field('table_01_content');
					if($table_01_content):  ?>
					<p><?php echo $table_01_content; ?></p>
					 <?php endif; ?>
					
					
					<div class="bottom-table-con"> 
					<div class="concrete-left"> 
					<?php $left_table = get_field('left_table');
					if($left_table):  ?>
					<table>
					
					   <thead>
						  <tr>
							 <th>Concrete strength, MPa, N/m<sup>2</sup></th>
						  </tr>
					   </thead>
					   <tbody>
					   <?php foreach($left_table as $leftt):  ?>
						  <tr>
							 <td><?php echo $leftt['concrete_strength_mpa_nm2']; ?></td>
						  </tr>
						  <?php endforeach; ?>
					   </tbody>
					</table>
					<?php endif; ?>
						
					
					</div>
					<div class="concrete-right">
					<?php $right_table = get_field('right_table');
					if($right_table):  ?>					
						<table>
					   <tbody>
						  <tr>
							 <td>&nbsp;</td>
						  </tr>
						   <tr>
							 <td>&nbsp;</td>
						  </tr>
						   <tr>
							 <td>&nbsp;</td>
						  </tr>
						  
						 
						  <tr>
							 <th>Concrete strength, lbf/in<sup>2</sup></th>
						  </tr>
						 <?php foreach($right_table as $righttble):  ?>
						  <tr>
							 <td><?php echo $righttble['concrete_strength_lbfin2']; ?></td>
						  </tr>
						  <?php endforeach; ?>
						  
					   </tbody>
					</table>
					<?php endif; ?>
					
					</div>
					</div>
					<?php $product_bottom_content = get_field('product_bottom_content');
					if($product_bottom_content):  ?>	
					<p><?php echo $product_bottom_content; ?></p>
					<?php endif; ?>
				 </div>
			  </div>
		   </div>
		</div>
	 </section>
<?php get_footer(); ?>