<?php
/**
* Template Name: Fullwidth
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post();
$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$custom=get_post_custom($post->ID);
$page_title = $post->post_name;
?>


  <section class="innerbanner" style="background:url('<?php echo $featureimg ?>') no-repeat scroll center 0 /cover ;height: 250px;"> 
    <div class="container">
        <div class="row"> 
            <h2 class="bannertitle"><?php the_title(); ?></h2>

          </div>
      </div>
  </section>     


	<section class="Fullwidth-sec">
      <div class="container">
          <div class="row">
              <div class=""><?php the_content();?></div>
        </div>
  </section>
<?php endwhile; // end of the loop. ?>  

<?php
get_footer();
