      <section id="carousel" class="carousel slide" style="border: 1px solid #ccc;">
        <div class="carousel-inner">

		<?php $featuredID = get_cat_ID( "Featured" );
			$carousel_query = new WP_Query('category_name=Featured'); ?>
		<?php $count = 1; ?>
		<?php if ( $carousel_query-> have_posts()) : while ($carousel_query-> have_posts()) : $carousel_query-> the_post(); ?>
		  <div class="item <?php if ($count == 1) { echo 'active'; }l ?>">
		    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); } ?>
    		<div class="carousel-caption">
		      <h4><?php the_title(); ?></h4>
		      <p><?php $key="blurb"; echo get_post_meta($post->ID, $key, true); ?> <a href="<?php the_permalink(); ?>">Read more...</a></p>
	    	</div>
		  </div>
		<?php $count++ ; ?>
		<?php endwhile; ?>
		<?php endif; ?>
        </div>
	    <a class="left carousel-control" href="#carousel" data-slide="prev">&lsaquo;</a>
	    <a class="right carousel-control" href="#carousel" data-slide="next">&rsaquo;</a>
	  </section> <!-- /carousel -->