<?php
$page = 'options';

$title = get_field('page404_title', $page) ?? '';
$descr = get_field('page404_descr', $page) ?? '';
$btn = get_field('page404_btn', $page) ?? '';
$image = get_field('page404_image', $page) ?? '';

?>

<section
	class="hero-404 jarallax"
	id="hero-404"
	style="background-image: url('<?php echo esc_url($image)?>');"
>
	<div class="container hero-404__container">
		<h1 class="hero-404__title title-1">
			<?php echo esc_html($title)?>
		</h1>
		<div class="hero-404__descr descr">
			<?php echo wp_kses_post($descr)?>
		</div>
		<a class="hero-404__btn btn" href="<?php echo esc_html($btn['url'])?>">
			<?php echo esc_html($btn['title'])?>
		</a>
	</div>
</section>
