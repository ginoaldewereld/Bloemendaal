<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div class="bluebackground"><!-- Dit is de achtergrond -->
	<div class="patternbackground">
		<div class="u-gridContainer">
			<div class="u-gridRow mainheader">
				<div class="u-gridCol6">
					<div class="homeLogo">
						<a href="http://bloemendaal.lokaalgevonden.nl/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tekst.png"></a>
					</div>
				</div>
				<div class="u-gridCol5 ">
					<div class="homevrouw">
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
							<div class="Slide">
								<div class="Slide-text">De beste oplossingen</div>
		                        <img  class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sliders1.png" >
		                    </div>
		                     <div class="Slide">
		                     	<div class="Slide-text">Persoonlijk Aandacht</div>
		                        <img  class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide2c.png" />
		                    </div>
		                     <div class="Slide">
		                     	<div class="Slide-text">Prima Service</div>
		                        <img  class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider4.png" />
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
</div>

<div class="columbackground">
	<div class="u-gridContainer">
		<div class="columns u-gridRow">
			<div class="u-gridCol3 content-column homepage-box">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/headcolumn1.jpg" class="dodocolumn">
				<article>
					<p>Oplossingen zijn er veel. De beste oplossing is afhankelijk van de omstandigheden. Wij reiken u meerdere keuzes aan. U krijgt een toelichting over de voor en nadelen van de verschillende keuzemogelijkheden. U beslist uiteindelijk welke keuze gemaakt wordt.</p>
				</article>
			</div>
			<div class="u-gridCol3 content-column homepage-box">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/headcolumn2.jpg" class="dodocolumn">
				<article>
					<p>Bloemendaal is een klein kantoor. Op het eerste gezicht ziet u maar één medewerker. Die ene medewerker is wel veelzijdig. Eigenaar maar ook koffiezetter. Achter de schermen zit een groter netwerk van specialisten dat bijspringt als dat nodig is. </p>
				</article>
			</div>
			<div class="u-gridCol3 content-column homepage-box">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/headcolumn3web.jpg" class="dodocolumn">
				<article>
					<p>Ons kantoor is geopend van 9 tot 5. Veel klanten zijn niet in staat om binnen die kantoortijden te komen. Regelmatig ga ik naar die klanten toe zodat hun winkel blijft doordraaien. Zeker in deze tijd een must om te overleven. En mocht dat ook niet de oplossing blijken dan maken we gewoon een afspraak in de avonduren.</p>
				</article>
			</div>
			<div class="u-gridCol3 sitemap homepage-box">
				<section>
					<ul>
						<h2>CONTACT</h2>
						<li>Dunantsingel 2</li>
						<li>2806 JB Gouda</li>
						<li><a href="tel:0182512248"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telefoon.png"></a> &nbsp (0182) 51 22 48</li>
						<li><a href="tel:0182504258"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fax.png"></a> &nbsp (0182) 50 42 58</li>
						<h2>GEGEVENS</h2>
						<li>KvK: &nbsp 29026243</li>
						<li>BTW: &nbsp NL055272265B01</li>
						<li>Bank: &nbsp NL31 INGB0005351049</li>
					</ul>
					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					<?php endif; ?>
				</section>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>	
