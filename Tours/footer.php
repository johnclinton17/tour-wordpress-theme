<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
			</div><!-- .row-->
		</div><!-- .container-fluid -->
	</div><!-- #content -->
		<footer id="site_footer" class="site_footer">
    	<div class="container">
        	<div class="row">
                <div class="col-xs-12 footer_bottom">
                    <div class="col-md-4 col-sm-4 col-xs-4 address-widget">
                        <?php dynamic_sidebar( 'address' ); ?>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-4 footer-menu">
                        <?php wp_nav_menu( array('menu' => 'Main Menu') ); ?>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-4 footer-menu1">
                        <?php wp_nav_menu( array('menu' => 'footer') ); ?>
                    </div>
                    <div class="col-md-2 col-sm-12 social-footer">
                        <div class="row">
                            <ul>
                                <li class="facabook"><a href="<?php echo get_theme_mod( 'facebook' ); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="twitter"><a href="<?php echo get_theme_mod( 'twitter' ); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="linkedin"><a href="<?php echo get_theme_mod( 'linkedin' ); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li class="instagram"><a href="<?php echo get_theme_mod( 'instagram' ); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><li class="instagram"><a href="<?php echo get_theme_mod( 'youtube' ); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="copyright-text"><?php echo get_theme_mod( 'copyright' ); ?></div>
                </div>
            </div>
        </div>
    </footer>


<?php wp_footer(); ?>
<script>
	new WOW().init();
</script>

<script type="text/javascript">


</script>

</body>
</html>
