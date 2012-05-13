        <section id="clubinfo" class="span3">
        	
         	<img src="<?php echo THEME_IMAGES; ?>/who.png" alt="who?" width="220" />
        	<img src="<?php echo THEME_IMAGES; ?>/how.png" alt="how?" width="202" />

      		<?php if ( function_exists ( dynamic_sidebar("clubinfo") ) ) : ?>
			<?php dynamic_sidebar ("clubinfo"); ?>
			<?php endif; ?>

        </section> <!-- /clubinfo -->
