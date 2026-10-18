<?php
$page = get_page_by_path('services');

$title = get_field('process_title', $page) ?? '';
$list = get_field('process_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section process" id="process">
		<div class="container process__container">
			<h2 class="process__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="process__list grid">
				<?php foreach ($list as $item): ?>
					<li class="process__item process-item">
						<h3 class="process-item__title">
							<?php echo esc_html($item['title']) ?>
						</h3>
						<div class="process-item__descr descr">
							<?php echo wp_kses_post($item['descr']) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>