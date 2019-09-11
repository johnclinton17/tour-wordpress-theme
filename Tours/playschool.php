<?php
/**
* Template Name: play-school
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post();
$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$custom=get_post_custom($post->ID);
$page_title = $post->post_name;
?>


<div class="wrap">
  <section class="innerbanner" style="background:url('<?php echo $featureimg ?>') no-repeat scroll center 0 /cover ;"> 
    <div class="container">
        <div class="row"> 
            

          </div>
      </div>
  </section>      
</div>

  <section class="hexa-sec">
      <div class="container">
          <div class="row">
              <h2 class="title"><?php the_title(); ?></h2>
              <?php the_field('playschool_content');?>
        </div>
  </section>

<section class="about-playshool" style="background:url('<?php the_field('background_image');?>') no-repeat scroll center 0 /cover "; >
  <div class="container">
    <div class="col-md-10 col-centered">
      <div class="col-md-7">
        <!-- <div class="row"> -->
            <?php the_field('content-about');?>
        <!-- </div>   -->
      </div>
      <div class="col-md-5">
        <!-- <div class="row"> -->
            <div class="image"><img src="<?php the_field('child_image');?>"></div>
        <!-- </div>  --> 
      </div>
    </div>  
  </div>
</section>


 <?php
    if( have_rows('feature_rows') ):?>
<section class="added-features">
 <div class="container"> 
  <div class="row">
    <h5 class="descp"><?php the_field('feature_text');?></h5>
    
    <h2 class="title">Multiple Intelligences</h2>
    <div class="feat-rows">
      <ul>
       <?php
          while ( have_rows('feature_rows') ) : the_row(); ?>
            <li><div class="feat-boxes"><img src="<?php the_sub_field('image');?>" alt=""/><span class="circle-text"><?php the_sub_field('text');?></span></div></li>
        <?php endwhile;?> 
      </ul>
    </div>
  </div>
 </div>   
</section>


<hr class="grey-radius">
<?php endif; ?> 


<section class="form-section">
 <div class="container"> 
  <div class="row">
    <h2 class="title">Admissions Now Open!</h2>
    <p>To learn more and to schedule a campus visit, please fill the form below:</p>
    <div class="form-wrapper">
      <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
    </div>  
  </div>
 </div>   
</section>

<?php endwhile; // end of the loop. ?>  
<?php
get_footer();
