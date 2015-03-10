<?php
/*
Template Name: Administratie
*/
?>

<?php get_header(); ?>
<div class="bluebackground"><!-- Dit is de achtergrond -->
	<div class="u-gridContainer">
		<div class="u-gridRow mainheader">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<hr>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>
			<div class="u-gridRow administratieRow">
				<div class="u-gridCol5">
						<div class="administratie-Foto">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/administratie1.jpg">
						</div>
				</div>
					<div class="u-gridCol7">
						<div class="administratieTekst">
							<p>Het moet nu eenmaal!</p>
							<p>	Een verplicht nummer voor de belastingdienst! Zo denken veel ondernemers over hun administratie. Jammer, want uit de boekhouding kan je veel informatie halen om je eigen onderneming beter te laten draaien en meer winst te behalen.</p>
						</div>	
					</div>
			</div>
			<div class="u-gridRow administratieRow">
				<div class="u-gridCol5">
					<div class="administratie-Foto-Twee">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/administratie4.jpg">
					</div>
				</div>
				<div class="u-grindCol7">
						<div class="administratieTekst">
							<p>Uw administratie</p>
							<p>	Vanuit dit hart neemt u uw beslissingen over het te voeren beleid. Voorwaarde is dat de informatie actueel en up-to-date is. Periodiek overleg tussen u en uw boekhouder biedt u de mogelijkheid te vragen naar de kansen en de risico’s van uw onderneming. Hiermee kunt u vragen beantwoorden over bijvoorbeeld het aannemen van nieuw personeel of over grote investeringen.</p>
						</div>
				</div>
			</div>
			<div class="u-gridRow administratieRow">
				<div class="u-gridCol5">
					<div class="administratie-Foto-Drie">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/administratie5.jpg">
					</div>
				</div>
				<div class="u-grindCol7">
					<div class="administratieTekst">
						<p>Bekijk het positief</p>
						<p>	Voor veel bedrijven verzorgen wij al jarenlang de administratie. Regelmatig wordt verslag uitgebracht aan de ondernemer. De ondernemer kan zelf aangeven hoe vaak hij dit verslag wilt hebben en welke onderwerpen daarbij aan de orde komen. U geeft dus zelf aan hoe u uw beleidsinstrument, de boekhouding, optimaal wilt gebruiken.</p>
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>
<?php get_footer(); ?>
