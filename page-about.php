<?php get_header(); ?>

<?php get_template_part('partials/about', null, array(
	'has_header' => false
)); ?>

<?php get_template_part('partials/specialty'); ?>
<?php get_template_part('partials/history'); ?>
<?php get_template_part('partials/steps'); ?>

<?php get_template_part('partials/form-main', null, array(
	'title' => get_field('form_about_title', 'options'),
	'subtitle' => get_field('form_about_subtitle', 'options'),
)); ?>

<?php get_footer(); ?>