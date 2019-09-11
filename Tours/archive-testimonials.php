<?php
/*
 * Archive Template File.
 */
$deserve_options = get_option('deserve_theme_options');

get_header();
?>

<!-- Portfolio -->

<div class="container margin-top">

<div class="herobanner">
  <div class="container">
    <div class="bannerfill" style="background:url('<?php echo get_template_directory_uri(); ?>/images/solution-contact.png') no-repeat scroll center center / cover ;height: 250px;margin: 0 10px;">
        <div class="banner-text">
          <h1> Testimonials</h1>
        </div>
    </div>
  </div>
</div>





<!--section product title -->
<section class="pagecontentnews ">
    <div class="container">
      <div class="wrapper">
        <div class="col-md-12">
          <div class="row">
            <div class="casestudies-boxes">
            <?php while ( have_posts() ) : the_post();
              $custom=get_post_custom($post->ID);
              $bannerimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" case-boxes single-box" style="background:url('<?php echo $bannerimg;?>') no-repeat scroll center center / cover ;">
                      <div class="wrapper">
                        <div class="content">
                          <div class="wow zoomIn">
                            
                            <h1><?php the_title(); ?></h1>
                               <?php the_content(); ?>
                               <a class="blue-button" href="<?php echo get_permalink(); ?>">Learn more</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      		  <?php endwhile;wp_reset_postdata(); ?>  
            </div> <!-- case study boxes -->
          </div> <!-- row -->
        </div> <!-- col md 9 -->

      </div>
    </div><!--conatainer-->    
</section>
    	

</div>


<?php get_footer(); ?>


