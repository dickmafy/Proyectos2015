<?php
/*-----------------------------------------------------------------------------------*/
/*	Main Configuration Settings
/*-----------------------------------------------------------------------------------*/

// Some Global Variables
$themename     = "Invictus";
$shortname 	   = "invictus";
$fw_path  	   = get_template_directory() ."/doitmax_fw/"; // root to framework directory
$fw_dir  	     = get_template_directory_uri()."/doitmax_fw/";

// Define some theme constants
define( 'MAX_THEMENAME', "Invictus" );
define( 'MAX_SHORTNAME', "invictus" );
define( 'MAX_VERSION', "3.0.2" );
define( 'NOTIFIER_THEME_NAME', MAX_THEMENAME ); // The theme name

// Define path
define( 'MAX_FW_PATH', get_template_directory()."/doitmax_fw/" ); // root to framework directory
define( 'MAX_FW_DIR', get_template_directory_uri()."/doitmax_fw/" );
define( 'MAX_OPTIONS_PATH', get_template_directory_uri()."/doitmax_fw/options/" ); // Define Options include path

// get some functions only for the admin panel
if( is_admin() ) :
  require_once (MAX_FW_PATH.'/update-notifier.php' );
  require_once (get_template_directory() . '/tinymce/tinymce.loader.php' );
endif;

// Define global constants
define( 'MAX_OPTIONS_PAGE', 'max_options' );
define( 'GALLERY_TAXONOMY', 'gallery-categories' );
define( 'POST_TYPE_GALLERY', 'gallery' ); // name the custom post type for galleries
define( 'PER_PAGE_DEFAULT', get_option(MAX_SHORTNAME.'_general_posts_per_page') );

define( 'MAX_CONTENT_WIDTH', 660 ); // set the width of the maximum media width on content pages
define( 'MAX_FULL_WIDTH', 917 ); // set the width of the maximum media width on content pages
define( 'MAX_DOCUMENTATION_LINK', "http://help.doitmax.de/invictus/" ); // set the link to the online documentation
define( 'MAX_LINK_SUPPORT', "http://support.doitmax.de/" ); // set the link to the support forum

// set the default content width
if ( ! isset( $content_width ) ) $content_width = MAX_CONTENT_WIDTH;

if ( get_magic_quotes_gpc() ) {
    $_POST      = array_map( 'stripslashes_deep', $_POST );
    $_GET       = array_map( 'stripslashes_deep', $_GET );
    $_COOKIE    = array_map( 'stripslashes_deep', $_COOKIE );
    $_REQUEST   = array_map( 'stripslashes_deep', $_REQUEST );
}

/*-----------------------------------------------------------------------------------*/
/*	Including framework files
/*-----------------------------------------------------------------------------------*/

// get some framework files
$include_files = array(
            'mr_image_resize',
            'max_custom_post_type',
            'max_lib',
            'max_theme_options',
            'max_custom_post_meta',
            'max_custom_page_meta',
            'max_images',
            'max_header',
            'max_shortcodes',
            'max_posts',
            'max_attachments',
            'max_wp_menu',
            'max_widgets',
            'max_theme_functions',
            'max_wp_admin',
            'max_mass_upload',
            'mobiledetect'
					);

// Include the files
$count_files   = count($include_files);

for ($x = 0; $x < $count_files; $x++) {
	include(MAX_FW_PATH.$include_files[$x].".php");
}


/*-----------------------------------------------------------------------------------*/
/*  Add default posts and comments RSS feed links to head
/*-----------------------------------------------------------------------------------*/

add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/*  Add support for Gallery Post Formats
/*-----------------------------------------------------------------------------------*/

// add_theme_support( 'post-formats', array( 'gallery' ) );

add_filter( 'the_content', array( $GLOBALS['wp_embed'], 'autoembed' ), 8 );

