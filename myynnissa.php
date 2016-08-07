<?php
/* Template Name: myynnissa */ 
?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
</div>

		    <div class="large-10 large-centered columns" role="main">

		    	<h2>Myynnissä olevia tuotteita</h2>
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

			</div>

<!--Product images and texts -->	
<!--Product 1 -->	

<div class="row">
  <div class="large-4 columns product_image">
  		<?php 

		$image = get_field('picture_of_the_product_1');
		$size = 'medium'; // (thumbnail, medium, large, full or custom size)

		if( $image ) {
		echo wp_get_attachment_image( $image, $size );
		}
		?>	

	</div>

 	<div class="large-8 columns">
  	<h3><?php the_field('product_1_name');?></h3>
  	<p><?php the_field('info_about_the_product_1_');?></p>
	<p><?php the_field('price_of_the_product_1');?></p>
	</div>

</div>

<!--Product 2 -->	

<div class="row">
  	<div class="large-4 columns product_image">
 	 <?php 
		$image = get_field('product_2_image_');
		$size = 'medium'; // (thumbnail, medium, large, full or custom size)
		if( $image ) {
		echo wp_get_attachment_image( $image, $size );
		}
	?>	
	</div>

 	<div class="large-8 columns">
  	<h3><?php the_field('product_2_name_');?></h3>
  	<p><?php the_field('product_2:_more_info_');?></p>
	<p><?php the_field('product_2_price_');?></p>
	</div>

</div>


				<?php endwhile; endif; ?>							


<?php get_footer(); ?>

