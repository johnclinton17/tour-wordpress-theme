<?php
/**
* Template Name: sitemap
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post();
$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$custom=get_post_custom($post->ID);
$page_title = $post->post_name;
?>
<section class="innerbanner" style="background:#3ab54a;"> 
	<div class="container">
    	<div class="row"> 
        	<div class="col-sm-12 col-sm-12 innerbannertext"> <h3><?php the_title(); ?></h3> </div>

        </div>
    </div>
</section>

<section class="form white">
	<div class="container">
		<div class="row">

			<?php
			wp_nav_menu( array(
			'theme_location' => 'primary'
			) );
			?>

		</div> 
	</div>
</section>


<?php endwhile; // end of the loop. ?>	
<?php
get_footer();
