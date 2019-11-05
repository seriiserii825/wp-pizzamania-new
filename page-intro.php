<?php
/**
 * Template Name: Intro
 */
get_header();
?>
<div class="intro-block">
    <div class="intro-block__overlay"></div>
    <div class="intro-block__content">
        <a href="#" class="intro-block__item intro_index">
            <h3><?php echo get_field('phone_text'.get_lang(), 'option'); ?></h3>
            <img src="<?php echo get_template_directory_uri().'/images/intro-cropped.jpg'; ?>" alt="">
        </a>

        <a href="https://www.straus.md/" class="intro-block__item">
            <h3><?php echo get_field('straus_text'.get_lang(), 'option'); ?></h3>
            <img src="<?php echo get_template_directory_uri().'/images/straus.jpg'; ?>" alt="">
        </a>
    </div>
</div>

<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-12">-->
<!--				--><?php
//				while ( have_posts() ) :
//					the_post();
//
//					get_template_part( 'template-parts/content', 'fullpage' );
//
//					// If comments are open or we have at least one comment, load up the comment template.
//					if ( comments_open() || get_comments_number() ) :
//						comments_template();
//					endif;
//
//				endwhile; // End of the loop.
//				?>
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->

<?php
get_footer();
