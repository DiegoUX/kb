<div id="outer-wrap">
	<div id="inner-wrap">
		<header id="top" role="banner">
			<div class="top-colors"></div>
			<div class="row header">
				<div class="large-6 columns">
					<div class="logo">
						<a href="#">
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
						<div class="large-9 columns">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="nav-content">
				<div class="row">
					<div class="large-12 columns">
						<nav id="nav" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
						</nav>
					</div>
				</div>
			</div>		
		</header>
