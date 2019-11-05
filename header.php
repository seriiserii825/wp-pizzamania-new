<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pizzamania
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/fav2.ico">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fav2.ico">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- color stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colors.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
</head>
<body>
<div class="loader_wrapper">
    <div class="loader">
        <img src="<?php echo get_template_directory_uri(); ?>/images/loader.gif" alt="" class="img-fluid">
    </div>
</div>
<!--// loader_wrapper -->
<div class="c_top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 xol-xs-12">
                <p class="c_conctacts">
                    <i class="flaticon-phone-call"></i>
                    <a href="tel:<?php the_field('phone1', 'options'); ?>"
                       class="c_conctacts_first"> <?php the_field('phone1', 'options'); ?></a>
                    <i class="flaticon-phone-call"></i>
                    <a href="tel:<?php the_field('phone2', 'options'); ?>"
                       class="c_conctacts_first"> <?php the_field('phone2', 'options'); ?></a>
                    <i class="flaticon-phone-call"></i>
                    <a href="tel:<?php the_field('phone3', 'options'); ?>"> <?php the_field('phone3', 'options'); ?></a>
                </p>
            </div>
            <div class="col-md-5 hidden-xs">
                <p class="c_grafik"><!--<?php pll_e('График доставки'); ?>:--> <span><i
                                class="flaticon-placeholder"></i> <?php pll_e('Кишинев'); ?> <?php the_field('dostavka_chishnau', 'options'); ?></span><span><i
                                class="flaticon-placeholder"></i> <?php pll_e('Бельцы'); ?> <?php the_field('dostavka_balti', 'options'); ?></span>
                </p>
            </div>
            <div class="col-md-1 col-xs-12">
                <div class="c_lang">
					<?php $args = array(
						'dropdown' => 1, // displays a list if set to 0, a dropdown list if set to 1 (default: 0)
						'show_names' => 1, // displays language names if set to 1 (default: 1)
						'display_names_as' => 'name', // either ‘name’ or ‘slug’ (default: ‘name’)
						'show_flags' => 1, // displays flags if set to 1 (default: 0)
						'hide_if_empty' => 1, // hides languages with no posts (or pages) if set to 1 (default: 1)
						'force_home' => 0, // forces link to homepage if set to 1 (default: 0)
						'echo' => 1, // echoes if set to 1, returns a string if set to 0 (default: 1)
						'hide_if_no_translation' => 1, // hides the language if no translation exists if set to 1 (default: 0)
						'hide_current' => 0, // hides the current language if set to 1 (default: 0)
						'post_id' => null, // if set, displays links to translations of the post (or page) defined by post_id (default: null)
						'raw' => 0, // use this to create your own custom language switcher (default:0)
					);
					pll_the_languages($args); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wrapper">
    <header class="new-block main-header">
        <div class="main-nav new-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo">
                            <a href="/"><img style="    max-width: 85%;
    margin-top: 4px;" src="<?php the_field('logo', 'options'); ?>" alt="logo" class="img-responsive"></a>
                        </div>


                        <a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
                        <nav class="nav">
							<?php
							wp_nav_menu(array(
								'menu' => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
								// чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
								'container' => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
								'container_class' => '',              // (string) class контейнера (div тега)
								'container_id' => '',              // (string) id контейнера (div тега)
								'menu_class' => '',          // (string) class самого меню (ul тега)
								'menu_id' => '',              // (string) id самого меню (ul тега)
								'echo' => true,            // (boolean) Выводить на экран или возвращать для обработки
								'fallback_cb' => '',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
								'before' => '',              // (string) Текст перед <a> каждой ссылки
								'after' => '',              // (string) Текст после </a> каждой ссылки
								'link_before' => '',              // (string) Текст перед анкором (текстом) ссылки
								'link_after' => '',              // (string) Текст после анкора (текста) ссылки
								'depth' => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
								'walker' => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
								'theme_location' => 'top'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
							));
							?>
                        </nav>
<!--                        <div class="nav-right-block">-->
<!--                            <ul class="list-unstyled">-->
<!--                                <li id="open">-->
<!--                                    <a href="#"><i class="flaticon-scooter-front-view"></i><span-->
<!--                                                class="nav-price">--><?php //pll_e('Товаров'); ?><!--: <div-->
<!--                                                    class="label-place"></div></span></a></li>-->
<!--                            </ul>-->
<!--                        </div> nav-login -->
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- header -->

    <div class="banner slider1 new-block">
        <div class="fixed-bg"
             style="background: url('<?php echo get_template_directory_uri(); ?>/images/slider-bg1.jpg');"></div>
        <div class="slider owl-carousel owl-theme">
			<?php
			if (pll_current_language() == 'ru') {
				the_field('slider_ru', 'options');
			} else {
				the_field('slider_md', 'options');
			}
			?>
        </div>
    </div><!-- banner -->


    <div style="clear:both;"></div>

	<?php
	wp_nav_menu(array(
		'menu' => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
		// чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
		'container' => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
		'container_class' => '',              // (string) class контейнера (div тега)
		'container_id' => '',              // (string) id контейнера (div тега)
		'menu_class' => 'nav_menu sticky',          // (string) class самого меню (ul тега)
		'menu_id' => '',              // (string) id самого меню (ul тега)
		'echo' => true,            // (boolean) Выводить на экран или возвращать для обработки
		'fallback_cb' => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
		'before' => '',              // (string) Текст перед <a> каждой ссылки
		'after' => '',              // (string) Текст после </a> каждой ссылки
		'link_before' => '',              // (string) Текст перед анкором (текстом) ссылки
		'link_after' => '',              // (string) Текст после анкора (текста) ссылки
		'depth' => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
		'walker' => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
		'theme_location' => 'catalog'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
	));
	?>

    <div id="fixedMargin"></div>