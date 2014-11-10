<?php
/**
 * Template Name: Secondary template
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
      <section class="menu-page full-menu-list">
        <div class="container">
          <div class="row-fluid">
            <div id="accordion-acc" class="accordion accordion-area">
                    <?php
          if( get_field('secondary_accordion') ):
            while ( has_sub_field('secondary_accordion') ) : ?>
              <div class="accordion-group">
                <div class="accordion-heading"> <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle"><?php the_sub_field('menu_title'); ?></a> </div>
                <div class="accordion-body " id="collapseOne" >
                  <div class="accordion-inner">
                    <div class="row-fluid">
                      <div class="full-menu-list">
                        <ul>
                      <?php
                        if( get_sub_field('submeniu') ):
                          while ( has_sub_field('submeniu') ) : ?>
                           <li>
                            <div class="span3">
                              <div class="menu-list-frame"><img src="<?php the_sub_field('accord-image'); ?>" alt="img"></div>
                            </div>
                            <div class="span9">
                              <div class="menu-list-text">
                                <div class="review-row">
                                  <h3><?php the_sub_field('product_title'); ?></h3>
                                </div>
                                <p><?php the_sub_field('accordion_description'); ?></p>
                                <div class="review-row"></div>
                          </li>
                              <?php endwhile; ?>
                        <?php endif; ?>
                          <li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

    </div><!-- #content -->
  </div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();
