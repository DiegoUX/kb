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
			<h2>Noticias</h2>
		</div>	
	</div>
	<div class="row">
		<div class="large-8 columns">
			<article class="news-content">
				<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date('F j, Y'); ?></time> <!--<span class="bullet">&bull;</span>-->
				<!-- <div class="cat"><?php the_category(', '); ?></div> -->
				<h2 class=""><?php the_title(); ?></h2>
				<div class="the-cont"><?php the_content(); ?></div>
				<p><a href="<?php echo get_site_url(); ?>/noticias ">Volver a Noticias &raquo;</a></p>
			</article>
		</div>
		<div class="large-4 columns">
			<div class="widget-custom">
				<?php
					$url = ($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
					$ing = ($_SERVER["HTTP_HOST"] . "/en/");
					if ($url == $ing)
					  {
					  echo "<h3>Recent News</h3>";
					  }
					else
					  {
					  echo "<h3>Noticias Recientes</h3>";
					  }
				?>
				<!-- <h3>Noticias Recientes</h3> -->
				<?php dynamic_sidebar( 'noticias' ); ?>
			</div>	
		</div>
			<?php endwhile; ?>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>