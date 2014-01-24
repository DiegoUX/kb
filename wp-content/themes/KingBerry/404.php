<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="row p_error">
	<div class="large-12 columns">
		<h2>404 <span>Página no Encontrada.</span></h2>
		<p class="contact-page">Si está tratando de comunicarse con nosotros, visite la <a href="<?php echo get_site_url(); ?>/contacto">página de contacto.</a></p>
		<p>Si simplemente le gustaría conocer más acerca de KingBerry S.A., por favor visite nuestra <a href="<?php echo get_site_url(); ?>/">página de inicio.</a></p>
		<p>¡Gracias!</p>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>