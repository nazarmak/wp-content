<?php
GLOBAL $swift_options;
GLOBAL $swift_design_options;
?>
<div id="copyright-container">
    <div id="copyright" class="hybrid clearfix">
        <div class="div-content">
            <div class="alignleft">
                <?php
                wp_nav_menu(array('container' => '',
                        'menu_class' => '',
                        'menu_id' => 'footer-links',
                        'fallback_cb' => '',
                        'theme_location' => 'footer-links')
                );
                ?>
            </div>
				<!--<span class="alignright"><?php _e('Theme Swift by', 'swift') ?> <a
                        href="http://swiftthemes.com/swiftlers-area/aff/go/<?php echo $swift_options['affiliate_id']; ?>"
                        rel="nofollow"><strong>SwiftThemes.Com</strong> </a> </span>-->

            <div class="clear"></div>
				<span class="alignleft"><?php echo __('Copyright &copy;', 'swift') . '&nbsp;' . date('Y'); ?>
                    <a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?> </a>
					<?php echo " Designed and Developed by : Mamta Swami and Deepika Middha "?>
				</span> <span class="alignright"><?php _e('powered by', 'swift') ?>
                <a href="http://cognizsoft.com/" rel="nofollow">Cogniz Soft</a></span>

            <div class="clear"></div>
        </div>
    </div>
    <!-- /copyright -->
</div>
<!-- /copyright-container -->
