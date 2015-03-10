<?php
/*
Template Name: Belasting
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
			<div class="u-gridRow">
				<div class="u-gridCol5">
					<div class="belastingTekst">
					<p>	De belastingdienst is dit jaar snel met het opleggen van de (definitieve)
						aanslagen. De afgelopen jaren kwamen de eerste aanslagen rond 1 juli bij de
						belastingplichten op de deurmat. Meestal kwam de eerste aanslag als voorlopige
						aanslag. Dit leverde voor veel mensen vraagtekens op in de vorm “waar ben ik nu
						aan toe?” en “Mag ik het geld dat ik terug heb gekregen nu echt uitgeven?” Dit
						jaar gaat men in veel gevallen direct over tot een definitieve aanslag.</p>
					<p>	U weet met de definitieve aanslag direct waar u aan toe bent.</p>
					<p>	Het heeft ook een klein nadeel. Als u het niet eens bent met de aanslag
						dient u binnen zes weken uw bezwaarschrift in te dienen want u heeft nu geen
						tweede kans meer!</p>
					</div>
				</div>
				<div class="u-gridCol7">
					<div class="belastingFoto">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/belasting6.jpg">
					</div>
				</div>
			</div>
			<div class="u-gridRow">
				<div class="u-gridCol12">
					<div class="belastingCheck">
						<p>Controleer uw aanslag direct na ontvangst en twijfelt u over de juistheid maak dan snel bezwaar. U heeft maar zes weken na de dagtekening!</p>
					</div>
				</div>
				<!--<div class="u-gridCol7">
					<div class="belastingCheckFoto">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/belasting.jpg">!-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
