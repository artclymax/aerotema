<?php
$page = 'options';

$title = $args['title'] ?? get_field('form_main_title', $page) ?? '';
$subtitle = $args['subtitle'] ?? get_field('form_main_subtitle', $page) ?? '';
$posttitle = $args['posttitle'] ?? get_field('form_main_posttitle', $page) ?? '';
$image = get_field('form_main_image', $page) ?? '';
$country = get_field('form_main_country', $page) ?? '';
$small = $args['small'] ?? get_field('form_main_small', $page) ?? '';

$data = [];

if ($country) {
	foreach ($country as $item) {
		$data[] = [
			'name' => $item['title']
		];
	}
}

$json = htmlspecialchars(json_encode($data, JSON_UNESCAPED_UNICODE), ENT_QUOTES, 'UTF-8');
?>
<div class="cf-data" data-cf-data="<?= $json ?>"></div>
<section class="section form-main" id="form">
	<div class="container form-main__title-container">
		<h2 class="form-main__title title-2">
			<?php echo esc_html($title) ?>
		</h2>
	</div>
	<div class="form-main__body jarallax" style="background-image: url('<?php echo esc_attr($image) ?>');">
		<div class="container form-main__container">
			<div class="form-main__content">
				<h2 class="form-main__subtitle title-2">
					<?php echo esc_html($subtitle) ?>
				</h2>
				<?php if ($posttitle): ?>
					<p class="form-main__subtitle title-3">
						<?php echo esc_html($posttitle) ?>
					</p>
				<?php endif; ?>
				<div class="form-main__form">
					<?php echo do_shortcode('[contact-form-7 id="0c0e367" title="Заявка на подбор редуктора"]') ?>
				</div>
				<small class="form-main__small">
					<?php echo esc_html($small) ?>
				</small>
			</div>
		</div>
	</div>
</section>