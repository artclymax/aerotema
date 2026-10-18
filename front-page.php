<?php get_header(); ?>

<?php get_template_part('partials/hero'); ?>

<?php
$page = get_page_by_path('home');
$image = get_field('block_bg', $page) ?? '';
?>
<div class="bg-block jarallax" style="--bg: url(<?php echo esc_attr($image) ?>);">
	<?php get_template_part('partials/about'); ?>
	<?php get_template_part('partials/tech'); ?>
</div>
<?php get_template_part('partials/why-choose'); ?>
<?php get_template_part('partials/catalog-section'); ?>
<?php get_template_part('partials/steps'); ?>
<?php get_template_part('partials/partners'); ?>
<?php get_template_part('partials/form-main'); ?>


<?php get_footer(); ?>