<?php
$page = get_page_by_path('home');

$title = get_field('why-choose_title', $page) ?? '';
$image = get_field('why-choose_image', $page) ?? '';
$list = get_field('why-choose_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section why-choose" id="why-choose">
		<div class="container why-choose__title-container">
			<h2 class="why-choose__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
		</div>
		
		<div class="why-choose__body jarallax" style="background-image: url('<?php echo esc_attr($image)?>');">
			<div class="container why-choose__container">
				<ol class="why-choose__list">
					<?php foreach ($list as $item): ?>
						<li class="why-choose__item why-choose-item">
							<h3 class="why-choose-item__title title-3">
								<?php echo esc_html($item['title']) ?>
							</h3>
							<div class="why-choose-item__descr descr">
								<?php echo wp_kses_post($item['descr']) ?>
							</div>
						</li>
					<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</section>
<?php endif; ?>