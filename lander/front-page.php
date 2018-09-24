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
	<div class="indent clear">
			<?php 
			$query = new WP_Query( 'pagename=book-an-appointment' );
			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';
				}
			}
			
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
	</div><!-- .indent -->
</section><!-- #call-to-action -->


<section id="services">
	<div class="indent clear">
		<?php 
		$query = new WP_Query( 'pagename=services' );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<h2 class="section-title">' . get_the_title() . '</h2>';
				echo '<div class="entry-content">';
				the_content('');
				echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	</div><!-- .indent -->
</section><!-- #services -->

<section id="meet">
	<div class="indent clear">
		<?php 
		$query = new WP_Query( 'pagename=meet-dr-anthony-britton' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<h2 class="section-title">' . get_the_title() . '</h2>';
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	</div><!-- .indent -->
</section><!-- #meet -->

<section id="contact">
	<div class="indent clear">
		<?php 
		$query = new WP_Query( 'pagename=contact' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<h2 class="section-title">' . get_the_title() . '</h2>';
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	</div><!-- .indent -->
</section><!-- #contact -->

</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>