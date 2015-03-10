<?php
/*
Template Name: Verzekering
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
					<div class="verzekeringAuto">
					<p>Eigenaren van auto’s zijn verplicht een WA-verzekering voor hun auto te hebben. Daarnaast kan de verzekering worden uitgebreid met een beperkt-casco verzekering of een volledige casco dekking.</p>
					<p>De overige verzekeringen die hieronder staan genoemd zijn niet verplicht, maar ……. Het zou je maar overkomen, dat je huis in vlammen opgaat of dat je zoontje een prachtig doelpunt maakt in de ruit van uw buren! Je kan niet alles voorkomen en dan is voorzorg toch vaak de beste oplossing!</p>
					</div>
				</div>
				<div class="u-gridCol7">
					<div class="belastingFoto">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/autoverzekering.jpg"> Andere foto vinden
					</div>
				</div>
			</div>
			<div class="u-gridRow">
				<div class="u-gridCol5">
					<div class="rekenService">
						<h1>Autoverzekeringen</h1>
						<div class="verzekeringenAuto">
							<div class="accordion">Personenauto</div>
							<div class="accContent"><iframe src="http://diensten.voogd.com/portal/index.asp?1268Z-6FV-4ETHJ-FO5G"></iframe></div>
							<div class="accordion">Bestelauto</div>
							<div class="accContent"><iframe src="http://diensten.voogd.com/portal/index.asp?1268Z-ICC-HE6P6-3ONE"></iframe></div>
						</div>
					</div>
				</div>
				<div class="u-gridCol7">
					<div class="rekenService">
						<h1>Overige verzekeringen</h1>
						<div class="verzekeringenOverig">
							<div class="accordion">Pakket particulier</div>
							<div class="accContent"><iframe src="http://diensten.voogd.com/portal/index.asp?12680-T6I-CMHTD-9M8X"></iframe></div>
							<div class="accordion">Aansprakelijkheid</div>
							<div class="accContent"><iframe src="http://diensten.voogd.com/portal/index.asp?12683-8PS-YWIAN-OIIB"></iframe></div>
							<div class="accordion">Inboedel</div>
							<div class="accContent"><iframe src="http://diensten.voogd.com/portal/index.asp?1268W-MZO-P7CF2-SHU6"></iframe></div>
							<div class="accordion">Woonhuis</div>
							<div class="accContent"><iframe src="http://diensten.voogd.com/portal/index.asp?1268L-J24-5OCIU-QJU9"></iframe></div>
						</div>
					</div>
				</div>
			</div>
			<div class="u-gridRow">
				<div class="u-gridCol12">
					<h1>Bloemendaal bemiddelt niet meer in:</h1>
						<span>Levensverzekering</span><span>Pensioen</span><span>Hypotheek</span><span>Kredieten</span>
					<p>Bloemendaal verzekeringen werkt al jaren samen met Groot Schieland Assurantiën te Nieuwerkerk aan den IJssel. Dit kantoor heeft zich met name gespecialiseerd in laatst genoemde producten en Bloemendaal verwijst geïnteresseerden altijd direct door naar Groot Schieland. Desgewenst gaat bij het eerste gesprek iemand van Bloemendaal mee om u bij Groot Schieland te introduceren.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
