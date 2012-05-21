<?php get_header(); ?>

      <?php include("nav.php") ; ?>

      </header> <!-- /siteheader -->

      <!-- Main content (posts, info, etc) -->
      <section id="content" class="row">

        <!-- News items -->
        <section id="posts" class="span9">

        <?php include("pages.php"); ?>

        </section> <!-- /posts -->

        <!-- Media items (photo gallery, social media, etc.) -->
        <?php get_sidebar(clubinfo); ?>
        
      </section> <!-- /content -->

      <hr>
<?php get_footer(); ?>
