<?php
/**
 * The Template for displaying all single posts.
 *
 * @package fouri
 */

get_header(); ?>
<?php 
	if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 
		$custom=get_post_custom($post->ID);
		$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>


	<div class="container">
		<div class="row">
			<div class="singlewrapper">
				<div class="col-sm-12 col-md-12">
					<div class="cat-row">
						<h2><?php $term_list = wp_get_post_terms($post->ID, 'casestudies_category', array("fields" => "all")); echo $term_list[0]->name; ?></h2>
						<h6>Industry   	<span>:    <?php the_field('industry');?></span></h6>
					</div>
				</div>
				<div class="col-md-12 clearpad">
					<div class="banner-casetudies" style="background:url('<?php the_field('banner_image');?>') no-repeat scroll center 0 /cover  ;height: 415px;"></div>
				</div>
				<div class="content-casestudies">
					<div class="col-md-6">
						<div class="blue-wrapper-case">
							<div class="wrapper">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						
							<div class="content-case"><?php the_field('case_studies_content');?></div>
						
					</div>
				</div>
			</div> <!-- wrapper -->
		</div> <!-- row -->
	</div> <!-- container -->


<?php 
endwhile;endif;?>
<?php
get_footer(); ?>
