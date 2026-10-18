<?php
$page = get_page_by_path('services');

$list = get_field('service-features_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section service-features" id="service-features">
		<div class="container service-features__container">
			<?php foreach ($list as $item): ?>
				<div class="service-features__col">
					<h3 class="service-features__title title-2">
						<?php echo esc_html($item['title']) ?>
					</h3>
					<div class="service-features__descr descr" style="--icon-bg: url('<?php echo esc_url($item['icon'])?>');">
						<?php echo wp_kses_post($item['descr']) ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
<?php endif; ?>