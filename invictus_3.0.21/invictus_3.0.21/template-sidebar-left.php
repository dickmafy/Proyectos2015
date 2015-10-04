<?php
/**
 * Template Name: Sidebar Left Template
 *
 * @package WordPress
 * @subpackage Invictus
 * @since Invictus 1.0
 */

get_header();

?>
<div id="single-page" class="clearfix left-sidebar">

		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

  	<?php if ( !post_password_required() ) : ?>
  	<div id="sidebar">
  	  <?php
  	  wp_reset_query();
      /* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( max_get_custom_sidebar('sidebar-main')) );
      ?>
  	</div>
  	<?php endif; ?>

</div>

<?php get_footer(); ?>
