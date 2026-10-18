<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrapper">
		<?php
		$btn = get_field('header_btn', 'options') ?? '';
		?>
		<header class="header" data-auto-calc="header, height">
			<div class="container header__container">
				<div class="header__logo logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="header__contacts header-menu-contacts visible-tablet">
					<?php get_template_part('partials/header-menu-contacts'); ?>
				</div>
				<nav class="header__menu header-menu">
					<?php
					$menu = wp_nav_menu(
						array(
							'theme_location' => 'header-menu',
							'container' => false,
							'menu_class' => 'header-menu__list',
							'depth' => 1
						)
					);
					echo htmlspecialchars($menu); ?>
					<div class="header-menu__contacts header-menu-contacts">
						<?php get_template_part('partials/header-menu-contacts'); ?>
					</div>
					<a class="header-menu-contacts__btn btn" type="button" href="<?php echo esc_attr($btn['url'])?>">
						<?php echo esc_html($btn['title'])?>
					</a>
				</nav>
				<button class="header__burger-btn burger-btn visible-tablet" type="button" aria-label="Открыть/закрыть меню">
					<span></span>
				</button>
			</div>
		</header>
		<main class="main">
			<?php
			if (!is_front_page() && !is_404() && !is_page('thank-you') && !is_product()): ?>
				<?php get_template_part('partials/hero-page'); ?>
			<?php endif; ?>