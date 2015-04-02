<?php get_header(); ?>

	
<div class="bluebackground" style="height: 60px;"></div>
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
						the_post_thumbnail();
					} 
					?>
					<?php endwhile; endif; ?>
					
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
