        <section id="clubinfo" class="span3 sidebar">

	  	  <aside ID="photos" class="widget">
		      <h3>Photo Gallery</h3>
	    	  <a href="<?php echo HOME_URI; ?>/gallery"><img src="<?php echo THEME_IMAGES; ?>/collage.jpg" alt="Photo Gallery" width="150" /></a>
	    	  <p>Check out photos of our robots, events, and more.</p>
    	  </aside>
      		<?php if ( function_exists ( dynamic_sidebar("clubinfo") ) ) : ?>
			<?php dynamic_sidebar ("clubinfo"); ?>
			<?php endif; ?>

        </section> <!-- /clubinfo -->
