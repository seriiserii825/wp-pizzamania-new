<div style="clear:both;"></div>
<div id="google_map">
	<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MmCS0DS7tGzX6zuDV9WGbkT8nh0N5AfW" width="640" height="480"></iframe>
</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.3"></script>
<footer class="main-footer new-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="footer-head">
						</div>
						<div class="footer-content">
							<p>   			<?php 
                if(pll_current_language() == 'ru') {
                   the_field('footer_description', 'options');
                } else {
                    the_field('footer_description_md', 'options');
                }  
        	?></p>
							<ul class="list-unstyled card-block">
								<li style="width: 50%;"><a href="<?php the_field('appstore_url', 'options'); ?>"><img src="https://pizzamania.md/wp-content/themes/pizzamania/images/apple_pizzamania.png" alt=""></a></li>
								<li style="width: 50%;"><a href="<?php the_field('google_play_url', 'options'); ?>"><img src="https://pizzamania.md/wp-content/themes/pizzamania/images/android_pizzamania_0.png" alt=""></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="our-company">
							<div class="footer-head">
							</div>
							<div class="footer-content">
<?php
wp_nav_menu( array(
	'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
										  // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
	'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
	'container_class' => '',              // (string) class контейнера (div тега)
	'container_id'    => '',              // (string) id контейнера (div тега)
	'menu_class'      => 'list-unstyled',          // (string) class самого меню (ul тега)
	'menu_id'         => '',              // (string) id самого меню (ul тега)
	'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
	'fallback_cb'     => '',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
	'before'          => '',              // (string) Текст перед <a> каждой ссылки
	'after'           => '',              // (string) Текст после </a> каждой ссылки
	'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
	'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
	'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
	'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
	'theme_location'  => 'footer1'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
) );
?>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
						<div class="footer-head">
						</div>
						<div class="footer-content">
<?php
wp_nav_menu( array(
	'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
										  // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
	'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
	'container_class' => '',              // (string) class контейнера (div тега)
	'container_id'    => '',              // (string) id контейнера (div тега)
	'menu_class'      => 'list-unstyled',          // (string) class самого меню (ul тега)
	'menu_id'         => '',              // (string) id самого меню (ul тега)
	'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
	'fallback_cb'     => '',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
	'before'          => '',              // (string) Текст перед <a> каждой ссылки
	'after'           => '',              // (string) Текст после </a> каждой ссылки
	'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
	'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
	'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
	'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
	'theme_location'  => 'footer2'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
) );
?>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="fb-page" data-href="https://www.facebook.com/PizzaManiaChisinau/" data-tabs="timeline" data-width="" data-height="320" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/PizzaManiaChisinau/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/PizzaManiaChisinau/">Pizza Mania</a></blockquote></div>
					</div>
				</div>
			</div>
		</footer>
		<div class="copy-right">
			<div class="container">
				<p><a href="#">PizzaMania</a> - <?php pll_e('Все права защищены'); ?></p>
				<ul class="social-nav">
					<li><a href="<?php the_field('facebook_url', 'options'); ?>"><i class="flaticon-facebook-logo"></i></a></li>
					<li><a style="border:0;" href="<?php the_field('instagram_url', 'options'); ?>"><i class="btn-soundcloud"><img src="<?php echo get_template_directory_uri(); ?>/images/inst.svg" alt=""></i></a></li>

				</ul>
			</div>
		</div>
		<span id="go_to_top" class="go-to-top"><i class="flaticon-up-arrow"></i></span>

<!-- 		<div class="theme-menu hide-sidebar">
			<h2>Choose your color</h2>
			<div id="style-switcher">
				<ul class="colors theme-btn">
					<li data-path="css/colors.css" data-url="images"> 
						<p class="btn clr-style" style="background:#c10a28;"></p>
					</li>
					<li data-path="css/colors2.css" data-url="images/clr2">
						<p class="btn clr-style" style="background:#f1b601;"></p>
					</li>
					<li data-path="css/colors3.css" data-url="images/clr3">
						<p class="btn clr-style" style="background:#0a84c1;"></p>
					</li>
					<li data-path="css/colors4.css" data-url="images/clr4"> 
						<p class="btn clr-style" style="background:#02a8aa;"></p>
					</li>
					<li data-path="css/colors5.css" data-url="images/clr5">
						<p class="btn clr-style" style="background:#db780d;"></p>
					</li>
					<li data-path="css/colors6.css" data-url="images/clr6">
						<p class="btn clr-style" style="background:#e54c04;"></p>
					</li>
				</ul>
			</div>
			<button class="btn btn-clr"><i class="fas fa-paint-brush"></i></button>
		</div> -->
	</div><!-- #wrapper -->
		<div class="mfp-hide" id="popupInfo"></div>
			<div class="clearfix"></div>
		</div>

	<!-- include jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <!-- slick slider  -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
	<!-- dscountdown  -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/dscountdown.min.js"></script>
    <!-- jquery.nice-select -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nice-select.js"></script>
    <!-- magnific-popup -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
    <!-- Mixitup -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/mixitup.min.js"></script>
    <!-- Google Map -->
   <!-- <script src="//maps.googleapis.com/maps/api/js-key=AIzaSyBP1lPhUhDU6MINpruPDinAzXffRlpzzFo.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>-->
	<!-- ajax card -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jqcart.min.js"></script>
    <!-- custom js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script>
