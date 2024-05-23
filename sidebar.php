<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
// if ( is_page() ) {
//     dynamic_sidebar('sidebar-2');
// }

?>

<aside id="secondary" class="widget-area">
	<?php
	if ( is_page() ) {
		dynamic_sidebar( 'sidebar-1' );
	} else {
		dynamic_sidebar( 'sidebar-2' );
	}
	
	?>
	<?php get_template_part( 'template-parts/work-categories' ); ?>
	
</aside><!-- #secondary -->
