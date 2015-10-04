<?php

/** Tell WordPress to run max_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'max_setup' );

if ( ! function_exists( 'max_setup' ) ):

/*-----------------------------------------------------------------------------------*/
/*	Register and load common JS and CSS for various WordPress features.
/*-----------------------------------------------------------------------------------*/

function max_setup() {

	// Init JQuery scripts
	function theme_add_scripts() {

		global $post;

  	// get the image we need for the different devices
  	$detect = new Mobile_Detect();
  	$_img_string = 'full';

		if (!is_admin()) {

			wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery

      // lets check for google cdn jquery or local version
      $jquery_url = "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"; // the URL to check against
      $test_url = @fopen($jquery_url,'r'); // test parameters

      if($test_url !== false) { // test if the URL exists
        wp_register_script('jquery', $jquery_url, 'jquery', '1.8.3'); // register the external file
      } else {
        wp_register_script('jquery', get_template_directory_uri() .'/js/jquery.min.js', 'jquery', '1.8.3'); // register the local file
      }

      // lets check for google cdn jquery-ui or local version
      $jquery_ui_url = "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"; // the URL to check against
      $test_url = @fopen($jquery_ui_url,'r'); // test parameters

      if($test_url !== false) { // test if the URL exists
        wp_register_script('jquery-ui-custom', $jquery_ui_url, 'jquery', '1.10.3'); // register the external file
      } else {
        wp_register_script('jquery-ui-custom', get_template_directory_uri() .'/js/jquery-ui.min.js', 'jquery', '1.10.3'); // register the local file
      }

			wp_register_script('validation', get_template_directory_uri() . '/js/jquery.validate.js', 'jquery', '1.7', TRUE);
			wp_register_script('modenizr', get_template_directory_uri() . '/js/modenizr.min.js', 'jquery', '2.6.1 ', FALSE);
			wp_register_script('respond', get_template_directory_uri() .'/js/respond.min.js', 'jquery', '1.0', FALSE);

			wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', 'jquery', '1.3', TRUE);
			wp_register_script('jquery-mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', 'jquery', '1.0', TRUE);
			wp_register_script('jquery-livequery', get_template_directory_uri() . '/js/jquery.livequery.min.js', 'jquery', '1.1.1', FALSE);

			wp_register_script('prettyphoto', get_template_directory_uri() .'/js/prettyPhoto/jquery.prettyPhoto.js', 'jquery', '3.1.5', TRUE);
			wp_register_script('superbgimage', get_template_directory_uri() . '/js/jquery.superbgimage.min.js', 'jquery', '1.0');
			wp_register_script('touchswipe', get_template_directory_uri() . '/js/jquery.touchswipe.min.js', 'jquery', '1.6.3', TRUE);
			wp_register_script('iscroll', get_template_directory_uri() . '/js/iScroll.js', 'jquery', '4.2.5', TRUE);
			wp_register_script('superfish', get_template_directory_uri() .'/js/superfish.js', 'jquery', '1.7.3', TRUE);
			wp_register_script('supersubs', get_template_directory_uri() .'/js/supersubs.js', 'jquery', '0.3b', TRUE);
			wp_register_script('fitvids', get_template_directory_uri() .'/js/jquery.fitvids.min.js', 'jquery', '1.0', TRUE);

			// check for iphone, ipad or other mobile devices
			if( $detect->isMobile() || $detect->isTablet() ) {
				wp_register_script('superfish-touch', get_template_directory_uri() .'/js/jquery.sftouchscreen.js', 'jquery', '3.1', true);
			}

			wp_register_script('tipsy', get_template_directory_uri() .'/js/tipsy/jquery.tipsy.min.js', 'jquery', '1.0.0a', TRUE);
			wp_register_script('isotope', get_template_directory_uri() .'/js/jquery.isotope.min.js', 'jquery', '1.5.25', TRUE);
			wp_register_script('infinitescroll', get_template_directory_uri() .'/js/jquery.infinitescroll.min.js', 'jquery', '2.0b2.120519', TRUE);
			wp_register_script('galleria', get_template_directory_uri() .'/js/galleria/galleria-1.2.9.min.js', 'jquery', '1.2.9', TRUE);
			wp_register_script('flickr-fullsize', get_template_directory_uri() .'/js/supersized.flickr.js', 'jquery', '1.1.2');

			wp_register_script('custom-superbgimage', get_template_directory_uri() .'/js/custom-superbgimage.js', 'jquery', MAX_VERSION);
			wp_register_script('custom-scroller', get_template_directory_uri() .'/js/custom-scroller.js', 'jquery', MAX_VERSION, TRUE);
			wp_register_script('custom-script', get_template_directory_uri() .'/js/custom.js', array('modenizr', 'touchswipe', 'jquery-livequery', 'supersubs',  'superfish', 'fitvids', 'easing', 'prettyphoto', 'iscroll', 'superbgimage', 'tipsy'), '3.0.21', TRUE );
      wp_register_script('cookie', get_template_directory_uri() .'/js/jquery.cookie.js', 'jquery', '1.3.1');

			// Load the allover needed scripts
			if( $detect->isMobile() || $detect->isTablet() ) {
				wp_enqueue_script('superfish-touch');
			}

			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'jquery-ui-custom' );

			if( get_option_max('splash_cookie_set') == 'true' ) :
  			wp_enqueue_script( 'cookie' );
			endif;

			wp_enqueue_script( 'custom-script' );

		}
	}

	// Init additional needed CSS Styles
	function theme_add_styles() {
		if (!is_admin()) {

		  wp_enqueue_style('prettyphoto', get_template_directory_uri().'/js/prettyPhoto/prettyPhoto.css', false, false);
			wp_enqueue_style('tipsy', get_template_directory_uri().'/js/tipsy/tipsy.css', false, false);
			wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', false, false);
			wp_enqueue_style('custom', get_template_directory_uri().'/css/custom.css', false, false);

		  wp_register_style('retina', get_template_directory_uri() . '/css/retina.css', array(), '1', 'only screen and (-webkit-min-device-pixel-ratio: 2)' );
			wp_enqueue_style( 'retina' );

		}
	}
	add_action('init', 'theme_add_styles');
	add_action('init', 'theme_add_scripts');

	// load the following scripts only on homepage
	function max_index_scripts() {
		if (is_home()){
			wp_enqueue_script('jquery-mousewheel');
			wp_enqueue_script('custom-superbgimage');
		}
	}
	add_action('wp_print_scripts', 'max_index_scripts');

	// load the following scripts only when using IE - shame on you
	function max_ie_scripts() {
		global $is_IE;
		if($is_IE){
			wp_enqueue_script('respond');
		}
	}
	add_action('wp_print_scripts', 'max_ie_scripts');

}
endif;

?>