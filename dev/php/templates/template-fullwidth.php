<?php
/*
Template Name: Page w/o sidebar
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
<div class="columbackground"><!-- Dit is de achtergrond -->
	<div class="u-gridContainer">
		<div class="u-gridRow  columbackground-administratie">
			<div class="u-gridCol12 mainheader homepage-box">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="Content " id="post-<?php the_ID(); ?>">
							<h1><?php the_title(); ?></h1>
							<div>
								<?php the_content(); ?>
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>
						</article>

						<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								 $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), full );
								echo "<img src='".$thumbnail[0]."' />"; 
							} 
							?>
					<?php endwhile; endif; ?>
					
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
