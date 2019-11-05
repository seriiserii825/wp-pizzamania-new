<?php
/**
 * Template Name: All menu
 */
get_header();
?>

    <section class="deal-of-day new-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h2><?php the_title(); ?></h2>
                        <div class="btm-style"><span><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/btm-style.png" alt=""
                                        class="img-responsive"></span></div>
                    </div>
                </div>
            </div>
            <div class="row">

				<?php
				$all_terms = get_terms('category_tovar', array('hide_empty' => 0));

				foreach ($all_terms as $term) { # внешний цикл
					$query = new WP_Query(array(
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'category_tovar',
								'field' => 'slug',
								'terms' => $term->slug,
							)
						)
					));


					while ($query->have_posts()) { # внутренний цикл
						$query->the_post(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
							<?php get_template_part('template-parts/tovar', 'shortstory'); ?>
                        </div>

					<?php } # конец внутреннего echo "</ul>";
				} # конец наружного
				?>

            </div>
        </div>
    </section>
<?php the_posts_navigation(); ?>


<?php
get_footer();
