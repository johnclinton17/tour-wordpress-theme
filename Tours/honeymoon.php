<?php
/**
* Template Name: Honeymoon page
 */
$deserve_options = get_option('deserve_theme_options');

get_header();
?>
<?php while ( have_posts() ) : the_post(); $featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); $custom=get_post_custom($post->ID);?>
<!-- Portfolio -->

<div class="margin-top">
<div class="herobanner">
    <div class="bannerfill" style="background:url('<?php echo $featureimg ?>') no-repeat scroll center /cover;">
    <div class="container">
        <div class="banner_text">
          <h2><?php the_title(); ?> </h2>
        </div>
      </div>
    </div>
</div>
<section class="about_location">
    <div class="container">
    <div class="row"> 
      <div class="col-sm-12">
        <div class="whitebox"><p><?php the_field('about_location'); ?></p></div>
      </div>
    </div>
  </div>
</section>
<section class="introduction">
    <div class="container">
    <div class="row"> 
      <div class="col-sm-12">
            <div class="txt"><?php the_content(); ?></div>
      </div>
    </div>
  </div>
</section>
<section class="honeymoonpackage">
    <div class="container">
    <div class="row"> 
      <div class="col-sm-12">
            <div class="package_area">
            <span class="line">
                <h2><span><?php the_field('honeymoon_title'); ?></span></h2>
            </span>            
            <div class="packrow"> 
              <?php if( have_rows('package_details') ): while ( have_rows('package_details') ) : the_row(); ?>
                  <div class="destination-boxes pclm india" style="display: none"><a href="<?php echo get_sub_field('package_link'); ?>">
                    <div class="image-box">
                      <div class="wrapper">
                        <figure class="effect-bubba">
                          <img src="<?php echo get_sub_field('package_picture'); ?> "/>
                          <figcaption>
                            <div class="align-bottom">
                              <h2><?php echo get_sub_field('package_name'); ?></h2>
                              <p>Rs. <?php echo get_sub_field('package_amount'); ?> <br> <i>Onwards</i></p>
                            </div>
                          </figcaption>     
                        </figure>
                        <div class="image-hidden-box">
                            <h2><?php echo get_sub_field('package_name'); ?></h2>
                            <p>Rs. <?php echo get_sub_field('package_amount'); ?> <br> <i>Onwards</i></p>
                        </div>
                      </div>
                    </div></a>
                  </div>
              <?php endwhile;endif;?>
              <div class="viewmore"> 
                <div class="fadeinsec" style="display: none">
                  <a href="javascript:void(0);" class="subscribe-button" id="loadMore">View More</a>
                  <a href="javascript:void(0);" class="subscribe-button" id="close">Close</a>
                </div>
              </div>
            </div>            
          </div>
      </div>
    </div> 
<!-- Abroad honeymoon start -->    
    <div class="row"> 
      <div class="col-sm-12">
            <div class="package_area">
            <span class="line">
                <h2><span><?php the_field('honeymoon_abroad_title'); ?></span></h2>
            </span>            
            <div class="packrow"><?php if( have_rows('package_abroad_details') ): while ( have_rows('package_abroad_details') ) : the_row(); ?>
            <div class="destination-boxes pclm abroad" style="display: none"><a href="<?php echo get_sub_field('package_link'); ?>">
                    <div class="image-box">
                      <div class="wrapper">
                        <figure class="effect-bubba">
                          <img src="<?php echo get_sub_field('package_picture'); ?> "/>
                          <figcaption>
                            <div class="align-bottom">
                              <h2><?php echo get_sub_field('package_name'); ?></h2>
                              <p>Rs. <?php echo get_sub_field('package_amount'); ?> <br> <i>Onwards</i></p>
                            </div>
                          </figcaption>     
                        </figure>
                        <div class="image-hidden-box">
                            <h2><?php echo get_sub_field('package_name'); ?></h2>
                            <p>Rs. <?php echo get_sub_field('package_amount'); ?> <br> <i>Onwards</i></p>
                        </div>
                      </div></div></a></div><?php endwhile; endif; ?>
                <div class="viewmore"> 
                <div class="fadeinsec" style="display: none">
                  <a href="javascript:void(0);" class="subscribe-button" id="loadMore2">View More</a>
                  <a href="javascript:void(0);" class="subscribe-button" id="close2">Close</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
<!-- Abroad honeymoon End -->    
  </div>
</section>
<section class="yellow-band">
      <div class="container">
        <div class="col-md-8 col-centered yellow-content">
          <div class="row">
              <div class="yellow_formtxt">
                <?php the_field('honeymoon_form'); ?> <br><br>
                <?php echo do_shortcode( '[contact-form-7 id="238" title="Honeymoon Form"]'); ?>
              </div>
          </div>
        </div>
      </div>
</section>

<?php endwhile; // end of the loop. ?>

<script>
jQuery( document ).ready(function() {
  jQuery(".india").slice(0, 5).show();
  jQuery("#close").hide();
  jQuery("#loadMore").on('click', function (e) {
  e.preventDefault();
  jQuery(".india:hidden").slice(0, 5).slideDown();
  if (jQuery(".india:hidden").length == 0) {
  jQuery("#load").fadeOut('slow');
  }
  if (jQuery(".india:hidden").length < 1 || (".india:hidden").length == 0) {
  jQuery("#loadMore").hide();
  jQuery("#close").show();
  }
  jQuery('html,body').animate({
  scrollTop: jQuery(this).offset().top
  }, 1500);
  });
  jQuery("#close").on('click', function (e) {
  e.preventDefault();
  jQuery(".india").slice(5, 100).fadeOut('slow');
  if (jQuery(".india:hidden").length < 1 || (".india:hidden").length == 0) {
  jQuery("#loadMore").show();
  jQuery("#close").hide();
  }
});
  // Hide the div
  jQuery(".fadeinsec").hide();
  // Show the div in 5s
  jQuery(".fadeinsec").delay(1000).fadeIn(500);
});
</script>

<script>
jQuery( document ).ready(function() {
  jQuery(".abroad").slice(0, 5).show();
  jQuery("#close2").hide();
  jQuery("#loadMore2").on('click', function (e) {
  e.preventDefault();
  jQuery(".abroad:hidden").slice(0, 5).slideDown();
  if (jQuery(".abroad:hidden").length == 0) {
  jQuery("#load2").fadeOut('slow');
  }
  if (jQuery(".abroad:hidden").length < 1 || (".abroad:hidden").length == 0) {
  jQuery("#loadMore2").hide();
  jQuery("#close2").show();
  }
  jQuery('html,body').animate({
  scrollTop: jQuery(this).offset().top
  }, 1500);
  });
  jQuery("#close2").on('click', function (e) {
  e.preventDefault();
  jQuery(".abroad").slice(5, 100).fadeOut('slow');
  if (jQuery(".abroad:hidden").length < 1 || (".abroad:hidden").length == 0) {
  jQuery("#loadMore2").show();
  jQuery("#close2").hide();
  }
});
  // Hide the div
  jQuery(".fadeinsec").hide();
  // Show the div in 5s
  jQuery(".fadeinsec").delay(1000).fadeIn(500);
});
</script>

<?php get_footer(); ?>


