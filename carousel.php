<?php $featuredID = get_cat_ID( "Featured" );
	$carousel_query = new WP_Query('category_name=Featured'); ?>
<?php if ( $carousel_query-> have_posts()) : while ($carousel_query-> have_posts()) : $carousel_query-> the_post(); ?>
<?php $count = 1; ?>
  <div class="item <?php if ($count == 1) { echo 'active'; }l ?>">
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); } ?>
    <div class="carousel-caption">
      <h4><?php the_title(); ?></h4>
      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>
  </div>
<?php $count++ ; ?>
<?php endwhile; ?>
<?php endif; ?>