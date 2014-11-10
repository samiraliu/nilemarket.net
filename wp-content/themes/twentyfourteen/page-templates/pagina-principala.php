<?php
/**
* Template Name: Home page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>
<div id="main-content" class="main-content">
  <section id="banner">
    <div class="caption">
      <div class="banner-caption">
        <div class="container">
          <div class="row-fluid">
            <div class="span12">
              <div class="caption-right"> <strong class="title"><span class="text">fresh meals everyday</span></strong> <strong class="open"><?php the_field('timetable', 'option'); ?></strong> </div>
            </div>
          </div></div>
        </div>
      </div>
      <ul class="bxslider">
        <?php

        if( get_field('slider_sus') ):

          while ( has_sub_field('slider_sus') ) : ?>
          <li>
            <img src="<?php the_sub_field('image_top_slider'); ?>" alt="">
          </li>
      <?php endwhile; ?>
    <?php endif; ?>
  </ul>
</div>
</section>

<section id="content" class="container">
    <section class="featured-section">
      <div class="row-fluid">
        <div class="span3">

          <!-- Start Accordian List Menu -->
          <div class="accordion accordion-area" id="accordion2">
            <?php

              if( get_field('catalog_accordion') ):

                while ( has_sub_field('catalog_accordion') ) : ?>
            <div class="accordion-group">
              <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne"><?php the_sub_field('big_title'); ?></a> </div>
              <div id="collapseOne" class="accordion-body">
                <div class="accordion-inner">
                <div class="">
                   <ul class="accordion-list">
                   <?php
                      if( get_sub_field('sub_item_catalog') ):
                        while ( has_sub_field('sub_item_catalog') ) : ?>
                      <li>
                        <div class="frame"><a class="fancybox" href="<?php the_sub_field('image_catalog'); ?>"><img src="<?php the_sub_field('image_catalog'); ?>" alt="img"></a>
                          <div class="caption"><strong class="title"><?php the_sub_field('title_catalog'); ?></strong></div>
                      </li>
                      <?php endwhile; ?>
          <?php endif; ?>
                   </ul>
                </div>

                  </div>
                  </div>
                </div>
             <?php endwhile; ?>
          <?php endif; ?>



          </div>
          <!-- End Accordian List Menu -->
        </div>
        <div class="span9">
          <div class="heading">
            <h2>Featured Dishes</h2>
          </div>
          <div class="featured-slider">
            <div id="wrap">
              <div class=" jcarousel-skin-tango"><div class="jcarousel-container jcarousel-container-horizontal"><div class="jcarousel-clip jcarousel-clip-horizontal">
                <ul id="mycarousel" class="jcarousel-list jcarousel-list-horizontal">

                         <?php

                            if( get_field('features') ):

                              while ( has_sub_field('features') ) : ?>
                              <li>
                                <img src="<?php the_sub_field('carousel_images'); ?>" alt="">
                                <div class="caption">
                                </div>
                                <strong class="hover-panel"><?php the_sub_field('featured_dishes_title'); ?></strong>
                              </li>
                          <?php endwhile; ?>

                        <?php endif; ?>

                </ul></div><div class="jcarousel-prev jcarousel-prev-horizontal"></div><div class="jcarousel-next jcarousel-next-horizontal"></div></div></div>
            </div>
          </div>
        </div>
      </div>

<?php
get_footer();
