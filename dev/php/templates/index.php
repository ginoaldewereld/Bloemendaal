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
						<div class="u-gridRow">
							<div class="u-gridCol5 thumbnail">
								<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
									 $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), full );
									echo "<img src='".$thumbnail[0]."' />"; 
								} 
								?>
							</div>
							<div class="u-gridCol7" >
								<article class="Content " id="post-<?php the_ID(); ?>">
									<a href="<?php the_permalink(); ?>"> <h2><?php the_title(); ?></h2></a>
									<div>
										<?php the_excerpt(); ?>
										<a href="<?php the_permalink(); ?>">Lees meer &rarr;</a>
										<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
									</div>
								</article>
							</div>
						</div>
					<?php endwhile; endif; ?>

					<nav>
						<div><?php next_posts_link('&laquo; Older Entries') ?></div>
						<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					</nav>


			</div>
		</div>
		<div class="u-gridRow footerfeed">
			<div class="homepage-box">
				<h2>Beurs Nieuws</h2>
				<ul class="rssfeed">
					<?php RSSImport(4, 'http://www.beurs.nl/rss/nieuws.rss','','','',false,200,' ... ','',' ... ',
					' <small>',false,'</small>',' <small>',false,'</small>','<li>','</li>','','<li>','</li>','blank'); ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>