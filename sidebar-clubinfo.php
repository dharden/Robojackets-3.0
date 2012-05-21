        <section id="clubinfo" class="span3 sidebar">

          <aside id="follow" class="widget">
	          <h3>Follow Us</h3>
		      <a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php echo THEME_IMAGES; ?>/Feed_512x512.png" alt="RSS Feed" width="48" height="48" /></a>
		      <a href="https://www.facebook.com/groups/27431371825/"><img src="<?php echo THEME_IMAGES; ?>/FaceBook_512x512.png" alt="Facebook" width="48" height="48" /></a>
		      <a href="http://twitter.com/#!/RoboJackets"><img src="<?php echo THEME_IMAGES; ?>/Twitter_512x512.png" alt="Twitter" width="48" height="48" /></a>
		      <a href="http://www.youtube.com/user/RoboJackets"><img src="<?php echo THEME_IMAGES; ?>/Youtube_512x512.png" alt="YouTube" width="48" height="48" /></a>
	  	  </aside>

      		<?php if ( function_exists ( dynamic_sidebar("clubinfo") ) ) : ?>
			<?php dynamic_sidebar ("clubinfo"); ?>
			<?php endif; ?>

        </section> <!-- /clubinfo -->
