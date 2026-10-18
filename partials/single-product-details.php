<?php
$area_title = get_field('area_title') ?? '';
$area_descr = get_field('area_descr') ?? '';
$docs_title = get_field('docs_title') ?? '';
$docs_files = get_field('docs_files') ?? '';
?>
<section class="single-product-details" id="single-product-details">
	<div class="container single-product-details__container">
		<?php if ($area_descr): ?>
			<div class="single-product-details__area single-product-area">
				<h2 class="single-product-area__title title-2">
					<?php echo esc_html($area_title) ?>
				</h2>
				<div class="single-product-area__descr descr">
					<?php echo wp_kses_post($area_descr) ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if ($docs_files): ?>
			<div class="single-product-details__docs single-product-docs">
				<h2 class="single-product-docs__title title-2">
					<?php echo esc_html($docs_title) ?>
				</h2>
				<ul class="single-product-docs__list">
					<?php foreach ($docs_files as $item): ?>
						<li class="single-product-docs__item single-product-docs-item">
							<a class="single-product-docs-item__link" href="<?php echo esc_url($item['file']['url']) ?>"
								target="_blank">
								<div class="single-product-docs-item__content">
									<h3 class="single-product-docs-item__title title-4">
										<?php echo esc_html($item['file']['title']) ?>
									</h3>
									<span class="single-product-docs-item__hint">
										<?php echo esc_html($item['file']['subtype']) ?>,
										<?php
										echo str_replace(',', '.', esc_html(size_format($item['file']['filesize'], 2)));
										?>
									</span>
								</div>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
		<a class="single-product-details__btn btn btn--stroke" href="<?php echo esc_url(home_url('/shop/')); ?>">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M10 19L3 12M3 12L10 5M3 12L21 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
					stroke-linejoin="round" />
			</svg>
			<span>
				Вернуться в каталог
			</span>
		</a>
	</div>
</section>