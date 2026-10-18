<?php
$slug = get_query_var('pagename');

if (!$slug && is_singular()) {
	$slug = get_post_field('post_name', get_queried_object_id());
}

$page = get_page_by_path($slug);

if (is_shop()) {
	$page = get_page_by_path('shop');
}
$title = get_field('hero_title', $page) ?: get_the_title();
$descr = get_field('hero_descr', $page) ?? '';
$image = get_field('image', $page) ?? get_field('image', get_page_by_path('shop'));

if (is_product_category()) {
	$term = get_queried_object();
	$title = esc_html($term->name);
	$descr = term_description($term);
	$image = get_field('image', $term) ?? get_field('image', get_page_by_path('shop'));
} elseif (is_singular()) {
	$title = get_field('hero_title', $page) ?: get_the_title();
	$descr = get_field('hero_descr', $page) ?? '';
	$image = get_field('image', $page) ?? get_field('image', get_page_by_path('shop'));
}
?>

<section class="hero-page jarallax" id="hero-page" style="background-image: url('<?php echo esc_attr($image) ?>');">
	<div class="container hero-page__container">
		<?php
		woocommerce_breadcrumb([
			'delimiter' => '',
			'before' => '<span>',
			'after' => '</span>',
		]);
		?>
		<h1 class="hero-page__title title-1">
			<?php echo esc_html($title) ?>
		</h1>
		<div class="descr hero-page__descr">
			<?php echo wp_kses_post($descr) ?>
		</div>
	</div>
</section>