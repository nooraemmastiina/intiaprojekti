<?php
/* Template Name: liity */ 
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-9 large-centered columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

<!-- placeholder teksti -->
<P>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra hendrerit ligula id imperdiet. Donec at consectetur ligula. Aenean quis ullamcorper augue, et semper magna. Curabitur imperdiet vitae velit vitae tristique. Fusce vestibulum, tellus sit amet egestas luctus, diam leo condimentum enim, sed laoreet felis mi a dolor. Nulla sagittis mi vel ex sagittis aliquet. Suspendisse potenti. Nullam semper cursus condimentum. Donec ac magna eget quam fermentum pulvinar nec faucibus mauris.

</P>
<h2>
Liity jäseneksi
</h2>
<!-- placeholder teksti päättyy -->
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>

