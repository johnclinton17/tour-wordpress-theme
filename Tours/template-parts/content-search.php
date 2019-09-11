<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-md-4 col-sm-6 col-xs-6 destination-boxes">
		<a href="<?php the_permalink(); ?>">
	        <div class="image-box">
	          <div class="wrapper">
	            <figure class="effect-bubba">
	              <?php the_post_thumbnail('full' ); ?>
	              <figcaption>
	                <div class="align-bottom">
	                  <h2><?php the_title();?></h2>
	                  <p><?php the_excerpt();?></p>
	                </div>
	              </figcaption>     
	            </figure>
	          </div>
	        </div>

      </div>
</article><!-- #post-## -->

