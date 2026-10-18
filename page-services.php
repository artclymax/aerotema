<?php get_header(); ?>

<?php get_template_part('partials/service-features'); ?>
<?php get_template_part('partials/clients'); ?>
<?php get_template_part('partials/process'); ?>

<?php get_template_part('partials/form-main', null, array(
	'title' => '',
	'subtitle' => get_field('form_services_subtitle', 'options'),
	'posttitle' => get_field('form_services_posttitle', 'options'),
)); ?>

<?php get_footer(); ?>