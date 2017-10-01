<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BeOnePage
 */

if ( ! is_active_sidebar( 'sidebar-right' ) ) {
	return;
}
?>


<?php dynamic_sidebar( 'sidebar-right' ); ?>


