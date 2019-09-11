<?php
/*
 * Archive Template File.
 */
$deserve_options = get_option('deserve_theme_options');

get_header();
?>

<!-- Portfolio -->

<div class="container-fluid margin-top">
<!--banner section ends here-->
<!--ENQUIRY data-toggle="modal" data-target="#myModal"-->
     <a href="<?php bloginfo('url');?>/index.php/contact-us/">
     <div class="float-enquiry" >
      <span class="float-style">Send An Enquiry</span>
     </div>
     </a>
     <div class="facebook-float"><a href="https://www.facebook.com/Krykard/" target="_blank" class="fa fa-facebook"></a></div>
     <div class="twitter-float"><a href="https://twitter.com/AtandraEnergy" target="_blank" class="fa fa-twitter"></a></div>
     <div class="linkedin-float"><a href="https://www.linkedin.com/in/atandra-krykard/" target="_blank" class="fa fa-linkedin"></a></div>
     <div class="youtube-float"><a href="https://www.youtube.com/watch?v=NqukoY-nIo4 " target="_blank" class="fa fa-youtube"></a></div>
     <div class="chat-float"><a href="javascript:void(0);" onclick="olark('api.box.expand')" class="fa fa-commenting-o"></a></div>   
<!--ENQUIRY-->
<section class="bannersolid" style="background:url('<?php echo get_template_directory_uri()?>/images/atandra/Events-Banner.jpg') no-repeat scroll center center /cover ;"> 
  <div class="container">
      <div class="row"> 
        <div class="awards-banner-row">  
          <div class="col-xs-12">
            <h4 class="white">
              Events
            </h4>  
          </div>       
        </div>  
      </div>
    </div>
</section>


<div class="col-md-12">



<!--section product title -->
<section class="pagecontent pad-50">
    <div class="container">
    	 

      <div class="wrapper">
      <?php while ( have_posts() ) : the_post(); ?>

            <div class="col-md-12 pad-15">
              <a href="<?php echo get_permalink(); ?>"> 
                <div class="col-md-4"><?php the_post_thumbnail(medium); ?>  </div>
                <div class="col-md-8 post-wrapper-center">
                    <span class="post-excerpt"><?php the_excerpt(); ?></span>
                    <a class="post-button" href="<?php echo get_permalink(); ?>" >View Gallery</a>
                </div>
              </a>
            </div>  
        <?php
//          }
//          } else {
//            // no posts found
//            echo "<h1>boom no content events page </h1>";
//          }
//          // Restore original Post Data
//          wp_reset_postdata();
//          ?>   

		<?php endwhile;  ?>   
             <div class="gallery-pagination blog-pagination">
                <ul>
				<li class="link_pagination" >
					<?php deserve_pagination(); ?>
				</li>

                </ul>
            </div>
		
      </div><!--wrapper-->
     <!--  <div style="clear:both">
         <?php echo deserve_pagination();?>   
      </div>  -->
    </div><!--conatainer-->    
</section>
    	
	</div>
</div>

<script>
  new WOW().init();
</script>

<script type="text/javascript">
 jQuery(window).on("scroll", function(){
 if(jQuery(window).scrollTop() > 570)
 {
 
  jQuery(".page.menu.area").addClass('fixtop');

 }
 else
 {
  jQuery(".page.menu.area").removeClass('fixtop');
  
}
});
  
</script>

<!-- <script src="<?php echo esc_url( get_template_directory_uri() );?>/js/main.js"></script> -->
<!-- service end -->
<?php get_footer(); ?>


