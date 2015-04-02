<?php
/*
Template Name: Administratie
*/
?>

<?php get_header(); ?>
<div class="bluebackground" style="height: 200px">
	<div class="patternbackground">
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
		</div>
	</div>
</div>
<div class="columbackground"><!-- Dit is de achtergrond -->
	<div class="u-gridContainer">
		<div class="u-gridRow  columbackground-administratie">
			<div class="u-gridCol12 mainheader homepage-box">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="Content Content--home" id="post-<?php the_ID(); ?>">
							<h1><?php the_title(); ?></h1>
							<div>
								<?php the_content(); ?>
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>
						</article>
					<?php endwhile; endif; ?>
				<div class="u-gridRow administratieRow">
					<div class="u-gridCol5 administratie-foto">
							<div>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/administratie1.jpg">
							</div>
					</div>
						<div class="u-gridCol7">
							<div class="administratieTekst">
								<h2>Het moet nu eenmaal!</h2>
								<p>	Een verplicht nummer voor de belastingdienst! Zo denken veel ondernemers over hun administratie. Jammer, want uit de boekhouding kan je veel informatie halen om je eigen onderneming beter te laten draaien en meer winst te behalen.</p>
							</div>	
						</div>
				</div>
				<div class="u-gridRow administratieRow">
					<div class="u-gridCol5 administratie-foto">
						<div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/administratie4.jpg">
						</div>
					</div>
					<div class="u-gridCol7">
							<div class="administratieTekst">
								<h2>Uw administratie</h2>
								<p>	Vanuit dit hart neemt u uw beslissingen over het te voeren beleid. Voorwaarde is dat de informatie actueel en up-to-date is. Periodiek overleg tussen u en uw boekhouder biedt u de mogelijkheid te vragen naar de kansen en de risico’s van uw onderneming. Hiermee kunt u vragen beantwoorden over bijvoorbeeld het aannemen van nieuw personeel of over grote investeringen.</p>
							</div>
					</div>
				</div>
				<div class="u-gridRow administratieRow">
					<div class="u-gridCol5 administratie-foto">
						<div class=>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/administratie5.jpg">
						</div>
					</div>
					<div class="u-gridCol7">
						<div class="administratieTekst">
							<h2>Bekijk het positief</h2>
							<p>	Voor veel bedrijven verzorgen wij al jarenlang de administratie. Regelmatig wordt verslag uitgebracht aan de ondernemer. De ondernemer kan zelf aangeven hoe vaak hij dit verslag wilt hebben en welke onderwerpen daarbij aan de orde komen. U geeft dus zelf aan hoe u uw beleidsinstrument, de boekhouding, optimaal wilt gebruiken.</p>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>
<?php get_footer(); ?>
