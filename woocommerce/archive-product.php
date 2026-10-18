<?php
defined('ABSPATH') || exit;

get_header('shop');
?>
<section class="aero-shop section">
	<div class="container">
		<?php
		if (woocommerce_product_loop()) {
			woocommerce_product_loop_start();

			if (wc_get_loop_prop('total')) {
				while (have_posts()) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action('woocommerce_shop_loop');

					wc_get_template_part('content', 'product');
				}
			}

			woocommerce_product_loop_end();

			woocommerce_pagination();
		} else {
			?>
			<h3 class="aero-shop__not-found-title title-3 mb-l">
				Товаров, соответствующих вашему запросу, не обнаружено.
			</h3>

			<a class="btn aero-shop__not-found-btn" href="<?php echo esc_url(home_url('/shop/')); ?>">Вернуться в каталог</a>
			<?php
		}
		?>
	</div>
</section>

<?php get_template_part('partials/form-main', null, array(
	'title' => '',
	'subtitle' => get_field('form_shop_subtitle', 'options'),
	'posttitle' => get_field('form_shop_posttitle', 'options'),
)); ?>

<?php
get_footer('shop');
