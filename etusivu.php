<?php
/*
Template Name: Etusivu / Home
*/
?>

<?php get_header(); ?>

<img src="<?php echo get_template_directory_uri(); ?>/assets/images/suomi-intia_logo.png" class="etulogo" alt="Suomi-Intia-Seura">
<h1>Tervetuloa</h1>
<h4>Suomi-Intia-Seuran kotisivuille</h4>
</div>

<div class="row" data-equalizer>
		  <div class="small-12 large-6 columns pysty" data-equalizer-watch>
		 <a href="<?php echo get_site_url(); ?>/fi/ajankohtaista#uutiset"><h2>Uutiset</h2></a>  
				<?php 
				$args = array('post_type' => 'news');
				$loop = new WP_Query( $args );
				 
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<a href="<?php echo get_site_url(); ?>/fi/ajankohtaista#uutiset"><h3 class="entry-title"><?php the_title(); ?></h3></a>
				<div class="entry-content">
					<a href="<?php echo get_site_url(); ?>/fi/ajankohtaista#uutiset"><?php the_post_thumbnail( array(180), array('class' => 'alignleft')  ); ?></a>
				<?php the_content(); ?>
				</div>
				<?php endwhile;?>
			</div>           

			<div class="small-12 large-6 columns" data-equalizer-watch>             
				<h2>Tietoa Intiasta</h2>    
			<p>Suomi-Intia-Seura ry. on ystävyysseura, joka toimii Intiasta ja intialaisesta kulttuurista
			kiinnostuneiden toiminnallisena yhteisönä sekä yhdyssiteenä Suomessa asuvien intialaisten välillä.
			Tavoitteenamme on edistää intialaisen kulttuurin tuntemusta Suomessa sekä kulttuurivaihtoa ja
			kehitysyhteistyötä Suomen ja Intian välillä. Seura on toiminut vuodesta 1949.</p>

			<p>Seuran alkuperäinen nimi oli Suomalaiset Intian Ystävät ry. ja aluksi se oli lähinnä intialaisesta
			filosofiasta ja gandhilaisuudesta kiinnostuneiden yhteisö. Tällä hetkellä jäseniä on noin 230.
			Heistä noin 40 on intialaisia.</p>

			<p>Suomi-Intia-Seura järjestää monenlaista Intiaan ja intialaiseen kulttuuriin liittyvää toimintaa, mm.
			seminaareja, esitelmiä, kursseja ja erilaisia tapahtumia. Suomi-Intia-Seura on Ystävyysseurojen
			liiton ja Kehitysyhteistyön palvelukeskuksen (KEPA) jäsenjärjestö.</p>   
			</div>
</div>

<hr class="vaaka">

<div class="row" data-equalizer>
		  <div class="small-12 large-6 columns pysty" data-equalizer-watch>
		  <a href="<?php echo get_site_url(); ?>/fi/ajankohtaista#tapahtumat"><h2>Tulevat tapahtumat</h2></a>


<div class="orbit" data-orbit="">
<p><button class="orbit-previous"><span class="show-for-sr">Edellinen</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_left.png"></button>
   <button class="orbit-next"><span class="show-for-sr">Seuraava</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_right.png"></button></p>
<a href="<?php echo get_site_url(); ?>/fi/ajankohtaista#tapahtumat"><ul class="orbit-container">

	<?php 
$args = array('post_type' => 'events');
$loop = new WP_Query( $args );
 
while ( $loop->have_posts() ) : $loop->the_post();
?>


<li class="orbit-slide">
<div class="text-center">
<h3 class="text-center"><?php the_title(); ?></h3>
<?php echo the_post_thumbnail(array(700,400)); ?></div>
</li>
<?php endwhile;?>

</ul></a>
</div>

	 </div>

		  <div class="small-12 large-6 columns" data-equalizer-watch>
		  	<h2>Haluatko jäseneksi</h2>
		  	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vestibulum lacinia ligula, sed pulvinar sem interdum vel. Donec eget massa in erat congue pretium. Curabitur eu aliquet leo. Nulla eu iaculis ipsum, nec aliquam augue. Donec consequat massa massa, vitae sodales metus hendrerit a. Quisque ac mauris sit amet risus molestie tincidunt vitae a diam. Vestibulum non luctus neque.

		  </div>
</div>


<?php get_footer(); ?>