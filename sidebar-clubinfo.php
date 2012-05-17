        <section id="clubinfo" class="span3 sidebar">

         	<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About' ) ) ); ?>"><img src="<?php echo THEME_IMAGES; ?>/who.png" alt="who?" width="220" /></a>
        	<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Join Us' ) ) ); ?>"><img src="<?php echo THEME_IMAGES; ?>/how.png" alt="how?" width="202" /></a>

      		<?php if ( function_exists ( dynamic_sidebar("clubinfo") ) ) : ?>
			<?php dynamic_sidebar ("clubinfo"); ?>
			<?php endif; ?>

        </section> <!-- /clubinfo -->
