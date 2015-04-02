<?php
/*
Template Name: App page
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
<div class="columbackground-contact">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<h2><?php the_title(); ?></h2>
				<aside class="u-gridCol4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/screenshot.png" class="App-iphone" />
				</aside>
				<article class="Content-article u-gridCol8" id="post-<?php the_ID(); ?>">
					<?php // the_content(); ?>
					Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website.

					<a href="https://play.google.com/store/apps/details?id=com.wbloemendaalgouda">Download de app hier</a>



					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_codetrans.png" />

					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</article>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>