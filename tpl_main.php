<?php
/*
Template Name: Main
*/
?>

<?php get_header(); ?>

<section id="welcome">
	<?php get_template_part('blocks/p_main/welcome') ?>
</section>
<section id="about">
	<?php get_template_part('blocks/p_main/about') ?>
</section>
<section id="contactus">
	<?php get_template_part('blocks/p_main/contactus') ?>
</section>
<section id="solutions">
	<?php get_template_part('blocks/p_main/solutions') ?>
</section>
<section id="protect">
	<?php get_template_part('blocks/p_main/protect') ?>
</section>
<section id="partners">
	<?php get_template_part('blocks/p_main/partners') ?>
</section>
<section id="map">
	<?php get_template_part('blocks/p_main/map') ?>
</section>

<?php get_footer(); ?>