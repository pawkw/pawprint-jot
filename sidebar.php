<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PawPrint_Jot
 */

if ( is_active_sidebar( 'sidebar-1' ) ) {
?>

<aside id="secondary" class="widget-area col-md-3">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<?php } ?>
</div> <!-- row from index.php, etc. -->
</div> <!-- container from index.php, etc. -->
