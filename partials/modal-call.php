<?php
$title = get_field('modal_call_title', 'options') ?? '';
$descr = get_field('modal_call_descr', 'options') ?? '';
$country = get_field('form_main_country', 'options') ?? '';
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
<div class="modal" id="modal-call" data-modal>
	<div class="modal__box modal-call__box" data-modal-box>
		<button class="modal-call__close-btn modal__close-btn modal-close-btn" data-modal-close aria-label="Закрыть">
			<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M19.6528 0.40271C20.1898 -0.134261 21.0602 -0.134261 21.5972 0.40271C22.134 0.939689 22.1341 1.81011 21.5972 2.34705L12.9438 10.9994L21.5972 19.6527C22.134 20.1897 22.1341 21.0601 21.5972 21.597C21.0602 22.134 20.1898 22.1339 19.6528 21.597L10.9995 12.9437L2.34717 21.597C1.81023 22.134 0.939811 22.1339 0.402832 21.597C-0.134139 21.0601 -0.134139 20.1897 0.402832 19.6527L9.05518 10.9994L0.402832 2.34705C-0.134139 1.81008 -0.134139 0.939681 0.402832 0.40271C0.939803 -0.134261 1.8102 -0.134261 2.34717 0.40271L10.9995 9.05505L19.6528 0.40271Z"
					fill="currentColor" />
			</svg>
		</button>
		<div class="modal-call__body">
			<h3 class="modal-call__title title-3">
				<?php echo esc_html($title) ?>
			</h3>
			<div class="modal-call__form">
				<?php echo do_shortcode('[contact-form-7 id="0c0e367" title="Заявка на подбор редуктора"]') ?>
			</div>
			<small class="modal-call__descr-box descr-box">
				<?php echo wp_kses_post($descr) ?>
			</small>
		</div>
	</div>
</div>