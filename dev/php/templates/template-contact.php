<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

<div class="bluebackground" style="height: 200px">
	<div class="patternbackground">
		<div class="u-gridContainer">
			<div class="u-gridRow mainheader">
				<div class="u-gridCol6">
					<div class="homeLogo">
						<a href="http://bloemendaal.lokaalgevonden.nl/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tekst.png"></a>
					</div>
				</div>
				<div class="u-gridCol5 ">
					<div class="homeVrouw">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vrouw.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="u-columbackground">
	<div class="u-gridCol12 columbackground-contact">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Administratiekantoor-Bloemendaal</p>
								<p>Dunantsingel 2</p>
								<p>2806 JB Gouda</p>
								<a href="mailto:bloemendaal.gouda@planet.nl"><p>Email: bloemendaal.gouda@planet.nl</p></a>
								<a href="tel:0182512248"><p>Tel: 0182-512248</p></a>
							</div>
	
						</div>					
						<div class="adress-map u-gridCol8">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>
</div>


<?php get_footer(); ?>

