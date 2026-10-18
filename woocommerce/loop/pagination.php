<?php

if (!defined('ABSPATH')) {
	exit;
}

$total = isset($total) ? $total : wc_get_loop_prop('total_pages');
$current = isset($current) ? $current : wc_get_loop_prop('current_page');
$base = isset($base) ? $base : esc_url_raw(str_replace(999999999, '%#%', remove_query_arg('add-to-cart', get_pagenum_link(999999999, false))));
$format = isset($format) ? $format : '';

if ($total <= 1) {
	return;
}
?>
<nav class="woocommerce-pagination" aria-label="<?php esc_attr_e('Product Pagination', 'woocommerce'); ?>">
	<?php
	echo paginate_links(
		apply_filters(
			'woocommerce_pagination_args',
			array( // WPCS: XSS ok.
				'base' => $base,
				'format' => $format,
				'add_args' => false,
				'current' => max(1, $current),
				'total' => $total,
				'prev_text' => '<svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24 9.33334L5.10667 9.33333L9.88667 14.1133L8 16L1.39876e-06 8L8 9.21927e-07L9.88667 1.88667L5.10667 6.66667L24 6.66667L24 9.33334Z" fill="currentColor"/></svg>',
				'next_text' => '<svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 6.66667H18.8933L14.1133 1.88667L16 0L24 8L16 16L14.1133 14.1133L18.8933 9.33333H0V6.66667Z" fill="currentColor"/></svg>',
				'type' => 'list',
				'end_size' => 1,
				'mid_size' => 1,
			)
		)
	);
	?>
</nav>