<?php
/**
 * The file that displays the homepage splash screen.
 *
 * @package WordPress
 * @subpackage Invictus
 * @since Invictus 3.0
 */

  // get the splash logo
  $logo_url = "";
  if( get_option_max('splash_logo_value') == "" ) {
    if( get_option_max('custom_logo_value') == "" ) {
      $logo_url = get_template_directory_uri().'/css/'. get_option_max('color_main') .'/bg-logo.png';
    }else{
      $logo_url = get_option_max('custom_logo_value');
    }
  }else{
    $logo_url = get_option_max('splash_logo_value');
  }

  // get the splash retina logo
  $logo_url_2x = "";
  if( get_option_max('splash_logo_2x') == "" ) {
    if( get_option_max('custom_logo_2x') != "" ) {
      $$logo_url_2x = get_option_max('custom_logo_2x');
    }
  }else{
    $logo_url_2x = get_option_max('splash_logo_2x');
  }

  $splash_width    = get_option_max('splash_logo_width');
  $splash_height   = get_option_max('splash_logo_height');
	$logo_width      = empty($splash_width) ? get_option_max('custom_logo_width') : $splash_width;
	$logo_height     = empty($splash_height) ? get_option_max('custom_logo_height') : $splash_height;
  $autohide        = get_option_max('splash_hide') == "true" ? 1 : 0;

  ?>

  <div id="splashscreen">
    <div class="inner">

      <div class="logowrapper">
        <img src="<?php echo $logo_url ?>" alt="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>" width="<?php echo $logo_width ?>" height="<?php echo $logo_height ?>" class="logo" />
        <?php if(!empty($logo_url_2x)) : ?>
        <img src="<?php echo $logo_url_2x ?>" alt="<?php echo get_bloginfo('name') ?>" width="<?php echo $logo_width ?>" height="<?php echo $logo_height ?>" class="logo-retina" />
        <?php endif; ?>
      </div>

      <?php
      $mobile_detect = new Mobile_Detect();
      if( get_option_max('splash_custom_text') != "" ) : ?>
      <div class="custom-text">
        <?php get_option_max('splash_custom_text', true); ?>
      </div>
      <?php endif; ?>

      <?php if(get_option_max('splash_show_enter') == "true") : ?>
      <p class="enter align-center">
        <a href="#" class="button"><?php _e('Enter Site', MAX_SHORTNAME); ?></a>
      </p>
      <?php endif; ?>

    </div>
  </div>

	<script type='text/javascript'>
  /* <![CDATA[ */
  var splashvar = { 'theme': '<?php echo MAX_SHORTNAME ?>', 'cookieset': <?php get_option_max('splash_cookie_set', true) ?>, 'cookieexpires' : <?php get_option_max('splash_cookie_expires', true) ?>, 'fadeout': <?php echo $autohide; ?>, 'timeout': <?php get_option_max('splash_timeout', true) ?>, 'fade': <?php get_option_max('splash_fade', true) ?>, 'logowidth' : <?php echo $logo_width; ?>, 'logoheight' : <?php echo $logo_height; ?>   };
  /* ]]> */
  </script>