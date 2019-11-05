<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pizzamania
 */

get_header();
?>
        <section class="blog-single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="bg-single">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>
                        </div>
                    </div>
				<?php get_sidebar(); ?>
                </div>
            </div>
        </section>
<?php
get_footer();
