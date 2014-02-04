<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="noticias">
	<div class="row">
		<div class="large-12 columns">
			<!-- <h2>Noticias</h2> -->
				<?php dynamic_sidebar( 'news-title' ); ?>
		</div>	
	</div>
	<div class="row">
		<div class="large-8 columns">
			<article class="news-content">
				<time><?php the_time('d/m/Y'); ?></time> <span class="bullet">&bull;</span>
				<div class="cat"><?php the_category(', '); ?></div>
				<h2 class=""><?php the_title(); ?></h2>
				<div class="the-cont"><?php the_content(); ?></div>
				<?php dynamic_sidebar( 'back-to' ); ?>
			</article>
		</div>
		<div class="large-4 columns">
			<div class="widget-custom">
				<!-- <h3>Noticias Recientes</h3> -->
				<?php dynamic_sidebar( 'noticias' ); ?>
			</div>	
		</div>
			<?php endwhile; ?>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>