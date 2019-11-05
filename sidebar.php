<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pizzamania
 */
?>

                    <div class="col-lg-4 col-md-4">
                        <div class="about">
                            <h2><?php pll_e('Категории'); ?></h2>
<?php
wp_nav_menu( array(
	'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
										  // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
	'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
	'container_class' => '',              // (string) class контейнера (div тега)
	'container_id'    => '',              // (string) id контейнера (div тега)
	'menu_class'      => '',          // (string) class самого меню (ul тега)
	'menu_id'         => '',              // (string) id самого меню (ul тега)
	'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
	'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
	'before'          => '<i class="flaticon-right-arrow"></i>',              // (string) Текст перед <a> каждой ссылки
	'after'           => '',              // (string) Текст после </a> каждой ссылки
	'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
	'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
	'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
	'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
	'theme_location'  => 'blog'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
) );
?>
                        </div>

                        <div class="about">
                            <div class="about-new">
                                <h2><?php pll_e('Последние новости'); ?></h2>
                                <?php $catquery = new WP_Query( 'posts_per_page=5' ); ?>
	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
	<div class="nws">
	<a href="<?php the_permalink() ?>" rel="bookmark"><h4><?php the_title(); ?></h4></a>
	<p><?php echo get_the_date(); ?></p>
	</div>
	<?php endwhile; ?> 
	<?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>