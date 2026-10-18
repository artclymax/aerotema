<?php
$page = get_page_by_path('about');

$title = get_field('steps_title', $page) ?? '';
$btn = get_field('steps_btn', $page) ?? '';
$list = get_field('steps_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section steps" id="steps">
		<div class="container steps__container">
			<h2 class="steps__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="steps__list">
				<?php foreach ($list as $item): ?>
					<li class="steps__item steps-item">
						<div class="steps-item__content">
							<h3 class="steps-item__title title-3">
								<?php echo esc_html($item['title']) ?>
							</h3>
							<div class="steps-item__descr descr">
								<?php echo wp_kses_post($item['descr']) ?>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
			<a class="steps__link btn" href="<?php echo esc_url($btn['url']) ?>">
				<?php echo esc_html($btn['title']) ?>
			</a>
		</div>
	</section>
<?php endif; ?>