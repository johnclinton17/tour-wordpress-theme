<?php
/**
* Template Name: contact
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post();
$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$custom=get_post_custom($post->ID);
$page_title = $post->post_name;
?>

 <section class="innerbanner" style="background:url('<?php echo $featureimg ?>') no-repeat scroll center center /cover ;"> 
    <div class="container">
        <div class="row"> 
           <h1><?php the_title(); ?></h1>
        </div>
      </div>
  </section>      

<section class="address-container ">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-sm-6 address-box">
				 <?php the_field('contact_address');?>
				<div class="fax"> <?php the_field('fax');?></div>
				<div class="contact-phone"><a href="callto: <?php the_field('phone');?>"> <?php the_field('phone');?></a></div>
			</div>

			<div class="col-md-3 col-sm-6 mail-box">
				<?php if( have_rows('mail_row') ):  while ( have_rows('mail_row') ) : the_row(); ?>
				<div class="mail-row">
					<h4><?php the_sub_field('mail_id_for');?></h4>
					<a href="mailto:<?php the_sub_field('mail_id');?>"><?php the_sub_field('mail_id');?></a>
				</div>
			<?php  endwhile; endif; ?>
			</div>

			<div class="col-md-5 col-sm-12 map-box">
				<?php the_field('form_embed');?>
			</div>
	

		</div> 
	</div>
</section>
<section class="yellow-band contact-page">
      <div class="container">
      	<div class="row">
	        <div class="col-md-8 col-sm-10 col-centered yellow-content">
	          <div class="row">
	              <div class="yellow_formtxt">
	                <?php the_field('content'); ?>
	              </div>
	                <?php echo do_shortcode( '[contact-form-7 id="238" title="Honeymoon Form"]'); ?>
	          </div>
	        </div>
	    </div>
      </div>
</section>


<?php endwhile; // end of the loop. ?>	
<?php
get_footer();
