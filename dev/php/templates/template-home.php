<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div class="bluebackground"><!-- Dit is de achtergrond -->
	<div class="u-gridContainer">
		<div class="u-gridRow mainheader">
			<div class="u-gridCol6">
					<div class="homeLogo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tekst.png">
					</div>
			</div>
			<div class="u-gridCol5 ">
				<div class="homeVrouw">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vrouw.png">
				</div>
			</div>
		</div>
			<div class="u-gridRow"><!-- Dit is de slider -->
				<div class="u-gridCol2 leftLinks">
					<H2>Diensten</H2> <hr>
					<ul>
						<li><a href="http://bloemendaal.lokaalgevonden.nl/administratie/">Administratie</a></li>
						<li><a href="http://bloemendaal.lokaalgevonden.nl/belasting/">Belasting</a></li>
						<li><a href="http://bloemendaal.lokaalgevonden.nl/verzekering/">Verzekering</a></li>
					</ul>
					<H2>Formulieren</H2> <hr>
					<ul>
						<li><a href="http://bloemendaal.lokaalgevonden.nl/formulieren/">Formulieren</a></li>
						<li><a href="http://bloemendaal.lokaalgevonden.nl/gegevens-wijzigen/">Gegevens Wijzigen</a></li>
						<li><a href="http://bloemendaal.lokaalgevonden.nl/schade-melden/">Schade Melden</a></li>
					</ul>
					<h2>Belangrijk</h2> <hr>
					<ul>
						<li><a href="http://bloemendaal.lokaalgevonden.nl/nieuws-2/">Nieuws</a></li>
						<li><a href="http://bloemendaal.lokaalgevonden.nl/belangrijkrelaties/">Relaties</a></li>
						<li><a href="http://bloemendaal.lokaalgevonden.nl/belangrijklinks/">Links</a></li>
					</ul>
				</div>
				<div class="u-gridCol10">
					<div class="sliderBox">
						<div class="Slider">
							<div>
		                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider1.jpg" >
		                    </div>
		                     <div>
		                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider1.jpg" />
		                    </div>
		                     <div>
		                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider1.jpg" />
		                    </div>
						</div>
					</div>
				</div>
			</div>
				<div class="gridRow mainbottom">
					<div class="u-gridCol2 leftImage">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/handenkleinweb.jpg">
					</div>	
				</div>
					<div class="u-gridCol10 mainFooterTekstWordPress">
						<h2>Welkom bij Administratiekantoor Bloemendaal in Gouda!</h2>
						<hr>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="Content Content--home" id="post-<?php the_ID(); ?>">
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</article>
							<?php endwhile; endif; ?>
					</div>
	</div>
</div>

<div class="columbackground">
	<div class="u-gridContainer">
		<div class="columns">
			<div class="u-gridCol3">
				<div class="colum1">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/headcolumn1.jpg">
					<article>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</article>
				</div>
			</div>
			<div class="u-gridCol3">
				<div class="colum2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/headcolumn2.jpg">
					<article>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</article>
				</div>
			</div>
			<div class="u-gridCol3">
				<div class="colum3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/headcolumn3web.jpg">
					<article>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</article>
				</div>
			</div>
			<div class="u-gridCol3">
				<div class="sitemap">
					<section>
						<ul>
							<h2>CONTACT</h2>
							<li>Dunantsingel 2</li>
							<li>2806 JB Gouda</li>
							<li>(0182) 51 22 48</li>
							<li>(0182) 50 42 58</li>
							<h2>GEGEVENS</h2>
							<li>KvK:    29026243</li>
							<li>BTW:    NL055272265B01</li>
							<li>Bank:   NL31 INGB0005351049</li>
							<br>
							<br>
						</ul>	
					</section>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
