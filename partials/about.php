<?php
$page = get_page_by_path('about');

$title = get_field('about_title', $page) ?? '';
$descr = get_field('about_descr', $page) ?? '';
$list = get_field('about_list', $page) ?? '';
$has_header = $args['has_header'] ?? true;

?>
<?php if ($descr): ?>
	<section class="section about" id="about">
		<div class="container about__container">
			<?php if ($has_header): ?>
				<div class="about__header">
					<h2 class="about__title title-2">
						<?php echo esc_html($title) ?>
					</h2>
					<div class="about__descr descr title-3">
						<?php echo wp_kses_post($descr) ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if ($list): ?>
				<ul class="about__list grid">
					<?php foreach ($list as $item): ?>
						<li class="about__item about-item">
							<h3 class="about-item__title title-3 descr">
								<?php echo wp_kses_post($item['title']) ?>
							</h3>
							<div class="about-item__descr descr">
								<?php echo wp_kses_post($item['descr']) ?>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>