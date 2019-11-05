<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pizzamania
 */

?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><p><?php pll_e('Ничего не найдено'); ?> !:(</p></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pizzamania' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php pll_e('Возможно данная страница была удалена, приносим извенения за неудобство'); ?>...</p>
			<?php

		else :
			?>
			<p><?php pll_e('Возможно данная страница была удалена, приносим извенения за неудобство'); ?>...</p>
			<?php

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
		</div>
	</div>
</div>