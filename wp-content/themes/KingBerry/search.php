<?php
/**
 * Search results page
 * 
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
	<div class="row">
		<div class="large-12 columns">
			<div class="search-title">
				<h2>
				<?php /* Contador de busqueda */ 
				$allsearch = &new WP_Query("s=$s&showposts=-1"); 
				$key = wp_specialchars($s, 1); 
				$count = $allsearch->post_count; 
					_e(''); 
					echo $count . ' ';
					_e('resultados para ');
					_e('<span class="search-terms">"');
					echo $key; 
					_e('"</span>');
				wp_reset_query(); 
				?>		
				 <!-- <span>'<?php echo get_search_query(); ?>'</span> -->
				</h2>	
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
								<span class="pink-date"><?php dynamic_sidebar( 'publicacion-side' ); ?><time><?php the_time('d/m/Y'); ?></time></span>
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