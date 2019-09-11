<?php
/*
 * The template for displaying all single posts and attachments
 */
$deserve_options = get_option('deserve_theme_options');

get_header();
?>


<div class="margin-top">
<?php 
$banner_image = get_field('banner_image');
 if ($banner_image) : ?> 
<section class="bannersolid" style="background:url('<?php  echo $banner_image; ?>') no-repeat scroll center center /cover ;">
 <?php  else : ?> 
 <section class="bannersolid" style="background:url('<?php echo get_template_directory_uri(); ?>/images/top-band-default.jpg') no-repeat scroll center center /cover ;">
<?php endif; ?> 

	  <div class="container">
	      <div class="row"> 
					<div class="banner_content">
	             <div class="col-sm-6 col-xs-12 clmleft">
								<h2><?php echo get_the_title($sub_value);?> Tour Package</h2>
								<span><?php the_field('night'); ?> Nights / <?php the_field('days'); ?> Days</span>
							 </div>
							 <div class="col-sm-6 col-xs-12 text-right clmright">
								<h3>Starting from <strong><?php the_field('price'); ?></strong></h3>
								<p><?php the_field('limit'); ?></p>
							</div>
					</div>
	      </div>  
	    </div>
</section>
<section class="about_location">
    <div class="container">
		<div class="row"> 
			<div class="col-sm-12">
	       <div class="whitebox"><p><?php the_field('about_location'); ?></p></div>
			</div>
		</div>
	</div>
</section>
<section class="detailed_section">
		<div class="container">
				<div class="row"> 
<!-- Left Column start -->
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 Leftcolumn">
<div class="packagesec">
<ul class="tabs">
  <?php if( have_rows('packages') ): $z=1; while ( have_rows('packages') ) : the_row(); ?>  
      <li rel="tab<?php echo $z ?>" class="<?php if($z ==1) echo 'active';?>"><?php the_sub_field('tab_name'); ?></li>
  <?php $z++; endwhile; else: ?>
  <?php endif; ?>
  <!-- <li class="active" rel="tab2">Package 2</li>
  <li rel="tab3">Package 3</li>
  <li rel="tab4">Package 4</li> -->
  <li rel="tab5info"><?php the_field('information'); ?></li>
</ul>

<div class="tab_container">
  <?php if( have_rows('packages') ): $z=1; while ( have_rows('packages') ) : the_row(); ?>
  <h3 class="tab_drawer_heading <?php if($z ==1) echo 'd_active';?>" rel="tab<?php echo $z ?>"><?php the_sub_field('tab_name'); ?></h3>
  <div id="tab<?php echo $z ?>" class="tab_content">
