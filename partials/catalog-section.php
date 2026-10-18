<?php
$page = get_page_by_path('home');

$title = get_field('catalog-section_title', $page?->ID) ?? '';
$btn = get_field('catalog-section_btn', $page?->ID) ?? '';

$args = [
	'post_type' => 'product',
	'posts_per_page' => 4,
	'orderby' => 'date',
	'order' => 'DESC',
];

$query = new WP_Query($args);
?>

<?php if ($query->have_posts()): ?>
	<section class="section catalog-section" id="catalog-section">
		<div class="container catalog-section__container">
			<h2 class="catalog-section__title title-2">
				<?php echo esc_html($title); ?>
			</h2>
			<ul class="catalog-section__list grid">
				<?php while ($query->have_posts()):
					$query->the_post(); ?>
					<li class="catalog-section__item catalog-section-item">
						<a class="catalog-section-item__link-wrapper" href="<?php the_permalink(); ?>">
							<div class="catalog-section-item__image image-box">
								<?php the_post_thumbnail('medium'); ?>
							</div>
							<h3 class="catalog-section-item__title title-2">
								<?php the_title(); ?>
							</h3>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
			<a class="catalog-section__link btn" href="<?php echo esc_url(home_url('/shop')); ?>">
				<?php echo esc_html($btn) ?>
			</a>
		</div>
	</section>
<?php endif; ?>

<?php wp_reset_postdata(); ?>