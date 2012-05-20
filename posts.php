<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" class="post">
	    <header class="row">
	      <div class="span1 icon" style="margin: 0 -20px 0 20px;">
	        <?php getCategoryImage() ; ?>
	      </div>
	      <div class="span7">
	        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        <p><?php the_date(); echo " "; the_time(); ?> | By <?php the_author(); edit_post_link('edit', ' | ', ''); ?></p>
	      </div>
	    </header>
	    <?php the_content(); ?>
	    <?php wp_link_pages(array('before' => '<div id="page-links">', 'after' => '</div>')); ?>
	    <p><i class="icon-tag"></i> <?php the_category(', '); ?></p>
	</article>
	<hr />
<?php endwhile; ?>
<?php endif; ?>
<?php posts_nav_link(); ?>
<hr />