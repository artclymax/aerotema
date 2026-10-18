<?php
$page = get_page_by_path('services');

$title = get_field('clients_title', $page) ?? '';
$descr = get_field('clients_descr', $page) ?? '';
$image = get_field('clients_image', $page) ?? '';
$list = get_field('clients_list', $page) ?? '';

?>
<?php if ($descr || $list): ?>
	<section class="clients jarallax" id="clients" style="background-image: url('<?php echo esc_url($image) ?>')">
		<div class="container clients__container">
			<h2 class="clients__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="clients__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<?php if ($list): ?>
				<ul class="clients__list grid">
					<?php foreach ($list as $item): ?>
						<li class="clients__item clients-item icon icon--check-orange">
							<div class="clients-item__wrapper">
								<h3 class="clients-item__title">
									<?php echo esc_html($item['title'])?>
								</h3>
								<div class="clients-item__descr descr">
									<?php echo wp_kses_post($item['descr'])?>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>