<?php get_header(); ?>

        <?php include("nav.php") ; ?>

      </header> <!-- /siteheader -->
      <!-- Carousel for featured news items -->

        <?php if ( is_front_page() ) { include("carousel.php"); } ?>

      <!-- marketing -->
      <section id="info" class="row">
        <div class="span4">
          <h2>Who are we?</h2>
          <p>The RoboJackets is a group of Georgia Tech students, faculty, and alumni that aims to enhance the understanding of the field of robotics and its applications in depth of knowledge as well as to increase of the number of students exposed to it.</p>
          <a class="btn" href="#">Find out more »</a>
        </div>
        <div class="span4">
          <h2>What do we do?</h2>
          <p>We fuck robots and chew gum... and we're all out of gum.</p>
          <a class="btn" href="#">View details »</a>
        </div>
        <div class="span4">
          <h2>How do you get involved?</h2>
          <p>Since our goals are multi-faceted and highly multidisciplinary, we are always looking for new members from every major. At present our member are comprised of ME, AE, Physics, CS, ECE, Applied Mathematics, and Management majors.</p>
          <a class="btn" href="#">Find out more »</a>
        </div>
      </section>

      <hr />

      <!-- Main content (posts, info, etc) -->
      <section id="content" class="row">

        <!-- News items -->
        <section id="posts" class="span9">

        <?php include("posts.php"); ?>

        </section> <!-- /posts -->

        <!-- Media items (photo gallery, social media, etc.) -->
        <!-- <?php get_sidebar(media); ?> -->


      <!-- Info about joining the club -->
      <?php get_sidebar(clubinfo); ?>
        
      </section> <!-- /content -->

      <hr>
<?php get_footer(); ?>
