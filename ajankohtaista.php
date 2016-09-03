<?php
/*
Template Name: Ajankohtaista / News
*/
?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
</div>

<div class="row" data-equalizer data-equalize-on="medium">
      <div class="small-12 medium-6 large-6 columns pysty" data-equalizer-watch>
        <a name="uutiset"><h2>Uutiset</h2></a>
            <?php 
            $args = array('post_type' => 'news');
            $loop = new WP_Query( $args );
             
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <h3 class="entry-title"><?php the_title(); ?></h3>
            <div class="entry-content">
            <?php the_content(); ?>
            <?php the_post_thumbnail('large', array('class' => 'large')); ?>
            </div>
            <?php endwhile;?>
      </div>           

      <div class="small-12 medium-6 large-6 columns" data-equalizer-watch>             
        <a name="tapahtumat"><h2>Tulevat tapahtumat</h2></a>   
            <?php 
            $args = array('post_type' => 'events');
            $loop = new WP_Query( $args );
             
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <h3 class="entry-title"><?php the_title(); ?></h3>
            <div class="entry-content">
              <?php the_post_thumbnail('large', array('class' => 'large')); ?>
              <br>
              <?php if( get_field('ilmoittaudu_linkki') ): ?> <a class="small button" href="<?php the_field('ilmoittaudu_linkki')?>">Ilmoittaudu</a><?php endif; ?>
              <?php the_content(); ?>
             
              
            </div>
            <?php endwhile;?>

            <h2>Menneet tapahtumat</h2>  

      </div>
</div>


<?php get_footer(); ?>