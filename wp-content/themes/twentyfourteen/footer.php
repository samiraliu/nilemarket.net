<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>



	<section class="event-section">
      <div class="row-fluid">
        <div class="span12">
          <div class="location-map">
            <div class="location-map-head">
              <div class="left-side">
                <h5>Meet us!</h5>
                <p><?php the_field('address', 'option'); ?></p>
              </div>
              <div class="right-side"> <a href="#" class="mark">&nbsp;</a> <a href="#" class="location">&nbsp;</a> </div>
            </div>
            <div class="map-box">
              <iframe width="1170" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?saddr=2037+Plank+Rd+Fredericksburg,+VA&amp;ie=UTF8&amp;t=m&amp;ll=38.295797,-77.493482&amp;spn=0.005052,0.025084&amp;z=16&amp;output=embed"></iframe><br /><small></small>
            </div>
            <div class="bottom-sec"> <strong class="time"><?php the_field('timetable', 'option'); ?></strong></div>
          </div>
        </div>
      </div>
    </section>
        </section>
	</div><!-- #page -->
	<?php wp_footer(); ?>
	<!-- jQuery -->

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<!-- Bootstrap -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js" type="text/javascript"></script><!-- Boostrap Js -->

<!-- FlexSlider -->
<script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script> <!-- FlexSlider -->

<!--Google Map-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script><!--Google Map-->

<!--Scrool js-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script><!--Scrool js-->

<!--Pie Chart-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/excanvas.js"></script> <!--Pie Chart-->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script><!--Pie Chart-->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script> <!--Bx Slider-->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js"></script>

<!-- Custom Scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js" type="text/javascript"></script><!-- Custom Scripts -->

<!--J Carousel-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.min.js"></script><!--J Carousel-->

</body>
</html>