<?php if (haveposts()) : while (haveposts()) : the_post(); ?>
	<article class="post">
	    <header class="row">
	      <div class="span1" style="margin: 0 -20px 0 20px;">
	        <img src="<?php echo THEME_IMAGES; ?>/BB_48x48.png" alt="FIRST" />
	      </div>
	      <div class="span6">
	        <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        <p><?php the_date(); ?> | By <?php the_author(); ?></p>
	      </div>
	    </header>
	    <?php the_content(); ?>
	    <p><i class="icon-tag"></i> <?php the_category(', '); ?></p>
	</article>
	<hr />
<?php endwhile; ?>