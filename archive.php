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
        <section class="blog-single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="bg-single">
					<?php query_posts('showposts=8');
					$ids = array();
					while (have_posts()) : the_post();
					$ids[] = get_the_ID(); 
					$category = get_the_category();  ?>
                            <div class="bg-single-neww">
                                <div class="image-holder">
                                    <div class="holder-new">
                                        <div class="overlay"></div>
                                        <img src="<?php the_field('blog_img'); ?>" alt="" class="img-responsive">
                                    </div>
                                    <ul>
                                        <li><a href="<?php echo get_category_link($category[0]->term_id) ?>"><?php echo $category[0]->cat_name; ?></a></li>
                                        <li><a href="<?php the_permalink() ?>"><i class="flaticon-calendar"></i><?php echo get_the_date() ?></a></li>
                                    </ul>
                                </div>
                                <div class="image-heading">
                                    <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                                    <p><?php the_excerpt() ?> <a href="<?php the_permalink() ?>"><?php pll_e('Подробнее'); ?></a></p>
                                </div>
                            </div>
						<?php endwhile; ?>
                        </div>
                    </div>
					<?php get_sidebar(); ?>
                   </div>
               </div>
           </section>
<?php
get_footer();
