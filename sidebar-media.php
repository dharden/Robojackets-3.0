		<aside id="media" class="span2">
	      <img src="<?php echo THEME_IMAGES; ?>/collage.jpg" alt="Photo Gallery" />
	      <strong><p>Check out our photo gallery!</p></strong>
	      <p>See photos of our robots, events, and competitions.</p>
	      <img src="<?php echo THEME_IMAGES; ?>/Feed_512x512.png" alt="RSS Feed" width="48" height="48" />
	      <img src="<?php echo THEME_IMAGES; ?>/FaceBook_512x512.png" alt="RSS Feed" width="48" height="48" />
	      <img src="<?php echo THEME_IMAGES; ?>/Twitter_512x512.png" alt="RSS Feed" width="48" height="48" />
	      <img src="<?php echo THEME_IMAGES; ?>/Youtube_512x512.png" alt="RSS Feed" width="48" height="48" />

      		<?php if ( function_exists ( dynamic_sidebar("media") ) ) : dynamic_sidebar ("media");
	      		endif;
			?>
        </aside>
