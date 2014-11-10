<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<section id="banner" class="height">
      <div class="contact-banner"><img src="<?php the_field('header_image'); ?>" alt="img"></div>
    </section>
  	<div class="container">
        <div class="row-fluid">
          <div class="span12">
            <div class="heading">
              <?php the_title('<h1>', '</h1>'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row-fluid">
          <div class="span12">
						<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();
								// Include the page content template.
								get_template_part( 'content', 'page' );
								// If comments are open or we have at least one comment, load up the comment template.
							endwhile;
						?>
						</div>
					</div>
				</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_footer();