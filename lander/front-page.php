<?php
  /**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package Simone
*/
get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
 
  
<section id="call-to-action">
    <div class="indent">
        Call to Action
    </div>
</section><!-- #call-to-action -->
  
  
<section id="services">
    <div class="indent">
  Services
    </div>
</section><!-- #services -->


<section id="meet">
    <div class="indent">
  Meet
    </div>
</section><!-- #meet -->


</section><!-- #contact -->
    <div class="indent">
  Contact
    </div>
</section><!-- #contact -->

</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>