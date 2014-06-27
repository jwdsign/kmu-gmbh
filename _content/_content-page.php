<?php
/**
 * @package fotodako
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('_global-content'); ?>>
	
	<?php get_template_part('_modules/_module-entry-header');?>

	<?php get_template_part('_modules/_module-entry-content');?>

	<?php get_template_part('_modules/_module-entry-footer');?>

</article>
