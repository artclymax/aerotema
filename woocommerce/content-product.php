<?php
defined('ABSPATH') || exit;

global $product;
if (!is_a($product, WC_Product::class) || !$product->is_visible()) {
	return;
} ?>
<li <?php wc_product_class('aero-card', $product); ?>>
	<a class="aero-card__link-wrapper" href="<?php the_permalink() ?>">
		<div class="aero-card__image image-box">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="aero-card__content">
			<h3 class="aero-card__title title-3">
				<?php echo get_field('product_type') ?: the_title(); ?>
			</h3>
			<div class="aero-card__decr descr">
				<?php the_excerpt(); ?>
			</div>
			<button class="aero-card__link icon icon--arrow-next icon--after" type="button">
				<span class="link">
					<?php the_field('shop_btn', get_page_by_path('shop')); ?>
				</span>
			</button>
		</div>
	</a>
</li>