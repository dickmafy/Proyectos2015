<?php
/**
 * The template for displaying Photo pages.
 *
 * @package WordPress
 * @subpackage Invictus
 * @since Invictus 1.0
 */

global $portfolio_posts;

$showSuperbgimage = true;

get_header();

// Get the current term by the slug
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

  // get the portfolio posts for the choosen taxonomy
  $args = array(
  	'post_type'   => 'gallery',
  	'orderby'     => 'menu_order',
  	'order'       => 'ASC',
  	'showposts'   => -1,
  	'paged'       => $paged,
  	'tax_query'   => array(
  		array(
  			'taxonomy'  => GALLERY_TAXONOMY,
  			'terms'     => get_queried_object()->term_id,
  			'field'     => 'term_id',
  		)
  	)
  );


$portfolio_posts = null;
$portfolio_posts = new WP_Query($args);

// set the image dimensions for this portfolio template
$imgDimensions = array( 'width' => 320, 'height' => 226 );

$itemCaption = true;

?>

<div id="single-page" class="clearfix left-sidebar">

		<div id="primary" class="portfolio-three-columns" >
			<div id="content" role="main">

				<header class="entry-header">

					<h1 class="page-title"><?php echo $term->name; ?></h1>
					<?php	if ( ! empty(  $term->description ) ) {
							echo '<h2 class="page-description">' . $term->description . '</h2>';
						}
					?>

				</header><!-- .entry-header -->

				<?php
					// including the loop template gallery-loop.php
					get_template_part( 'includes/gallery', 'loop.inc' );
				?>

			</div><!-- #content -->
		</div><!-- #container -->

		<?php if ( !post_password_required() ) : ?>
		<div id="sidebar">
		  <?php
		  wp_reset_query();
      /* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( max_get_custom_sidebar('sidebar-gallery-taxonomy')) );
      ?>
		</div>
		<?php endif; ?>

</div>
<?php get_footer(); ?>
