<?php
$phone = get_field('header_contacts', 'options')['phone'] ?? '';
$messengers = get_field('header_contacts', 'options')['messengers'] ?? '';
?>
<a class="header-menu-contacts__phone link" href="tel:+<?php echo esc_attr(correct_phone($phone)) ?>">
	<?php echo esc_html($phone) ?>
</a>
<?php if ($messengers): ?>
	<ul class="header-menu-contacts__social social">
		<?php foreach ($messengers as $item): ?>
			<li class="social__item">
				<a class="social__link" href="<?php echo esc_attr($item['phone']) ?>" aria-label="Мессенджер">
					<img src="<?php echo esc_attr($item['icon']) ?>" alt="Мессенджер">
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>