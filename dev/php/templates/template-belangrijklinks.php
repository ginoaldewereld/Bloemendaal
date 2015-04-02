<?php
/*
Template Name: Belangrijklinks
*/
?>

<?php get_header(); ?>

<div class="bluebackground"><!-- Dit is de achtergrond -->
	<div class="u-gridContainer">
		<div class="columbackground-nieuws">
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
				<div class="u-gridCol12 link">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/links.png">
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
