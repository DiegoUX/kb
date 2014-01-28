<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="noticias page">
	<div class="row">
		<div class="large-12 columns">
			<h2>Noticias</h2>
		</div>	
	</div>		
	<?php if ( have_posts() ): ?>	
	<ol>
	<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<div class="row">
				<article class="news-content">	
					<?php if ( has_post_thumbnail() ) { ?>
					<div class="post-thumb large-3 columns">
						<?php the_post_thumbnail('medium'); ?>
					</div>
					<?php }  ?>
					<div class="large-9 columns">
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date('F j, Y'); ?></time><span class="bullet">&bull;</span>
						<div class="cat"><?php the_category(', '); ?></div>
						<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					</div>
				</article>
			</div>
		</li>
	<?php endwhile; ?>
	</ol>
	<div class="row">
		<div class="large-12 columns">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			<!-- <div class="navigation">
				<div class="next-posts"><?php next_posts_link(); ?></div>
				<div class="prev-posts"><?php previous_posts_link(); ?></div>
			</div> -->
		</div>
	</div> 
	<?php else: ?>
	<h2>No posts to display</h2>
	<?php endif; ?>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>