jQuery(document).ready(function($){
            if ($("#ofr_end").length) {
                var month =  new Date();
                var nextMonth =  month.getMonth() + 2;
                var Year =  month.getFullYear();
                var month = new Array();
                month[0] = "January";
                month[1] = "February";
                month[2] = "March";
                month[3] = "April";
                month[4] = "May";
                month[5] = "June";
                month[6] = "July";
                month[7] = "August";
                month[8] = "September";
                month[9] = "October";
                month[10] = "November";
                month[11] = "December";
                var n = month[nextMonth];
                //console.log(n);
                $('#ofr_end').dsCountDown({
                    endDate: new Date(<?php the_field('counter_end', 'option') ?>),
                    theme: 'white',
					titleDays: "<?php pll_e('Дней'); ?>",
					titleHours: "<?php pll_e('Часов'); ?>",
					titleMinutes: "<?php pll_e('Минут'); ?>",
					titleSeconds: "<?php pll_e('Секунд'); ?>"
                });
            }

});
</script>
<script>
$(function(){
	'use strict';	
	// инициализация плагина корзины
	$.jqCart({
			buttons: '.add_item',
			handler: '/cart/handler.php',
			cartLabel: '.label-place',
			visibleLabel: true,
			openByAdding: false,
			currency: 'MDL'
	});	
	// Пример с дополнительными методами
	$('#open').click(function(){
		$.jqCart('openCart'); // открыть корзину
		cartOpenJS();
	});
	$('#clear').click(function(){
		$.jqCart('clearCart'); // очистить корзину
	});	

// $('#adresJs').change(function(){
//     alert ('test');
//     //alert($(this).find(':selected').data('priced'));
// });
function retotal(){
	$("#total_sum_js").val($('.odr-stts.itogsts > span').html());
}

function cartOpenJS(){
	$('.itogsts > span').html(parseInt($('.pricetovar').html()));
	$('#adresJs').change(function(){
		var priceTovar = parseInt($('.pricetovar').html());
		var th = $(this).find(':selected').data('priced');
		//$('.dostavkaPrice > span').html(price);

		console.log(priceTovar);
		if (priceTovar < 250){
			//$('.itogsts > span').html(price + priceTovar);
				if ( th == 1 ){ // Город
					$('.itogsts > span').html(priceTovar + 25);
					$('.dostavkaPrice > span').html('25');
					console.log('if1');
					retotal();
				}
				else if ( th == 2 ) { // Пригород 
					$('.itogsts > span').html(priceTovar + 50);
					$('.dostavkaPrice > span').html('50');
					retotal();
				}
				else{
					$('.itogsts > span').html(parseInt($('.pricetovar').html()));
					$('.dostavkaPrice > span').html('0');
					retotal();
				}
		}
		else{
				if ( th == 1 ){ // Город
					$('.itogsts > span').html(priceTovar + 10);
					$('.dostavkaPrice > span').html('10');
					retotal();
				}
				else if ( th == 2 ) { // Пригород 
					$('.itogsts > span').html(priceTovar + 25);
					$('.dostavkaPrice > span').html('25');
					retotal();
				}
				else{
					$('.itogsts > span').html(parseInt($('.pricetovar').html()));
					$('.dostavkaPrice > span').html('0');
					retotal();
				}
		}
	});
}



var init_popup;
$('.openPopup').on('click', function(){
init_popup = $(this).siblings('.initPopupForm').html();
});

function init_content(){
$('#popupInfo').html(init_popup).show();
}


$('.openPopup').magnificPopup({
callbacks: {
  beforeOpen: function() {
   	 init_content();
  },
  open: function() {
    $('.closePopup').on('click', function(){
		$.magnificPopup.close();
		return false;
	});
    $('.add_item').on('click', function(){
    var corj = $(this).parent().parent().find('.nice-select.c_select > .current').html()
    	$(this).data('type', corj).attr('data-type', corj);
		$(this).hide();
		$('.ab-txt.green').fadeIn();
		//.find('.current')
	});
  },
  afterClose: function() {
    $('.ab-txt.green').hide();
  },
},
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
});


// Fixed Header
if ($(window).width() > 767) {
$(window).scroll(function(){
  var header = $('.sticky'),
      scroll = $(window).scrollTop(),
      headerHeight = $('.sticky').height();

  if (scroll >= 1100){
  	header.addClass('fixed_menu');
  	$('.nav-right-block').addClass('fixed_cart');
  	$('#fixedMargin').css('margin-top', headerHeight);
  	$('.fixed_menu').animate({top:'0'}, 500);
  	$('.fixed_cart').css('top', headerHeight);
  	$('.fixed_cart').animate({right:'0'}, 900);
  }
  else{
  	header.animate().stop();
  	header.removeClass('fixed_menu');
  	header.removeAttr("style");
  	$('.nav-right-block').animate().stop();
  	$('.nav-right-block').removeClass('fixed_cart');
  	$('.nav-right-block').removeAttr("style");
  	$('#fixedMargin').removeAttr("style");
  }
});
}
else{

}


});
</script>
</body>

<?php wp_footer(); ?>
</body>
</html>
