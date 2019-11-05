<div class="block-stl2">
    <a href="#popupInfo" class="openPopup popupLink">
        <div class="img-holder">
            <img src="<?php the_field('photo') ?>" alt="<?php echo get_the_title() ?>" class="img-responsive popupImg"">
        </div>
        <!-- 		<div class="text-block">
			<h3><?php get_the_title() ?></h3>
			<p class="price"><span><?php the_field('price') ?> лей</span> </p>
		</div> -->
        <div class="text-block">
            <h3 class="popupTitle"><?php echo get_the_title() ?></h3>
            <p class="sz"><?php pll_e('Вес'); ?> : <?php the_field('weight') ?> <?php pll_e('г'); ?>.</p>
            <p class="price"><span><?php the_field('price') ?><?php pll_e('Лей'); ?></span>
				<?php if (get_field('old_price')) : ?>
                    <del><?php the_field('old_price') ?><?php pll_e('Лей'); ?></del>
				<?php endif; ?></p>
        </div>
        <div class="btn-sec">
            <span class="btn3"><?php pll_e('Детали'); ?></span>
        </div>
    </a>
    <div class="initPopupForm" style="display:none">
        <div class="popupCotainer">
            <div class="img-holder" style="padding-top:0;">
                <img src="<?php the_field('photo') ?>" class="img-responsive" style="border-radius: 8px 8px 0 0;">
            </div>
            <div class="block-stl6" style="margin-top:30px;">
                <h2 id="popupTitle"><?php echo get_the_title() ?></h2>
                <p class="price">
                    <span><?php the_field('price') ?><?php pll_e('Лей'); ?></span><?php if (get_field('old_price')) : ?>
                        <small>
                        <del><?php the_field('old_price') ?><?php pll_e('Лей'); ?></del></small><?php endif; ?></p>
                <div style="clear:both"></div>

				<?php
				$cur_terms = get_the_terms($post->ID, 'category_tovar');
				$cat = $cur_terms[0]->term_id;
				?>
				<?php if ($cat == 23 || $cat == 57 || $cat == 246 || $cat == 244) { ?>
                    <div class="form-group" style="    margin: 18px 0 -5px 0;">
                        <select class="c_select" id="type_corj">
                            <option value="<?php pll_e('Классический корж'); ?>"><?php pll_e('Классический корж'); ?></option>
                            <option value="<?php pll_e('Отрубной корж'); ?>"><?php pll_e('Отрубной корж'); ?></option>
                        </select>
                    </div>
				<?php } ?>


                <div style="clear:both"></div>
                <p class="ab-txt"><?php pll_e('Вес'); ?>: <?php the_field('weight') ?> <?php pll_e('г'); ?>
                    .<br><?php pll_e('Состав'); ?>: <?php the_field('sostav') ?></p>
                <p class="ab-txt green"><?php pll_e('Товар добавлен в корзину') ?>.</p>

                <div class="form-group btn-block">
                    <!--								<a href="#" class="btn1 stl2 add_item"  data-id="-->
					<?php //the_ID(); ?><!--" data-title="--><?php //echo get_the_title() ?><!--" data-price="-->
					<?php //the_field('price') ?><!--" data-img="--><?php //the_field('photo') ?><!--" data-type="">-->
					<?php //pll_e('В корзину') ?><!--</a>-->
                    <a href="#" class="btn1 stl1 inPopup closePopup"><?php pll_e('Закрыть') ?></a>
                </div>
            </div>
        </div>
    </div>
</div>