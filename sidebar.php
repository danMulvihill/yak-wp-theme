<?php
if(! is_active_sidebar('main-sidebar')){
	return;
}
?>

<aside id="secondary" class="secondary widget-area">
    <?php dynamic_sidebar( "main-sidebar"); ?>
</aside>
    
