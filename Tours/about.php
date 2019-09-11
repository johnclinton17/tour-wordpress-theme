<?php
/**
* Template Name: About-page
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
<section class="what_we_do">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <h2><?php the_field('whatwedo_title'); ?> </h2>
        <h3><?php the_field('whatwedo_subtitle'); ?> </h3>
        <p><?php the_content(); ?> </p>
      </div>
      <div class="col-sm-5">
        <div class=" our_mission">
          <h3><?php the_field('mission_title'); ?> </h3>
          <p><?php the_field('mission_content'); ?> </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="why_decide">
  <div class="container">
    <h1><?php the_field('whydecide_title')?></h1>
     <div class="row">
      <?php if( have_rows('whydecide') ):
      while ( have_rows('whydecide') ) : the_row(); ?>
        <div class="col-sm-4">
          <img src="<?php the_sub_field('whydecide_icon')?>">
          <h2><?php the_sub_field('whydecide_title')?></h2>
          <p><?php the_sub_field('whydecide_desc')?></p>
        </div>
      <?php endwhile; endif; ?>
      </div>
    </div>
  </section>

<section class="leadership">
  <div class="container">
    <h1><?php the_field('leadership_title')?></h1>
    <h2><?php the_field('leadership_text')?></h2>
     <div class="row">
      <?php if( have_rows('leadership') ):
      while ( have_rows('leadership') ) : the_row(); ?>
        <div class="col-sm-6">
          <div class="member_pic">
            <img src="<?php the_sub_field('member_pic')?>">
          </div>
          <div class="member_content">
            <h3><?php the_sub_field('member_name')?></h3>
            <h4><?php the_sub_field('member_desg')?></h4>
            <p><?php the_sub_field('member_desc')?></p>
          </div>
        </div>
      <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
<!-- customer testimonials -->
        <section class="customer-testimonials">
          <div class="container">
            <div class="title-head">
              <img src="<?php echo get_template_directory_uri(); ?>/images/testimonials-icon.png">
              <h1>What our customers say</h1>
            </div>
            <div class="customer-slider">
                <?php if( have_rows('testimonial') ):
                while ( have_rows('testimonial') ) : the_row(); ?>

              <div class="slide-container">
                <div class="image-left">
                  <img src="<?php the_sub_field('author_pic');?>">
                </div>
                <div class="content-right">
                  <p><?php the_sub_field('author_content');?></p>
                  <h6><strong><?php the_sub_field('author_name');?></strong></h6>
                </div>
              </div>
               <?php endwhile; endif; ?>
            </div>
            <div class="page-button-row"> 
              <a class="underline-button" href="#">Read more testimonials</a>
              <!-- <a class="underline-button" href="<?php echo esc_url( home_url( '/' ) ); ?>testimonials/">Read more testimonials</a> -->
            </div>
          </div>
        </section>
        <!-- customer testimonials -->


<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>


