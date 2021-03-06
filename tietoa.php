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

<!-- tabs-->

<ul class="tabs" data-tabs id="example-tabs">
  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Faktoja Intiasta</a></li>
  <li class="tabs-title"><a href="#panel2">Matkailijalle</a></li>
  <li class="tabs-title"><a href="#panel3">Kulttuuri ja musiikki</a></li>
  <li class="tabs-title"><a href="#panel4">Järjestöt ja valtiolliset</a></li>
  <li class="tabs-title"><a href="#panel5">Tietoa Suomesta</a></li>
  <li class="tabs-title"><a href="#panel6">Media</a></li>
</ul>

<hr class="vaaka-tietoa">

<!-- tabs sisällöt-->

<div class="tabs-content" data-tabs-content="example-tabs">
  <div class="tabs-panel is-active" id="panel1">

    <h3>Faktoja Intiasta</h3>

    <?php  $args = array( 'post_type' => 'tietoa', 'posts_per_page' => 10 ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php the_title(); ?>
      <?php echo '<div class="entry-content">'; ?>
      <?php the_content(); ?>
      <?php  echo '</div>';?>
      <?php endwhile; ?>

  </div>
  <div class="tabs-panel" id="panel2">
  <h3>Matkailijalle</h3>

  	 <?php  $args = array( 'post_type' => 'matkailijalle', 'posts_per_page' => 10 ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php the_title(); ?>
      <?php echo '<div class="entry-content">'; ?>
      <?php the_content(); ?>
      <?php  echo '</div>';?>
      <?php endwhile; ?>

  </div>
   <div class="tabs-panel" id="panel3">
   <h3>Kulttuuri ja musiikki</h3>

      <?php  $args = array( 'post_type' => 'kulttuuri_musiikki', 'posts_per_page' => 10 ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php the_title(); ?>
      <?php echo '<div class="entry-content">'; ?>
      <?php the_content(); ?>
      <?php  echo '</div>';?>
      <?php endwhile; ?>

  </div>
   <div class="tabs-panel" id="panel4">
    <h3>Järjestöt ja valtiolliset</h3>
    
    <?php  $args = array( 'post_type' => 'jarjestot_valtiolliset', 'posts_per_page' => 10 ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php the_title(); ?>
      <?php echo '<div class="entry-content">'; ?>
      <?php the_content(); ?>
      <?php  echo '</div>';?>
      <?php endwhile; ?>

  </div>
   <div class="tabs-panel" id="panel5">
    <h3>Tietoa Suomesta</h3>
    
  <?php  $args = array( 'post_type' => 'tietoa_suomesta', 'posts_per_page' => 10 ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php the_title(); ?>
      <?php echo '<div class="entry-content">'; ?>
      <?php the_content(); ?>
      <?php  echo '</div>';?>
      <?php endwhile; ?>

  </div>
   <div class="tabs-panel" id="panel6">
    <h3>Media</h3>
    
    <?php  $args = array( 'post_type' => 'media', 'posts_per_page' => 10 ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php the_title(); ?>
      <?php echo '<div class="entry-content">'; ?>
      <?php the_content(); ?>
      <?php  echo '</div>';?>
      <?php endwhile; ?>

  </div>
</div>

<!-- tabs loppuu-->

				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>

