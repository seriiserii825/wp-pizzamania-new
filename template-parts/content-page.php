<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pizzamania
 */
$category = get_the_category();
?>
                            <div class="bg-single-new">
                                <div class="image-holder">
                                    <div class="holder-new">
                                        <div class="overlay"></div>
                                        <img src="<?php the_field('blog_img') ?>" alt="">
                                    </div>
                                    <ul>
                                        <li><a href="<?php echo get_category_link($category[0]->term_id) ?>"><?php echo $category[0]->cat_name; ?></a></li>
                                        <li><a><i class="flaticon-calendar"></i><?php the_date() ?></a></li>
                                    </ul>
                                </div>
                                <div class="image-heading">
                                    <?php the_title( '<h2>', '</h2>' ); 
                                    the_content();?>
                                </div>

                                <div class="image-heading2">
    
                                    <?php the_tags( '<ul><li><i class="flaticon-price-tag"></i>','</li><li>','</li></ul>'); ?>
                                </div>
                            </div>
