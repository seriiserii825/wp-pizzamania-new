<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pizzamania
 */

get_header();
?>

		<?php if ( have_posts() ) : ?>
			<section class="deal-of-day new-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title">
							<h2><?php echo single_cat_title( '', false ) ?></h2>
							<div class="btm-style"><span><img src="<?php echo get_template_directory_uri(); ?>/images/btm-style.png" alt="" class="img-responsive"></span></div>
						</div>
					</div>
				</div>
			<div class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
					<div class="col-lg-3 col-md-4 col-sm-6">
					<?php get_template_part( 'template-parts/tovar', 'shortstory' ); ?>
					</div>
		<?php
			endwhile;?>
		    		
				</div>
			</div>
		</section>
			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>


<?php
get_footer();
