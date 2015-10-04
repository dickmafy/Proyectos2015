<?php
/**
 * Template Name: Portfolio Lightbox Gallery
 *
 * @package WordPress
 * @subpackage Invictus
 * @since Invictus 1.0
 */

get_header();

wp_reset_query();

// show the item caption of an image on hover?
$itemCaption = true;

// Hide the excerpt on hover?
$hideExcerpt = true;

// its a lightbox gallery template
$isLightboxGallery = true;

// get the image dimensions
$imgDimensions = array( 'width' => 320, 'height' => 240 );

?>
<div id="single-page" class="clearfix left-sidebar">

		<div id="primary" class="portfolio-three-columns" >
			<div id="content" role="main">

				<header class="entry-header">

				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php
				// check if there is a excerpt
				if( max_get_the_excerpt() ){
				?>
				<h2 class="page-description"><?php max_get_the_excerpt(true) ?></h2>
				<?php } ?>

				</header><!-- .entry-header -->

				<?php /* -- added 2.0 -- */ ?>
				<?php the_content() ?>
				<?php /* -- end -- */ ?>

				<?php
					// including the loop template gallery-loop.php
					get_template_part( 'includes/gallery', 'loop.inc' );
				?>

        <?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #container -->

		<?php if ( !post_password_required() ) : ?>
		<div id="sidebar">
		  <?php
		  wp_reset_query();
      /* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( max_get_custom_sidebar('sidebar-gallery-lightbox')) );
      ?>
		</div>
		<?php endif; ?>

</div>

<?php get_footer(); ?>
