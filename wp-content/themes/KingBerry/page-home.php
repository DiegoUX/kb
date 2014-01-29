<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Home 
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
		<?php 
		    echo do_shortcode("[metaslider id=35]"); 
		?>
	</div>
</section>
<section>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
</section>
<section>
	<div class="sub-footer">
		<div class="row">
			<div class="large-6 columns">
				<h2>Noticias</h2>
				<div class="news">
					<ul>
					<?php query_posts('blog=wordpress&showposts=3'); ?>
					<?php while (have_posts()) : the_post(); ?>
						<li>
							<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
							<div class="cont-news">
								<?php the_excerpt(); ?>
							</div>	
						</li>
					<?php endwhile; ?>
					</ul>
					<a href="#" class="btn">Ver Más Noticias</a>
				</div>		
			</div>
			<div class="large-6 columns">
				<h2>Certificaciones</h2>
				<ul class="certif">
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/certificaciones/usda.jpg" alt="USDA"></li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/certificaciones/natures.jpg" alt="Nature's Choice"></li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/certificaciones/fairforlife.jpg" alt="Fair for Life"></li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/certificaciones/uk.jpg" alt="UK"></li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/certificaciones/globalgap.jpg" alt="Global GAP"></li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/certificaciones/OIA.jpg" alt="OIA"></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>