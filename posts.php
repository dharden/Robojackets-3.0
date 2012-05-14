<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" class="post">
	    <header class="row">
	      <div class="span1 icon" style="margin: 0 -20px 0 20px;">
	        <?php getCategoryImage() ; ?>
	      </div>
	      <div class="span6">
	        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        <p><?php the_date(); echo " "; the_time(); ?> | By <?php the_author(); ?></p>
	      </div>
	    </header>
	    <?php the_content(); ?>
	    <p><i class="icon-tag"></i> <?php the_category(', '); ?></p>
	</article>
	<hr />
<?php endwhile; ?>
<?php endif; ?>