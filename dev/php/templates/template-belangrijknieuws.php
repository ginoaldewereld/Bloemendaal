<?php
/*
Template Name: Belangrijknieuws
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
<div class="bluebackground"><!-- Dit is de achtergrond -->
	<div class="u-gridContainer">
		<div class="u-gridCol12 columbackground-nieuws">
			<div class="u-gridRow mainheader">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?> 
				<div class="u-gridCol12 nieuwsfoto">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nieuws.png">
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
