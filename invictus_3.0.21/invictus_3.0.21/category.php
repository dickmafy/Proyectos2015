<?php
/**
 * Category Template
 *
 * @package WordPress
 * @subpackage Invictus
 * @since Invictus 1.0
 */

global $showSuperbgimage, $isPost;
$showSuperbgimage = true;
$isPost = false;

get_header();

$page = get_post($post->ID);
$category = get_the_category();

?>

<div id="single-page" class="clearfix blog left-sidebar">

		<div id="primary">

				<header class="page-header">

					<h1 class="page-title"><?php
						printf( __( 'Category Archives: %s', 'invictus' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					?></h1>

					<?php $categorydesc = category_description(); if ( ! empty( $categorydesc ) ) echo apply_filters( 'archive_meta', '<h2 class="page-description">' . $categorydesc ); ?>
				</header>

			<div id="content" role="main">
				<?php
					// including the loop template blog-loop.php
					get_template_part( 'includes/blog', 'loop.inc' );
				?>
			</div><!-- #content -->

		</div><!-- #primary -->

		<?php if ( !post_password_required() ) : ?>
		<div id="sidebar">
		  <?php
		  wp_reset_query();
      /* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( max_get_custom_sidebar('sidebar-blog')) );
      ?>
		</div>
		<?php endif; ?>

</div>
<?php get_footer(); ?>