/*-----------------------------------------------------------------------------------*/
/*  Allow to execute Shortcodes in the excerpt
/*-----------------------------------------------------------------------------------*/
add_filter( 'the_excerpt', 'shortcode_unautop');
add_filter( 'the_excerpt', 'do_shortcode');
remove_filter('the_excerpt', 'wpautop');

/*-----------------------------------------------------------------------------------*/
/*  Add Excerpt Support to pages
/*-----------------------------------------------------------------------------------*/
add_post_type_support('page', array('excerpt'));
add_filter('excerpt_length', create_function('$a', 'return 50;'));

/*-----------------------------------------------------------------------------------*/
/*	WP2.9+ Thumbnails Settings
/*-----------------------------------------------------------------------------------*/

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 56, 56, true ); // Normal thumbnails
	add_image_size( 'full', 2048, '', true ); // Full thumbnails
	add_image_size( 'tablet', 1024, '', true ); // Tablet fullsize BG
	add_image_size( 'large', 960, '', true ); // Large
	add_image_size( 'mobile', 480, '', true ); // Mobile fullsize BG
}

// store some retina display sizes
$max_retina_sizes = array("full" => "full", "tablet" => "full", "mobile" => "large");

/*-----------------------------------------------------------------------------------*/
/*	Add some Filters to allow shortcodes in a Text Widget
/*-----------------------------------------------------------------------------------*/

add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode');

/*-----------------------------------------------------------------------------------*/
/*	Add Custom password protect form
/*-----------------------------------------------------------------------------------*/

add_filter( 'the_password_form', 'max_custom_password_form' );

if ( !function_exists( 'max_custom_password_form' ) ):

  function max_custom_password_form() {
  	global $post;
  	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
  	$content = '<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post">
  	<p>' . get_option_max('protected_login_text') . '</p>
  	<label for="' . $label . '">' . __( "Your Password:", MAX_SHORTNAME ) . ' </label><input name="post_password" class="password-protect" id="' . $label . '" type="password" size="20" /><input type="submit" name="Submit" class="password-login" value="' . esc_attr__( "Login", MAX_SHORTNAME ) . '" />
  	</form>
  	';
  	return $content;
  }

endif;

/*-----------------------------------------------------------------------------------*/
/*	Add wmode transparent to embeded videos
/*-----------------------------------------------------------------------------------*/

add_filter('embed_oembed_html', 'max_add_video_wmode_transparent', 10, 3);

if ( !function_exists( 'max_add_video_wmode_transparent' ) ):

  function max_add_video_wmode_transparent($html, $url, $attr) {
     if (strpos($html, "<embed src=" ) !== false) {
  		$html = str_replace('</param><embed', '</param><param name="wmode" value="transparent"></param><embed wmode="transparent" ', $html);
  		return $html;
     } else {
  		return $html;
     }
  }

endif;

/*-----------------------------------------------------------------------------------*/
/*	add a body class if fullwidth is activated
/*-----------------------------------------------------------------------------------*/

add_filter( 'body_class', 'max_add_fullwidth_body_class');

if ( !function_exists( 'max_add_fullwidth_body_class' ) ):

  function max_add_fullwidth_body_class( $classes ) {
  	global $meta;

  	@$custom_fields = get_post_custom_values('_wp_page_template', $post_id );
  	$page_template = $custom_fields[0];

  	if ( ( isset($meta[MAX_SHORTNAME."_page_gallery_fullwidth"]) && $meta[MAX_SHORTNAME."_page_gallery_fullwidth"] == 'true' ) ||
  		 $page_template == 'template-sidebar-fullwidth.php' ||
  		 $page_template == 'template-fullwidth-no-sidebar.php' ||
  		 $page_template == 'template-facebook-gallery.php'
  		)
  		$classes[] = 'fullwidth-content';
  	return $classes;
  }

endif;

/*-----------------------------------------------------------------------------------*/
/*	function to filter posts for a custom query
/*-----------------------------------------------------------------------------------*/

add_filter('pre_get_posts', 'max_query_post_type');

