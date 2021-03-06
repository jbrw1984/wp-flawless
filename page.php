<?php
/**
 * Template for standard pages.
 *
 *
 * @version 0.60.0
 * @author Usability Dynamics, Inc. <info@usabilitydynamics.com>
 * @module Flawless
*/

  //** Bail out if page is being loaded directly and Flawless does not exist */
  if( !function_exists( 'get_header' ) ) {
    die();
  }
?>

<?php get_template_part( 'templates/header',  'page' ); ?>

<?php get_template_part( 'templates/attention', 'page' ); ?>

<div class="<?php flawless_wrapper_class(); ?>">

  <?php flawless_widget_area( 'left_sidebar' ); ?>

  <div class="<?php flawless_block_class( 'main cfct-block' ); ?>">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" class="<?php flawless_module_class(); ?>">
    
      <?php do_action( 'flawless_ui::above_header' ); ?>

      <header class="entry-title-wrapper">
        <?php flawless_breadcrumbs(); ?>
        <?php flawless_page_title(); ?>
      </header>

      <?php get_template_part( 'templates/entry-meta', 'header' ); ?>

      <div class="entry-content clearfix">
      <?php the_content( 'More Info' ); ?>
      </div>

      <?php comments_template(); ?>

      <?php get_template_part( 'templates/entry-meta', 'footer' ); ?>

    </div><!-- flawless_module_class() -->

    <?php endwhile; endif; ?>

  </div>

  <?php flawless_widget_area( 'right_sidebar' ); ?>

</div>

<?php get_template_part( 'templates/footer', 'page' ); ?>