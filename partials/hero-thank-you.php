<?php
$page = get_page_by_path('thank-you');

$title = get_field('hero_title', $page) ?? '';
$descr = get_field('hero_descr', $page) ?? '';
$image = get_field('image', $page) ?? '';

?>
<section class="hero-thank-you hero-404 jarallax" id="hero-thank-you"
	style="background-image: url('<?php echo esc_url($image) ?>');">
	<div class="container hero-404__container">
		<h1 class="hero-404__title  hero-thank-you__title title-2">
			<?php echo esc_html($title) ?>
		</h1>
		<div class="hero-404__descr  hero-thank-you__descr descr">
			<?php echo wp_kses_post($descr) ?>
		</div>
		<div class="hero-thank-you__form">
			<p class="hero-thank-you__text">
				Проверьте правильность данных
			</p>
			<input class="hero-thank-you__input" type="text" placeholder="Имя" readonly="true"
				value="<?php echo $_GET['text-884'] ?? ''; ?>" />
			<input class="hero-thank-you__input" type="text" placeholder="Телефон" readonly="true"
				value="<?php echo $_GET['tel-836'] ?? ''; ?>" />
			<a class="hero-thank-you__btn btn" href="<?php echo esc_url(home_url('/')); ?>">
				Вернуться на главную
			</a>
		</div>
	</div>
</section>