<?php
/**
* Template Name: front-page
 */

get_header(); ?>

<!--page contentrs starts here-->
  <main class="page_template">
      <!-- banner section -->
      <section class="banner_section">
        <div class="flexslider">
              <ul class="slides">
                  <?php
                  $args = array( 'posts_per_page' => 5,'post_type' =>'home_banner','post_status'=> 'publish','orderby' => 'date','order' => 'ASC');
                  $bannerposts = get_posts( $args );
                  foreach ( $bannerposts as $bpost ) : setup_postdata( $bpost );
                  $bannerimg = wp_get_attachment_url( get_post_thumbnail_id($bpost->ID) );
                  $custom=get_post_custom($bpost->ID);?>
                      <li>
                        <div class="bannerfill" style="background:url('<?php echo $bannerimg;?>') no-repeat scroll center center / cover ;">
                          <div class="container parent">
                            <div class="row">
                                <div class="content" data-center="bottom:0px;" data-top-bottom="bottom:250px;" data-anchor-target=".bannerfill">
                                    <?php the_content(); ?>   
                                </div>
                              </div>
                          </div>
                        </div>
                      </li>     
              
                  <?php endforeach; 
                  wp_reset_postdata();?>
              </ul>
              <div class="search-banner">
                  <!-- <input type="text" name="destination" placeholder="Choose Your Destination:  Eg. Australia, Bali">
                  <a href="javascript:void(0)">Search</a> -->
                  <!-- <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                    <input type="hidden" name="post_type" value="destinations" />
                    <input type="text" value="" name="s"  placeholder="Choose Your Destination:  Eg. Australia, Bali"/>
                    <input type="submit" value="Search" />
                   
                  </form> -->
                   <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
              </div>
              
          </div>
        </section>
        <!-- banner section -->
        <!-- yellow band row -->
        <section class="yellow-band">
          <div class="container">
            <div class="col-md-8 col-centered yellow-content">
              <div class="row">
                <?php the_field('yellow_section_content');?>
              </div>
            </div>
          </div>
        </section>
        <!-- yellow band row -->
        <!-- destination listing -->
        <section class="destination-listing">
          <div class="container">
            <div class="title-head">
              <?php the_field('destination_title');?>
            </div>
            <div class="destination boxes">
              <?php if( have_rows('destination_row') ): while ( have_rows('destination_row') ) : the_row(); ?>
                  <div class="col-md-4 col-sm-6 col-xs-6 destination-boxes">
                    <?php $sub_value = get_sub_field('select_destination');
                      $page_data = get_page($sub_value); 
                      $content = $page_data->post_content;
                     ?>
                    <div class="image-box">
                      <div class="wrapper">
                        <figure class="effect-bubba">
                          <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($sub_value)) ?>"/>
                          <figcaption>
                            <div class="align-bottom">
                              <h2><?php echo get_the_title($sub_value);?></h2>
                              <p><?php echo $content ?></p>
                            </div>
                          </figcaption>     
                        </figure>
                        <div class="image-hidden-box">
                            <h2><?php echo get_the_title($sub_value);?></h2>
                            <p><?php echo $content ?></p>
                            <a href="<?php echo get_post_permalink( $sub_value ); ?>">Get Quote</a>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php endwhile;endif;?>
              <div class="page-button-row"> 
                <a class="underline-button" href="#">View more destinations</a>
              </div>
            </div>
          </div>
        </section>
        <!-- destination listing -->
        <!-- package slider -->
        <section class="slider-packages">
          <div class="container">
              <div class="package-slider">
                 <?php if( have_rows('package_row') ):while ( have_rows('package_row') ) : the_row(); ?>
                  <div class="package-container" style="background:url('<?php the_sub_field('image');?>'); ">
                    <a class="img-container" href="<?php the_sub_field('link');?>">
                        <div class="content-box">
                          <h1><?php the_sub_field('first_line_text');?></h1>
                          <h2><?php the_sub_field('second_line_text');?></h2>
                          <p><?php the_sub_field('starting_from');?></p>
                        </div>
                    </a>
                  </div>
                <?php endwhile;endif;?>
              </div><!-- package slider -->
          </div>
        </section>
        <!-- package slider -->
        <!-- travel plans section -->
        <section class="travel-plans">
          <div class="container">
            <div class="title-head">
              <h1><?php the_field('travel_plan_title');?></h1>
              <p><?php the_field('travel_plan_content');?></p>
            </div>
            <div class="destination-list">
              <?php if( have_rows('domestic_package_row') ): while ( have_rows('domestic_package_row') ) : the_row(); ?>
                <div class="col-md-2 col-sm-4 col-xs-6 destination-box">
                   <?php 
                      $travel_value = get_sub_field('domestic_destination'); 
                      $night_value = get_field('night', $travel_value);
                      $days_value = get_field('days', $travel_value);
                      $price_value = get_field('price', $travel_value);
                      ?>
                  <a href="<?php echo get_post_permalink( $travel_value ); ?>">
                    <div class="img-box">
                      <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($travel_value)) ?>">
                    </div>
                    <div class="image-content">
                      <div class="title"><?php echo get_the_title($travel_value);?></div>
                      <div class="days"><?php echo $days_value ?>D : <?php echo $night_value ?>N</div>
                      <div class="price"><?php echo $price_value ?> <span>Onwards</span></div>
                    </div>
                  </a>
                </div>
              <?php endwhile;endif;?>
            </div>
            <div class="page-button-row"> 
              <a class="underline-button" href="#">View all domestic destinations</a>
              <!-- <a class="underline-button" href="<?php echo esc_url( home_url( '/' ) ); ?>destinations_category/domestic/">View all domestic destinations</a> -->
            </div>

            <!-- internation destination -->
            <span class="line">
                <h2><span>Our overseas packages</span></h2>
            </span>

            <div class="destination-list internation-list">
              <?php if( have_rows('international_package_row') ): while ( have_rows('international_package_row') ) : the_row(); ?>
                <div class="col-md-2 col-sm-4 col-xs-6 destination-box">
                   <?php 
                      $inttravel_value = get_sub_field('international_destination'); 
                      $intnight_value = get_field('night', $inttravel_value);
                      $intdays_value = get_field('days', $inttravel_value);
                      $intprice_value = get_field('price', $inttravel_value);
                      ?>
                  <a href="<?php echo get_post_permalink( $inttravel_value ); ?>">
                    <div class="img-box">
                      <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($inttravel_value)) ?>">
                    </div>
                    <div class="image-content">
                      <div class="title"><?php echo get_the_title($inttravel_value);?></div>
                      <div class="days"><?php echo $intdays_value ?>D : <?php echo $intnight_value ?>N</div>
                      <div class="price"><?php echo $intprice_value ?> <span>Onwards</span></div>
                    </div>
                  </a>
                </div>
              <?php endwhile;endif;?>
            </div>

            <div class="page-button-row"> 
              <a class="underline-button" href="#">View all international destinations</a>
              <!-- <a class="underline-button" href="<?php echo esc_url( home_url( '/' ) ); ?>destinations_category/international/">View all international destinations</a> -->
            </div>
            
          </div>
        </section>
        <!-- travel plans section -->
        <!-- blog section -->
        <section class="blog-post-section">
          <div class="container">
            <div class="title-head">
              <h1>Latest from our blog</h1>
            </div>
            <div class="blogpost-row">
               <?php
                // WP_Query arguments
                $args = array (
                  'post_type' => 'post',
                  'order'     => 'DSC',
                  'posts_per_page'=> 4
                );
                // The Query
                $query = new WP_Query( $args );if ( $query->have_posts() ) {
                while ( $query->have_posts() ) { $query->the_post(); $custom=get_post_custom($post->ID); $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

                    <div class="col-md-4 col-sm-4 col-xs-6 blogpost-box">
                        <a href="<?php echo get_permalink(); ?>">
                          <div class="post-image">
                            <img src="<?php echo $img ?>">  
                          </div>
                          <div class="title"><?php echo get_the_title(); ?></div>
                          <div class="date"><?php echo get_the_date('j F Y'); ?></div>
                        </a>
                      </div>

                <?php }} else {echo "<h1>boom no content in news page </h1>"; } wp_reset_postdata(); ?>
            </div>
            <div class="page-button-row"> 
              <a class="underline-button" href="#">Read more</a>
            </div>
          </div>
        </section>
        <!-- blog section -->
        <!-- customer testimonials -->
        <section class="customer-testimonials">
          <div class="container">
            <div class="title-head">
              <img src="<?php echo get_template_directory_uri(); ?>/images/testimonials-icon.png">
              <h1>What our customers say</h1>
            </div>
            <div class="customer-slider">
               <?php
                // WP_Query arguments
                $args = array (
                  'post_type' => 'testimonials',
                  'order'     => 'ASC',
                  'posts_per_page'=> 6
                );
                // The Query
                $query = new WP_Query( $args );if ( $query->have_posts() ) {
                while ( $query->have_posts() ) { $query->the_post(); $custom=get_post_custom($post->ID); $testimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

              <div class="slide-container">
                <div class="image-left">
                  <img src="<?php echo $testimg ?>">
                </div>
                <div class="content-right">
                  <?php echo wp_trim_words( get_the_content(), 25 ,'...' ); ?>
                  <?php the_field('author_name');?>
                </div>
              </div>
               <?php }} else {echo "<h1>boom no content in news page </h1>"; } wp_reset_postdata(); ?>
            </div>
            <div class="page-button-row"> 
              <a class="underline-button" href="#">Read more testimonials</a>
              <!-- <a class="underline-button" href="<?php echo esc_url( home_url( '/' ) ); ?>testimonials/">Read more testimonials</a> -->
            </div>
          </div>
        </section>
        <!-- customer testimonials -->
        <!-- form section -->
        <section class="form-section">
          <div class="container">
            <div class="title-head">
              <h1>Need help in your travel planning?</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="form-row">
              <div class="col-md-8 col-centered">
                <?php echo do_shortcode('[contact-form-7 id="5" title="homepage form"]'); ?>
              </div>
            </div>
          </div>
        </section>
        <!-- form section -->
        <!-- client images -->
        <section class="client-images">
          <div class="container">
            <div class="col-md-10 col-sm-12 col-centered">
              <ul>
                <?php if( have_rows('logo_row') ):  while ( have_rows('logo_row') ) : the_row(); ?>
                  <li><img src="<?php the_sub_field('logo');?>"></li>
                <?php endwhile;endif?> 
              </ul>
            </div>
          </div>
        </section>
        <!-- client images -->



<?php
get_footer();?>
