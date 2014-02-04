<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<!--<?php if ( have_posts() ): ?>
<h2>Category Archive: <?php echo single_cat_title( '', false ); ?></h2>
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
			<?php the_content(); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
<?php endif; ?>-->

<?php if ( have_posts() ): ?>
	<div class="row">
		<div class="large-12 columns">
			<div class="search-title">
				<h2><?php dynamic_sidebar( 'category-title' ); ?> <?php  echo single_cat_title( '', false ) ?></h2>
			</div>
		</div>
	</div>
		<ol>
		<?php while ( have_posts() ) : the_post(); ?>
			<li>
				<article>
					<div class="row">
						<div class="large-8 columns">
							<div class="result-block">
								<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><span class="icon-news"></span><?php the_title(); ?></a></h2>
								<span class="pink-date"><?php dynamic_sidebar( 'publicacion-side' ); ?><time ><?php the_time('d/m/Y'); ?></time></span>
								<?php the_excerpt() ?>
								<!--<?php the_content() ?>-->
							</div>
						</div>	
					</div>
				</article>
			</li>
		<?php endwhile; ?>
		</ol>
		<div class="row">
		<div class="large-12 columns">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		</div>
	</div> 
		<?php else: ?>
		<div class="row">
			<div class="large-12 columns no-result">
				<div class="search-title">
					<h2>No se encontraron resultados para <span>'<?php echo get_search_query(); ?>'</span></h2>
				</div>
			</div>
		</div>
		<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>