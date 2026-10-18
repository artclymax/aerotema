<?php
$page = get_page_by_path('home');

$title = get_field('tech_title', $page) ?? '';
$descr = get_field('tech_descr', $page) ?? '';
$list = get_field('tech_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section tech" id="tech">
		<div class="container tech__container">
			<h2 class="tech__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="tech__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<ul class="tech__list grid">
				<?php foreach ($list as $item): ?>
					<li class="tech__item tech-item">
						<div class="tech-item__image">
							<img src="<?php echo esc_attr($item['image']) ?>" alt="<?php echo esc_attr($item['title']) ?>">
						</div>
						<h3 class="tech-item__title">
							<?php echo esc_html($item['title']) ?>
						</h3>
						<div class="tech-item__descr descr text-small">
							<?php echo wp_kses_post($item['descr']) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>