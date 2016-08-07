<?php
/* Template Name: tietoa */ 
?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
</div>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-9 large-centered columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

<!-- placeholder teksti -->
<P>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra hendrerit ligula id imperdiet. Donec at consectetur ligula. Aenean quis ullamcorper augue, et semper magna. Curabitur imperdiet vitae velit vitae tristique. Fusce vestibulum, tellus sit amet egestas luctus, diam leo condimentum enim, sed laoreet felis mi a dolor. Nulla sagittis mi vel ex sagittis aliquet. Suspendisse potenti. Nullam semper cursus condimentum. Donec ac magna eget quam fermentum pulvinar nec faucibus mauris.

</P>
<!-- placeholder teksti päättyy -->

<!-- tabs-->

<ul class="tabs" data-tabs id="example-tabs">
  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Faktoja Intiasta</a></li>
  <li class="tabs-title"><a href="#panel2">Matkailijalle</a></li>
  <li class="tabs-title"><a href="#panel3">Kulttuuri ja musiikki</a></li>
  <li class="tabs-title"><a href="#panel4">Järjestöt ja valtiolliset</a></li>
  <li class="tabs-title"><a href="#panel5">Tietoa Suomesta</a></li>
  <li class="tabs-title"><a href="#panel6">Media</a></li>
</ul>

<!-- tabs sisällöt-->

<div class="tabs-content" data-tabs-content="example-tabs">
  <div class="tabs-panel is-active" id="panel1">
    <p>Teksti + linkki</p>
  </div>
  <div class="tabs-panel" id="panel2">
 	<p>Teksti + linkki</p>
  	<p>Teksti + linkki</p>
  </div>
   <div class="tabs-panel" id="panel3">
    <p>Teksti + inkki</p>
    <p>Teksti + linkki</p>
  	<p>Teksti + linkki</p>
  </div>
   <div class="tabs-panel" id="panel4">
    <p>Teksti + linkki</p>
  </div>
   <div class="tabs-panel" id="panel5">
    <p>Teksti + linkki</p>
  </div>
   <div class="tabs-panel" id="panel6">
    <p>Teksti + linkki</p>
  </div>
</div>

<!-- tabs loppuu-->

				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>

