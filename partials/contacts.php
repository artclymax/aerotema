<?php
$page = get_page_by_path('contacts');

$title = get_field('contacts_title', $page) ?? '';
$note = get_field('contacts_note', $page) ?? '';

$company = get_field('contacts_company_name', 'options') ?? '';
$company_descr = get_field('contacts_company_descr', 'options') ?? '';
$address = get_field('contacts_address', 'options') ?? '';
$phones = get_field('contacts_phones', 'options') ?? '';
$email = get_field('contacts_email', 'options') ?? '';
$time = get_field('contacts_time', 'options') ?? '';

$form_title = get_field('form_contacts_title', 'options') ?? '';
$form_small = get_field('form_contacts_small', 'options') ?? '';
$image = get_field('form_main_image', 'options') ?? '';
$country = get_field('form_main_country', 'options') ?? '';
$data = [];

if ($country) {
	foreach ($country as $item) {
		$data[] = [
			'name' => $item['title']
		];
	}
}

$json = htmlspecialchars(json_encode($data, JSON_UNESCAPED_UNICODE), ENT_QUOTES, 'UTF-8');
?>
<div class="cf-data-has-placeholder" data-cf-data="<?= $json ?>"></div>
<section class="section contacts" id="contacts">
	<div class="container contacts__container">
		<div class="contacts__body">
			<h2 class="contacts__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="contacts__flex-box">
				<div class="contacts__content">
					<ul class="contacts__info-list contacts-info-list">
						<li class="contacts-info-list__item icon icon--company">
							<div class="contacts-info-list__wrapper">
								<h3 class="contacts-info-list__title title-3">
									<?php echo esc_html($company) ?>
								</h3>
								<div class="contacts-info-list__descr descr">
									<?php echo wp_kses_post($company_descr) ?>
								</div>
							</div>
						</li>
						<li class="contacts-info-list__item icon icon--address">
							<address class="contacts-info-list__address descr">
								<?php echo wp_kses_post($address) ?>
							</address>
						</li>
						<li class="contacts-info-list__item icon icon--phone">
							<?php if ($phones): ?>
								<ul class="contacts-info-list__list footer-contacts__list">
									<?php foreach ($phones as $item): ?>
										<li class="footer-contacts__list-item footer-contacts-phone-item">
											<a class="footer-contacts-phone-item__link link"
												href="tel:+<?php echo esc_attr(correct_phone($item['phone'])) ?>">
												<?php echo esc_html($item['phone']) ?>
											</a>
											<p class="footer-contacts-phone-item__title">
												<?php echo esc_html($item['title']) ?>
											</p>
											<?php if ($item['messengers']): ?>
												<ul class="footer-contacts-phone-item__list">
													<?php foreach ($item['messengers'] as $mess): ?>
														<li class="footer-contacts-phone-item__item">
															<a class="footer-contacts-phone-item__sublink"
																href="<?php echo esc_attr($mess['phone']) ?>" aria-label="Мессенджер">
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
						<li class="contacts-info-list__item icon icon--email">
							<?php if ($email): ?>
								<ul class="contacts-info-list__list footer-contacts__list">
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
						<li class="contacts-info-list__item icon icon--time">
							<div class="contacts-info-list__descr descr">
								<?php echo wp_kses_post($time) ?>
							</div>
						</li>
					</ul>
					<?php if ($note): ?>
						<div class="contacts__note contacts-note">
							<h3 class="contacts-note__title title-2">
								<?php echo esc_html($note['title']) ?>
							</h3>
							<div class="contacts-note__descr descr">
								<?php echo wp_kses_post($note['descr']) ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<div class="contacts__form contacts-form jarallax" style="--bg: url('<?php echo esc_attr($image); ?>');">
					<h3 class="contacts-form__title title-3">
						<?php echo esc_html($form_title) ?>
					</h3>
					<div class="contacts-form__form">
						<?php echo do_shortcode('[contact-form-7 id="78656c2" title="Оставить заявку на странице контакты"]') ?>
					</div>
					<small class="contacts-form__small">
						<?php echo esc_html($form_small) ?>
					</small>
				</div>
			</div>
		</div>
		<div class="contacts__map">
			<?php the_content() ?>
		</div>
	</div>
</section>