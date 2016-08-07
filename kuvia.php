<?php
/* Template Name: kuvia */ 
?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
</div>
	
		<div class="row">
	
		    <div class="large-9 large-centered columns" role="main">
		    	<h2> Kuvia menneistä tapahtumista</h2>
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

					
				<?php endwhile; endif; ?>							

			</div> 
		    
		</div> 

<?php get_footer(); ?>

