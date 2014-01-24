<div id="outer-wrap">
	<div id="inner-wrap">
		<header>
			<div class="top-colors"></div>
			<div class="row header">
				<div class="large-6 columns">
					<div class="logo">
						<a href="<?php echo get_site_url(); ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" alt="King Berry SA">
						</a>
					</div>
				</div>
				<div class="large-6 columns">
					<div class="search-block right">
						<div class="large-3 columns lang">
							<a href="#">
								<span class="flag"></span>English
							</a>
						</div>	
						<div class="large-9 columns hide-for-sm">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
				
			</div>
			<nav id="nav" class="nav-content">
				<div class="row">
					<div class="large-12 columns">
						<div class="hide-for-mu">
							<?php get_search_form(); ?>
						</div>	
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
						<a class="close-btn hide-for-medium-up" id="nav-close-btn" href="#top">Return to Content</a>
					</div>
				</div>
			</nav>		
		</header>
