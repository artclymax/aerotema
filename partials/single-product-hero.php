<?php
global $product;
$gallery_ids = $product->get_gallery_image_ids();
$main_image_id = $product->get_image_id();
$attributes = get_product_attributes_array($product);

$image = get_field('product_image', get_page_by_path('shop')) ?? get_field('image', get_page_by_path('shop'));
?>
<section class="single-product-hero jarallax" id="single-product-hero"
	style="background-image: url('<?php echo esc_attr($image) ?>');">
	<div class="container single-product-hero__container">
		<div class="single-product-hero__header">
			<?php
			woocommerce_breadcrumb([
				'delimiter' => '',
				'before' => '<span>',
				'after' => '</span>',
			]);
			?>
			<h1 class="single-product-hero__title title-1">
				<?php the_title(); ?>
			</h1>
		</div>
		<div class="single-product-hero__body">
			<div class="single-product-hero__gallery single-product-hero-gallery ">
				<?php if (!empty($gallery_ids)): ?>
					<div class="swiper single-product-hero-gallery-swiper">
						<div class="swiper-wrapper single-product-hero-gallery-swiper__wrapper">
							<?php foreach ($gallery_ids as $image_id): ?>
								<div class="swiper-slide single-product-hero-gallery-slide">
									<a class="single-product-hero-gallery-slide__wrapper-link image-box"
										href="<?php echo esc_url(wp_get_attachment_image_url($image_id, 'full')); ?>"
										data-fancybox="gallery">
										<?php echo wp_get_attachment_image($image_id, 'large'); ?>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="single-product-hero-gallery__thumb-swiper">
						<button
							class="single-product-hero-gallery-thumb-swiper__btn single-product-hero-gallery-thumb-swiper__btn-prev swiper-btn swiper-btn__prev"
							type="button">
							<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M19.6143 7.14771C20.1637 7.03844 20.7334 7.09449 21.251 7.30884C21.7685 7.52321 22.2111 7.8861 22.5225 8.35181C22.8337 8.8176 22.9999 9.36581 23 9.92603V15.5002H27.5C28.0523 15.5002 28.5 15.948 28.5 16.5002V27.5002C28.4999 28.0524 28.0522 28.5002 27.5 28.5002H23V34.0745C22.9998 34.6347 22.8338 35.1829 22.5225 35.6487C22.2111 36.1144 21.7685 36.4773 21.251 36.6917C20.7334 36.906 20.1637 36.962 19.6143 36.8528C19.065 36.7435 18.5602 36.4742 18.1641 36.0784L6.08984 24.0032H6.08887C5.558 23.4719 5.25984 22.7513 5.25977 22.0002C5.25978 21.2492 5.558 20.5286 6.08887 19.9973H6.08984L18.1641 7.9231V7.92212C18.5602 7.52624 19.065 7.25699 19.6143 7.14771ZM20.0049 9.10864C19.8433 9.14078 19.6946 9.22069 19.5781 9.33716L7.50391 21.4114C7.34781 21.5676 7.25978 21.7794 7.25977 22.0002C7.25984 22.2211 7.34781 22.4329 7.50391 22.5891L19.5781 34.6633C19.6946 34.7798 19.8433 34.8597 20.0049 34.8918C20.1663 34.9239 20.3342 34.907 20.4863 34.844C20.6383 34.7809 20.7689 34.6741 20.8604 34.5374C20.929 34.4346 20.9732 34.3178 20.9912 34.1965L21 34.0745V27.5002C21 26.9481 21.4479 26.5004 22 26.5002H26.5V17.5002H22C21.448 17.5 21.0001 17.0523 21 16.5002V9.92603L20.9912 9.80396C20.9732 9.6827 20.929 9.56591 20.8604 9.46313C20.7689 9.32627 20.6384 9.21958 20.4863 9.15649C20.3342 9.09349 20.1664 9.07662 20.0049 9.10864ZM33 15.5002C33.5523 15.5002 34 15.948 34 16.5002V27.5002C33.9999 28.0524 33.5522 28.5002 33 28.5002C32.4478 28.5002 32.0001 28.0524 32 27.5002V16.5002C32 15.948 32.4477 15.5002 33 15.5002ZM38.5 15.5002C39.0523 15.5002 39.5 15.948 39.5 16.5002V27.5002C39.4999 28.0524 39.0522 28.5002 38.5 28.5002C37.9478 28.5002 37.5001 28.0524 37.5 27.5002V16.5002C37.5 15.948 37.9477 15.5002 38.5 15.5002Z"
									fill="currentColor" />
							</svg>
						</button>
						<div class="swiper single-product-hero-gallery-thumb-swiper">
							<div class="swiper-wrapper single-product-hero-gallery-thumb-swiper__wrapper">
								<?php foreach ($gallery_ids as $image_id): ?>
									<div class="swiper-slide single-product-hero-gallery-thumb-slide">
										<div class="single-product-hero-gallery-thumb-slide__image image-box">
											<?php echo wp_get_attachment_image($image_id, 'media'); ?>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<button
							class="single-product-hero-gallery-thumb-swiper__btn single-product-hero-gallery-thumb-swiper__btn-next swiper-btn swiper-btn__next"
							type="button">
							<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M24.3857 7.14771C23.8363 7.03844 23.2666 7.09449 22.749 7.30884C22.2315 7.52321 21.7889 7.8861 21.4775 8.35181C21.1663 8.8176 21.0001 9.36581 21 9.92603V15.5002H16.5C15.9477 15.5002 15.5 15.948 15.5 16.5002V27.5002C15.5001 28.0524 15.9478 28.5002 16.5 28.5002H21V34.0745C21.0002 34.6347 21.1662 35.1829 21.4775 35.6487C21.7889 36.1144 22.2315 36.4773 22.749 36.6917C23.2666 36.906 23.8363 36.962 24.3857 36.8528C24.935 36.7435 25.4398 36.4742 25.8359 36.0784L37.9102 24.0032H37.9111C38.442 23.4719 38.7402 22.7513 38.7402 22.0002C38.7402 21.2492 38.442 20.5286 37.9111 19.9973H37.9102L25.8359 7.9231V7.92212C25.4398 7.52624 24.935 7.25699 24.3857 7.14771ZM23.9951 9.10864C24.1567 9.14078 24.3054 9.22069 24.4219 9.33716L36.4961 21.4114C36.6522 21.5676 36.7402 21.7794 36.7402 22.0002C36.7402 22.2211 36.6522 22.4329 36.4961 22.5891L24.4219 34.6633C24.3054 34.7798 24.1567 34.8597 23.9951 34.8918C23.8337 34.9239 23.6658 34.907 23.5137 34.844C23.3617 34.7809 23.2311 34.6741 23.1396 34.5374C23.071 34.4346 23.0268 34.3178 23.0088 34.1965L23 34.0745V27.5002C23 26.9481 22.5521 26.5004 22 26.5002H17.5V17.5002H22C22.552 17.5 22.9999 17.0523 23 16.5002V9.92603L23.0088 9.80396C23.0268 9.6827 23.071 9.56591 23.1396 9.46313C23.2311 9.32627 23.3616 9.21958 23.5137 9.15649C23.6658 9.09349 23.8336 9.07662 23.9951 9.10864ZM11 15.5002C10.4477 15.5002 10 15.948 10 16.5002V27.5002C10.0001 28.0524 10.4478 28.5002 11 28.5002C11.5522 28.5002 11.9999 28.0524 12 27.5002V16.5002C12 15.948 11.5523 15.5002 11 15.5002ZM5.5 15.5002C4.94772 15.5002 4.5 15.948 4.5 16.5002V27.5002C4.50014 28.0524 4.9478 28.5002 5.5 28.5002C6.0522 28.5002 6.49986 28.0524 6.5 27.5002V16.5002C6.5 15.948 6.05228 15.5002 5.5 15.5002Z"
									fill="currentColor" />
							</svg>
						</button>
					</div>
				<?php else: ?>
					<a class="single-product-hero-gallery__image image-box"
						href="<?php echo esc_url(wp_get_attachment_image_url($main_image_id, 'full')); ?>" data-fancybox>
						<?php echo wp_get_attachment_image($main_image_id, 'large'); ?>
					</a>
				<?php endif; ?>
			</div>
			<div class="single-product-hero__content single-product-hero-content">
				<p class="single-product-hero-content__subtitle title-2">
					<?php the_field('product_type'); ?>
				</p>
				<div class="single-product-hero-content__descr descr">
					<?php the_content(); ?>
				</div>
				<?php if ($attributes): ?>
					<div class="single-product-hero-content__spec single-product-spec">
						<h3 class="single-product-spec__title title-4">
							Технические характеристики
						</h3>
						<ul class="single-product-spec__list">
							<?php foreach ($attributes as $attribute): ?>
								<li class="single-product-spec__item">
									<h4 class="single-product-spec__name">
										<?php echo esc_html($attribute['name']) ?>
									</h4>
									<p class="single-product-spec__value">
										<?php echo esc_html(implode('; ', $attribute['values'])) ?>
									</p>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
				<a class="single-product-hero-content__btn btn" href="<?php echo esc_url(get_field('product_link', get_page_by_path( 'shop' ))['url'])?>">
					<?php echo esc_html(get_field('product_link', get_page_by_path( 'shop' ))['title'])?>
				</a>
			</div>
		</div>
	</div>
</section>