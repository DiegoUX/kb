<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */

	/* ========================================================================================================================

        Archive Pagination: Displays navigation to next/previous pages when applicable.

        ======================================================================================================================== */

        if ( ! function_exists( 'content_nav' ) ) :
                function content_nav( $html_id ) {
	                global $wp_query;
	                $html_id = esc_attr( $html_id );
	                if ( $wp_query->max_num_pages > 1 ) : ?>
	                        <nav id="pagination">
                                <div class="past-page"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
                                <div class="next-page"><?php next_posts_link( ' &laquo; Older' ); ?></div>
	                        </nav>
	                <?php endif;
                }
        endif;


	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}


	// Excerpt More

	function new_excerpt_more($more) {
	   global $post;
	   return '<a class="ver-mas" href="'. get_permalink($post->ID) . '">Ver más &raquo;</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	// Sidebar

	if (function_exists('register_sidebar')) {

		register_sidebar(array(
	        'name' => __('Certificaciones Home'),
	        'id' => 'certificaciones-home',
	        'before_widget' => '<div id="%1$s" class=" %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>'
	    ));

	    register_sidebar(array(
	        'name' => __('Sidebar Noticias'),
	        'id' => 'noticias',
	        'before_widget' => '<div id="%1$s" class=" %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>'
	    ));

	    register_sidebar(array(
	        'name' => __('Contact Sidebar'),
	        'id' => 'contact-sidebar',
	        'before_widget' => '<div id="%1$s" class=" %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>'
	    ));
	    // Contact Sidebar Inglés
	    register_sidebar(array(
	        'name' => __('Contact Sidebar EN'),
	        'id' => 'contact-sidebar-en',
	        'before_widget' => '<div id="%1$s" class=" %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>'
	    ));

	    register_sidebar(array(
	        'name' => __('Productos: Arándanos'),
	        'id' => 'prod-arandanos',
	        'before_widget' => '<div id="%1$s" class="product-sidebar">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>'
	    ));

	    register_sidebar(array(
	        'name' => __('Productos: Limones'),
	        'id' => 'prod-limones',
	        'before_widget' => '<div id="%1$s" class="product-sidebar">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>'
	    ));

	    register_sidebar(array(
	        'name' => __('Productos: Frutillas'),
	        'id' => 'prod-frutillas',
	        'before_widget' => '<div id="%1$s" class="product-sidebar">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>'
	    ));
	    // Productos Inglés
	    register_sidebar(array(
	        'name' => __('Products: Blueberries'),
	        'id' => 'prod-blueberries',
	        'before_widget' => '<div id="%1$s" class="product-sidebar">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>'
	    ));

	    register_sidebar(array(
	        'name' => __('Products: Lemons'),
	        'id' => 'prod-lemons',
	        'before_widget' => '<div id="%1$s" class="product-sidebar">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>'
	    ));

	    register_sidebar(array(
	        'name' => __('Products: Strawberries'),
	        'id' => 'prod-strawberries',
	        'before_widget' => '<div id="%1$s" class="product-sidebar">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>'
	    ));

	}


	function Last5posts()
	{
	    $args = array( "showposts" => 5 );                  
	    query_posts($args);

	    $content = "";

	    if( have_posts() ) : 

	        while( have_posts() ) :

	            the_post();
	            $link = get_permalink();
	            $title = get_the_title();
	            $date = get_the_date();                              

	            $content .= "<div class='widget-custom-content'>";
	            $content .= "<h4><a href='$link' target='_top'>$title</a></h4>\n";
	            $content .= "<span>$date</span>";
	            $content .= "<p class='excerpt'>" . get_the_excerpt() . "</p>";
	            $content .= "</div>";

	        endwhile;

	        wp_reset_query();

	    endif;

	    // Leave one line commented out depending on usage
	    echo $content;   // For use as widget
	    //return $content; // for use as shortcode
	}

	register_sidebar_widget(__('Last 5 Posts'), 'Last5posts');


// Remove p tags
// remove_filter( 'the_content', 'wpautop' ); 
	// function get_rid_of_wpautop(){  
	//   if(!is_singular()){  
	//     remove_filter ('the_content', 'wpautop');  
	//     // remove_filter ('the_excerpt', 'wpautop');  
	//   }  
	// }  
	  
	// add_action( 'template_redirect', 'get_rid_of_wpautop' );