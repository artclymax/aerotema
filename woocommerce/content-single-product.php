<?php

defined('ABSPATH') || exit;

global $product;
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('single-product-page', $product); ?>>
	<?php get_template_part('partials/single-product-hero'); ?>
	<?php get_template_part('partials/single-product-details'); ?>
</div>