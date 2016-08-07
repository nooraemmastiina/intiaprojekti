<?php
/* Template Name: historia */ 
?>

<?php get_header(); ?>

			

	
		<div class="row">
	
		    <div class="large-9 large-centered columns">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

					
				<?php endwhile; endif; ?>							

			</div> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	

<?php get_footer(); ?>

