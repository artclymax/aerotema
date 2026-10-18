<?php
$page = get_page_by_path('home');

$title = get_field('partners_title', $page) ?? '';
$list = get_field('partners_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section partners" id="partners">
		<div class="container partners__container">
			<h2 class="partners__title title-2">
				<?php echo esc_html($title)?>
			</h2>
			<ul class="partners__list">
				<?php foreach ($list as $item): ?>
					<li class="partners__item">
						<img src="<?php echo esc_attr($item['image'])?>" alt="<?php echo esc_attr($title)?>">
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>