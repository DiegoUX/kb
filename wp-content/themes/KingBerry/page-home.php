<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section>		
	<div class="billboard">
		<ul class="slider" data-orbit>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider/billboard-1.jpg" alt="slide-1">
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider/billboard-2.jpg" alt="slide-2">
			</li>
		</ul>
		<div class="row">
			<div class="large-4 columns">
				<div class="billboard-text">
				<h1>Lo Mejor de Tucumán al Mundo</h1>
				<p>Somos una empresa dedicada a la producción, empaque y comercialización de arándanos y frutillas, bajo los estándares más altos de calidad a nivel internacional.</p>
				<a href="#" class="btn">Conozca Nuestros Productos</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="speciality">
		<div class="row">
			<div class="large-12 column">
				<h2>Nuestra Especialidad</h2>
			</div>
			<div class="large-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arandano.jpg" alt="Arándanos">
				<h3>Arándanos</h3>
				<div class="production">
					<span class="ico"></span><p>Época de Producción:</p>
					<div class="callendar">Ene · Feb · Mar · Abr · May · Jun · Jul · Ago  <span class="blue">Sep · Oct · Nov</span>   Dic</div>
					<div class="prod-content">
						<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt ornare odio.</p>
					</div>
				</div>
			</div>
			<div class="large-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/frutilla.jpg" alt="Frutillas">
				<h3>Frutillas</h3>
				<div class="production">
					<span class="ico"></span><p>Época de Producción:</p>
					<div class="callendar">Ene · Feb · Mar · Abr · May · Jun  <span class="red">Jul · Ago   Sep · Oct · Nov · Dic</span></div>
					<div class="prod-content">
						<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt ornare odio.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>