<!-- accordian start -->
<?php if( have_rows('days') ): $i=1; while ( have_rows('days') ) : the_row(); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="link" data-toggle="collapse" data-parent="#accordion" href="#collapseDay<?php echo $z.$i ?>"><span class="glyphicon glyphicon-menu-down"></span><b><?php the_sub_field('day_number'); ?> </b> <i></i> <u><?php the_sub_field('day_title'); ?></u> </a>
                </h4>
            </div>
            <div id="collapseDay<?php echo $z.$i ?>" class="panel-collapse collapse <?php if($z.$i ==11) echo 'in';?>" >
                <div class="panel-body">
                    <div class="panelContent">
                        <div class="facilityIcons"> 
                            <?php if(have_rows('facility')): while ( have_rows('facility')) : the_row(); ?>
                            <div class="iconclm"><img src="<?php the_sub_field('facility_icon'); ?>" alt=""> <i> <?php the_sub_field('facility_name'); ?></i></div>
                            <?php endwhile; else: ?>
                            <?php endif; ?>                           
                        </div>
                        <div class="txtsec">                            
                            <?php the_sub_field('day_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $i++; endwhile; else: ?>
<?php endif; ?>
<!-- accordian end -->
</div>
<?php $z++; endwhile; else: ?>
<?php endif; ?>  
<!-- #tab1 -->

  <!-- <h3 class="tab_drawer_heading" rel="tab2">Tab 2</h3>
  <div id="tab2" class="tab_content">
  <h2>Tab 2 content</h2>
    <p>Nunc dui velit, scelerisque eu placerat volutpat, dapibus eu nisi. Vivamus eleifend vestibulum odio non vulputate.</p>
  </div> -->
  <!-- #tab2 -->
  <!-- <h3 class="tab_drawer_heading" rel="tab3">Tab 3</h3>
  <div id="tab3" class="tab_content">
  <h2>Tab 3 content</h2>
    <p>Nulla eleifend felis vitae velit tristique imperdiet. Etiam nec imperdiet elit. Pellentesque sem lorem, scelerisque sed facilisis sed, vestibulum sit amet eros.</p>
  </div> -->
  <!-- #tab3 -->
  <!-- <h3 class="tab_drawer_heading" rel="tab4">Tab 4</h3>
  <div id="tab4" class="tab_content">
  <h2>Tab 4 content</h2>
    <p>Integer ultrices lacus sit amet lorem viverra consequat. Vivamus lacinia interdum sapien non faucibus. Maecenas bibendum, lectus at ultrices viverra, elit magna egestas magna, a adipiscing mauris justo nec eros.</p>
  </div> -->
  <!-- #tab4 -->
  <h3 class="tab_drawer_heading" rel="tab5info"><?php the_field('information'); ?> </h3>
  <div id="tab5info" class="tab_content">
      <div class="information_txt"><?php the_field('information_content'); ?> </div>
  </div>  
  <!-- #tab5 --> 
</div>
</div>
<!-- .tab_container -->

<!-- FAQs Start -->
<div class="faqsection">
    <div class="title-sec">
        <h1>Frequently Asked Questions</h1>
    </div>
    <div class="faq-sec">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php if( have_rows('faq_rows') ): $i=1; while ( have_rows('faq_rows') ) : the_row(); ?>
                <div class="panel panel-default">
                    <div class="panel-heading" >
                      <h4 class="panel-title">
                        <a data-toggle="collapse" class="<?php if ($i == 1) {echo "";}else{echo "collapsed";}?>"  data-parent="#accordion" href="#collapse<?php echo $i;?>" aria-expanded="true" aria-controls="collapseOne">
                          <?php the_sub_field('faq_title');?>
                        </a>
                      </h4>
                    </div>
                    <div id="collapse<?php echo $i;?>" class="panel-collapse  <?php if ($i == 1) {echo "collapse in";}else {echo "collapse";}?>" role="tabpanel" >
                        <div class="panel-body"><?php the_sub_field('faq_answer');?> </div>
                    </div>
                </div>
            <?php $i++; endwhile; endif; ?>
            </div>
      </div>
</div>
<!-- FAQs End -->

</div>
<!-- Left column End -->						



                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 bookclm">
                         <div class="booking_box">
                          <h3>Booking /  Request info</h3>
                          <?php echo do_shortcode( '[contact-form-7 id="139" title="Booking Info Form"]'); ?>
                         </div>
						</div>	
				</div>
		</div>
</section>

</div>

<script>
    jQuery(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        jQuery(".collapse.in").each(function(){
        	jQuery(this).siblings(".panel-heading").find(".glyphicon").addClass("rotate");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        jQuery(".collapse").on('show.bs.collapse', function(){
        	jQuery(this).parent().find(".glyphicon").addClass("rotate");
        }).on('hide.bs.collapse', function(){
        	jQuery(this).parent().find(".glyphicon").removeClass("rotate");
        });
    });
</script>
<!-- <script src="<?php echo esc_url( get_template_directory_uri() );?>/js/main.js"></script> -->
<script type="text/javascript">
jQuery(document).ready(function(){
  var scrollTop = 0;
  jQuery(window).scroll(function(){
    scrollTop = jQuery(window).scrollTop();
    if (scrollTop >= 577) {
      jQuery('.booking_box').addClass('scrolledbx');
    } else if (scrollTop < 577) {
      jQuery('.booking_box').removeClass('scrolledbx');
    }     
  });   
});
</script>

<script>
 // tabbed content
    jQuery(".tab_content").hide();
    jQuery(".tab_content:first").show();

  /* if in tab mode */
    jQuery("ul.tabs li").click(function() {
        
      jQuery(".tab_content").hide();
      var activeTab = jQuery(this).attr("rel"); 
      jQuery("#"+activeTab).fadeIn();        
        
      jQuery("ul.tabs li").removeClass("active");
      jQuery(this).addClass("active");

      jQuery(".tab_drawer_heading").removeClass("d_active");
      jQuery(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
      
    });
    /* if in drawer mode */
    jQuery(".tab_drawer_heading").click(function() {
      
      jQuery(".tab_content").hide();
      var d_activeTab = jQuery(this).attr("rel"); 
      jQuery("#"+d_activeTab).fadeIn();
      
      jQuery(".tab_drawer_heading").removeClass("d_active");
      jQuery(this).addClass("d_active");
      
      jQuery("ul.tabs li").removeClass("active");
      jQuery("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
        
    /* Extra class "tab_last" 
       to add border to right side
       of last tab */
    jQuery('ul.tabs li').last().addClass("tab_last");
</script>

<?php get_footer(); ?>