if ( !function_exists( 'max_query_post_type' ) ):

  function max_query_post_type($query) {
  	if(is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
  		$post_type = get_query_var('post_type');
  		if($post_type) :
  			$post_type = $post_type;
  		else:
  			$post_type = array('post','gallery'); // replace cpt to your custom post type
  			$query->set('post_type', $post_type);
  		endif;
  	return $query;
  	}
  }

endif;

/*-----------------------------------------------------------------------------------*/
/*	function to add custom post types to the rss feed
/*-----------------------------------------------------------------------------------*/

add_filter('request', 'max_myfeed_request');

if ( !function_exists( 'max_myfeed_request' ) ):

  function max_myfeed_request($qv) {
  	if (isset($qv['feed']) && !isset($qv['post_type']))
  		$qv['post_type'] = array('post', POST_TYPE_GALLERY);
  	return $qv;
  }

endif;

/*-----------------------------------------------------------------------------------*/
/*	function to add featured images to the rss feed
/*-----------------------------------------------------------------------------------*/

add_filter('the_excerpt_rss', 'max_insertThumbnailRSS');
add_filter('the_content_feed', 'max_insertThumbnailRSS');

if ( !function_exists( 'max_insertThumbnailRSS' ) ):

  function max_insertThumbnailRSS($content) {
  	global $post;
  	if ( has_post_thumbnail( $post->ID ) ){
  		$content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'alt' => get_the_title(), 'title' => get_the_title(), 'style' => 'float:right;' ) ) . '' . $content;
  	}
  	return $content;
  }

endif;

/*-----------------------------------------------------------------------------------*/
/*	function to filter protected posts from RSS feed
/*-----------------------------------------------------------------------------------*/

add_filter('pre_get_posts','max_rss_filter_protected');

if ( !function_exists( 'max_rss_filter_password_where' ) ):

  function max_rss_filter_password_where($where) {
      $where .= " AND post_password = '' ";
      return $where;
  }

endif;

if ( !function_exists( 'max_rss_filter_protected' ) ):

  function max_rss_filter_protected($query) {
    if ($query->is_feed) {
      add_filter('posts_where', 'max_rss_filter_password_where');
    }
    return $query;
  }

endif;

/*-----------------------------------------------------------------------------------*/
/*	function to add a category filter for the custom post type
/*-----------------------------------------------------------------------------------*/

add_action( 'restrict_manage_posts', 'max_custom_post_type_filer' );

if ( !function_exists( 'max_custom_post_type_filer' ) ):

  function max_custom_post_type_filer() {

  	global $typenow;

  	$taxonomy = GALLERY_TAXONOMY;

  	if( $typenow != "page" && $typenow != "post" ){

  		$filters = array($taxonomy);

  		foreach ($filters as $tax_slug) {
  			$tax_obj = get_taxonomy($tax_slug);
  			$tax_name = $tax_obj->labels->name;
  			$terms = get_terms($tax_slug);
  			echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
  			echo "<option value=''>Show All $tax_name</option>";
  			foreach ($terms as $term) {
  			  echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>';
  		  }
  			echo "</select>";
  		}

  	}

  }

endif;

/*-----------------------------------------------------------------------------------*/
/*	Wrap read more link into paragraph
/*-----------------------------------------------------------------------------------*/

add_filter('the_content_more_link', 'max_add_p_tag');

if ( !function_exists( 'max_add_p_tag' ) ):

  function max_add_p_tag($link){
    return '<p class="read-more">'.$link.'</p>';
  }

endif;

/*-----------------------------------------------------------------------------------*/
/*	Remove AutoP from category descriptions
/*-----------------------------------------------------------------------------------*/

remove_filter('term_description','wpautop');

/*-----------------------------------------------------------------------------------*/
/*	Remove "Protected" from Password Pages
/*-----------------------------------------------------------------------------------*/

add_filter('protected_title_format', 'max_blank');

if ( !function_exists( 'max_blank' ) ):

  function max_blank($title) {
    return '%s';
  }

endif;

?>