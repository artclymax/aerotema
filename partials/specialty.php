<?php
$page = get_page_by_path('about');

$title = get_field('specialty_title', $page) ?? '';
$descr = get_field('specialty_descr', $page) ?? '';
$list = get_field('specialty_list', $page) ?? '';

?>
<?php if ($list || $descr): ?>
	<section class="section specialty" id="specialty">
		<div class="container specialty__container">
			<h2 class="specialty__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="specialty__content">
				<?php if ($descr): ?>
					<div class="specialty__descr descr">
						<?php echo wp_kses_post($descr) ?>
					</div>
				<?php endif; ?>
				<?php if ($list): ?>
					<ul class="specialty__list grid">
						<?php foreach ($list as $item): ?>
							<li class="specialty__item specialty-item">
								<div class="specialty-item__image">
									<?php echo wp_get_attachment_image(
										$item['image']['ID'],
										'large',
										false,
										array(
											'class' => 'img',
											'alt' => $item['image']['alt'] ?: $item['title']
										)
									); ?>
								</div>
								<div class="specialty-item__content">
									<h3 class="specialty-item__title title-4">
										<?php echo esc_html($item['title'])?>
									</h3>
									<div class="specialty-item__descr descr">
										<?php echo wp_kses_post($item['descr'])?>
									</div>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>