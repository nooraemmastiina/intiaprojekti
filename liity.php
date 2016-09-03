<?php
/* Template Name: liity */ 
?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
</div>
			
	
		<div class="row">
	
		    <div class="large-9 large-centered columns" >
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

					<h2>Liity jäseneksi</h2>
					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd5A1odfo2mnbtMI-9RKjccauIBMy2dLbIInl6PuuNv6qam2w/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Ladataan...</iframe>

				<?php endwhile; endif; ?>							

			</div>  
		</div> 
	

<?php get_footer(); ?>

