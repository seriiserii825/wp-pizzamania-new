<?php
/* Template Name: Главная */
get_header();
?>

    <div class="intro-block">
        <div class="intro-block__overlay"></div>
        <div class="intro-block__content">
            <a target="_blank" href="https://www.straus.md/ru/restaurant/pizzamania/" class="intro-block__item">
                <h3><?php echo get_field('phone_text_chishinau' . get_lang(), 'option'); ?></h3>
                <img src="<?php echo get_template_directory_uri() . '/images/straus.jpg'; ?>" alt="">
            </a>

            <a href="tel:+37368900377" class="intro-block__item">
                <h3><?php echo get_field('phone_text_balti' . get_lang(), 'option'); ?></h3>
                <img src="<?php echo get_template_directory_uri() . '/images/intro-cropped.jpg'; ?>" alt="">
            </a>

            <a href="#" class="intro-block__item intro_index">
                <h3><?php echo get_field('view_site' . get_lang(), 'option'); ?></h3>
                <img src="<?php echo get_template_directory_uri() . '/images/intro-cropped.jpg'; ?>" alt="">
            </a>
        </div>
    </div>

<?php
//$section = get_field('section');
?>
    <!-- Новинки -->
<?php $args = array(
	'post_type' => 'tovar',
//	'posts_per_page' => 10
);
$property = new WP_Query($args); // дальше - loop
if ($property->have_posts()) : ?>
    <section class="deal-of-day new-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h2><?php pll_e('Новинки'); ?></h2>
                        <div class="btm-style"><span><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/btm-style.png" alt=""
                                        class="img-responsive"></span></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="item-slider2 owl-carousel owl-theme">
						<?php while ($property->have_posts()) :
							$property->the_post();
							if (get_field('mainpage') == 'yes') {
								$section = get_field('section');
								if ($section && in_array('new', $section)):?>
                                    <div class="item">
										<?php get_template_part('template-parts/tovar', 'shortstory'); ?>
                                    </div>
								<?php
								endif;
							}
						endwhile;
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;
wp_reset_postdata();
?>
    <!-- /Новинки -->


    <!-- Популярное -->
<?php $args = array(
	'post_type' => 'tovar',
//	'posts_per_page' => 10
);
$property = new WP_Query($args); // дальше - loop
if ($property->have_posts()) : ?>
    <section class="deal-of-day new-block popular">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h2><?php pll_e('Популярные блюда'); ?></h2>
                        <div class="btm-style"><span><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/btm-style.png" alt=""
                                        class="img-responsive"></span></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="item-slider2 owl-carousel owl-theme">
						<?php while ($property->have_posts()) :
							$property->the_post();
							if (get_field('mainpage') == 'yes') {
								$section = get_field('section');
								if ($section && in_array('popular', $section)):?>
                                    <div class="item">
										<?php get_template_part('template-parts/tovar', 'shortstory'); ?>
                                    </div>
								<?php
								endif;
							}
						endwhile;
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;
wp_reset_postdata();
?>

    <!-- /Популярное -->
<?php if (get_field('enable_special', 'option')) : ?>
	<?php $args = array('post_type' => 'tovar', 'posts_per_page' => 9);
	$property = new WP_Query($args); // дальше - loop
	if ($property->have_posts()) : ?>

        <section class="deal-of-day new-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <h2><?php pll_e('Специальное предложение'); ?></h2>
                            <div class="btm-style"><span><img
                                            src="<?php echo get_template_directory_uri(); ?>/images/btm-style.png"
                                            alt="" class="img-responsive"></span></div>
                            <p class="bottom-p"><?php pll_e('Успей заказать с скидкой 50%'); ?>
                                <br><?php pll_e('предложение ограничено'); ?>!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div id="ofr_end"></div>
                    </div>
                </div>
                <div class="row">
					<?php while ($property->have_posts()) :
						$property->the_post();
						$section = get_field('section');
						if ($section && in_array('special', $section)):?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
								<?php get_template_part('template-parts/tovar', 'shortstory'); ?>
                            </div>
						<?php
						endif;
					endwhile;
					?>
                </div>
            </div>
        </section>
	<?php endif;
	wp_reset_postdata();
	?>
<?php endif; ?>


    <!-- 		<section class="amezing-offers new-block">
			<div class="overlay"></div>
			<div class="fixed-bg parallax" style="background: url('<?php echo get_template_directory_uri(); ?>/images/bg1.png');"></div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="img-holder">
							<img src="<?php echo get_template_directory_uri(); ?>/images/pz1.png" alt="" class="img-responsive">		
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="text-block-stl1">
							<div class="title">
								<h2><?php pll_e('Бесплатная доставка'); ?></h2>
								<p class="bottom-p"><?php pll_e('Бесплатная доставка по Кишиневу и Бельцам'); ?><?php pll_e('при заказе на сумму 600 леев и больше.'); ?></p>
								<a href="#" class="btn1 stl2"><?php pll_e('Подробнее'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->


    <section class="this-month-blog new-block">
        <div class="container-fluid no-gutter">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <p class="top-h"></p>
                        <h2><?php pll_e('Новости и акции'); ?></h2>
                        <div class="btm-style"><span><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/btm-style.png" alt=""
                                        class="img-responsive"></span></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="blog-slider1 owl-theme owl-carousel">
						<?php query_posts('showposts=8');
						$ids = array();
						while (have_posts()) : the_post();
							$ids[] = get_the_ID();
							$category = get_the_category(); ?>
                            <div class="item">
                                <div class="blog-stl1">
                                    <div class="img-holder">
                                        <img src="<?php the_field('blog_img'); ?>" class="img-responsive"/>
                                        <div class="ovrl-block">
                                            <h3><?php the_title(); ?></h3>
                                            <a href="<?php the_permalink() ?>"
                                               class="btn1 stl2"><?php pll_e('Подробнее'); ?></a>
                                        </div>
                                        <ul class="blog-info-nav">
                                            <li>
                                                <a href="<?php echo get_category_link($category[0]->term_id) ?>"><?php echo $category[0]->cat_name; ?></a>
                                            </li>
                                            <li>
                                                <a href="<?php the_permalink() ?>"><i
                                                            class="flaticon-calendar"></i><?php echo get_the_date() ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
						<?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
