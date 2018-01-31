<?php
/*
* This is the base sidebar template. If you add an additional sidebar called 'sidebar2'
* and want to make changes to your sidebar, copy this template to a file called
* 'sidebar-sidebar2.php'.
*
*/
?>

<div id="sidebar1" class="sidebar col-sm-4" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php endif; ?>

</div>
