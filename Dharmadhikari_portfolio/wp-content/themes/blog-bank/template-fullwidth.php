<?php
/**
 * The template for displaying full width 
 *
 * 
 * Template Name: Full Width Template
 *
 *
 * @package Blog_Bank
 */

get_header();
?>

	<section class="entry-content section-padding">
        <div class="container"> 
        	<div class="row"> 
            	<div class="col-sm-12">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

				</div>
			</div><!-- #main -->
		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
