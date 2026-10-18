<?php
$image = get_field('footer_image', 'options') ?? '';
$nav_title = get_field('footer_nav_title', 'options') ?? '';
$contacts_title = get_field('footer_contacts_title', 'options') ?? '';
$links = get_field('footer_links', 'options') ?? '';
$copy = get_field('footer_copy', 'options') ?? '';


$address_title = get_field('contacts_footer_address_title', 'options') ?? '';
$address = get_field('contacts_address', 'options') ?? '';

$phones_title = get_field('contacts_footer_phones_title', 'options') ?? '';
$phones = get_field('contacts_phones', 'options') ?? '';

$email_title = get_field('contacts_footer_email_title', 'options') ?? '';
$email = get_field('contacts_email', 'options') ?? '';

?>
</main>

<footer class="footer jarallax" style="background-image: url('<?php echo esc_attr($image) ?>');">
	<div class="container footer__container">
		<div class="footer__logo logo">
			<?php the_custom_logo(); ?>
		</div>
		<nav class="footer__nav footer-menu">
			<h3 class="footer__title title-3">
				<?php echo esc_html($nav_title) ?>
			</h3>
			<?php
			$menu = wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'container' => false,
					'menu_class' => 'footer-menu__list',
					'depth' => 1,
				)
			);
			echo htmlspecialchars($menu); ?>
		</nav>
		<div class="footer__contacts">
			<h3 class="footer__title title-3">
				<?php echo esc_html($contacts_title) ?>
			</h3>
			<ul class="footer__contacts-list footer-contacts">
				<li class="footer-contacts__item">
					<h4 class="footer-contacts__title">
						<?php echo esc_html($address_title) ?>
					</h4>
					<address class="footer-contacts__descr descr">
						<?php echo wp_kses_post($address) ?>
					</address>
				</li>
				<li class="footer-contacts__item">
					<h4 class="footer-contacts__title">
						<?php echo esc_html($phones_title) ?>
					</h4>
					<?php if ($phones): ?>
						<ul class="footer-contacts__list">
							<?php foreach ($phones as $item): ?>
								<li class="footer-contacts__list-item footer-contacts-phone-item">
									<p class="footer-contacts-phone-item__title">
										<?php echo esc_html($item['title']) ?>
									</p>
									<a class="footer-contacts-phone-item__link link"
										href="tel:+<?php echo esc_attr(correct_phone($item['phone'])) ?>">
										<?php echo esc_html($item['phone']) ?>
									</a>
									<?php if ($item['messengers']): ?>
										<ul class="footer-contacts-phone-item__list">
											<?php foreach ($item['messengers'] as $mess): ?>
												<li class="footer-contacts-phone-item__item">
													<a class="footer-contacts-phone-item__sublink" href="<?php echo esc_attr($mess['phone']) ?>"
														aria-label="Мессенджер">
														<img src="<?php echo esc_attr($mess['image']) ?>" alt="Мессенджер">
													</a>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</li>
				<li class="footer-contacts__item">
					<h4 class="footer-contacts__title">
						<?php echo esc_html($email_title) ?>
					</h4>
					<?php if ($email): ?>
						<ul class="footer-contacts__list">
							<?php foreach ($email as $item): ?>
								<li class="footer-contacts__list-item footer-contacts-phone-item">
									<a class="footer-contacts-phone-item__link link"
										href="mailto:<?php echo esc_attr($item['link']) ?>">
										<?php echo esc_html($item['link']) ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</li>
			</ul>
		</div>
		<div class="footer__info">
			<small class="footer__copy">&copy; <?php echo esc_html($copy); ?> <?php echo date('Y'); ?></small>
			<?php if ($links): ?>
				<?php foreach ($links as $item): ?>
					<a href="<?php echo esc_attr($item['link']['url']) ?>" target="_blank">
						<?php echo esc_html($item['link']['title']) ?>
					</a>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</footer>

<?php get_template_part('partials/modal-call') ?>
<?php get_template_part('partials/cookie-banner') ?>

<?php wp_footer(); ?>
</body>

</html>