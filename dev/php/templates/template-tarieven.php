<?php
/*
Template Name: Tarieven
*/
?>

<?php get_header(); ?>
<div class="bluebackground"><!-- Dit is de achtergrond -->
	<div class="u-gridContainer">
		<div class="columbackground-tarieven">
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
				<div class="u-gridRow">
					<div class="tarievenImage">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tarievenfooterimage.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
