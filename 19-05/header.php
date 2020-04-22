<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dzianis_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dzianis-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div id="top-bar">
				<div class="top-contact-bar">
					<div class= "top-bar-adress">
						<i class="fa fa-map-marker"><span style="color: transparent; display: none;">icon-map-marker</span></i>	
						<span>Optiscan Oy P.O. Box 20 FI-02601 Espoo</span>
					</div>
	                        	<div class= "top-bar-phone">
						<i class="fa fa-phone"><span style="color: transparent; display: none;">icon-phone</span></i>
						<span>+358 9 4766 766 </span>
					</div>
	                        	<div class= "top-bar-email">
						<i class="fa fa-envelope"><span style="color: transparent; display: none;">icon-envelope</span></i>
						<span>
	               					<a href="mailto:info@optiscangroup.com">info@optiscangroup.com</a>
						</span>
					</div>
				</div>
                	</div>
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$dzianis_theme_description = get_bloginfo( 'description', 'display' );
			if ( $dzianis_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $dzianis_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<!--<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dzianis-theme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav> --><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div class="teafields-site-search">
	<?php the_widget( 'WP_Widget_Search', 'title=' ); ?>
	</div>
	<header class="entry-header">

		<?php
			if ( is_front_page() ) :
				?>
					<div id="nav_menu_wraper"> 
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
					</div>
				<?php echo do_shortcode('[smartslider3 slider=3]'); ?>
				<?php
			else :
				?>

				<div id="nav_menu_wraper">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
				</div>
				<div class="title-wraper">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>
				<?php
			endif;
		?>
		
	</header><!-- .entry-header -->
<script>
$(document).ready(function(){
	$('#search-close').click(function() {
		$('.teafields-site-search').slideToggle();
		return false;
	});
	$('#search-toggle').click(function() {
		$('.teafields-site-search').slideToggle();
		return false;
	});

	var wnd = $(window);
	opacityControl = $('#mega-menu-menu-1');
	
	wnd.scroll(function(){
	   var top = wnd.scrollTop();

	   if (top > 300) opacityControl.addClass("opasity_zero");
		else opacityControl.removeClass("opasity_zero");
	    
	});

});
</script>

	<div id="content" class="site-content">
