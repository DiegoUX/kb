<?php
/**
 * The template for displaying Contact pages.
 *
 * Template Name: Contacto
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

<div class="main-images">
	<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	  the_post_thumbnail();
	} 
	?>
	<!--<?php the_content(); ?>-->
</div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<section>
	<div class="contact-section">
		<div class="row">
			<div class="large-12 columns">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
		<?php the_content(); ?>
	</div>
</section>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>