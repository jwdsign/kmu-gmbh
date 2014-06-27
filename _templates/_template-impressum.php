<?php
/**
 * Template Name: Impressum
 * @package lohnteam
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( '_modules/_module-slider' ); ?>
	<?php get_template_part('_snippets/_snippet-breadcrumb');?>	
	<?php get_template_part( '_content/_content-impressum' ); ?>
	<?php get_template_part( '_modules/_module-related' ); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
