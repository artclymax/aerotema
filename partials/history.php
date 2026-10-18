<?php
$page = get_page_by_path('about');

$title = get_field('history_title', $page) ?? '';
$list = get_field('hidtory_list', $page) ?? '';
$image = get_field('history_image', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="history jarallax" id="history" style="background-image: url('<?php echo esc_attr($image['url']) ?>');">
		<div class="container history__container">
			<h2 class="history__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="history__list">
				<?php foreach ($list as $item): ?>
					<li class="history__item history-item">
						<p class="history-item__year">
							<?php echo esc_html($item['year']) ?>
						</p>
						<h3 class="history-item__title title-3">
							<?php echo esc_html($item['title']) ?>
						</h3>
						<div class="history-item__descr descr title-3">
							<?php echo wp_kses_post($item['descr']) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>