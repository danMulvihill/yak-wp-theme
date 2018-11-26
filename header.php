
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<header id="masthead" class="site-header">
	<h1><a href="<?php echo esc_url(home_url('/')) ?>">
		<?php bloginfo("name"); ?>
		</a></h1>
	<?php $sample = get_bloginfo("description") ?>
	<?php if( is_front_page() && !is_home() ): ?>
		<p><?php echo $sample ?></p>
	<?php endif; ?>
</header>
<nav id="site-navigation" class="main-navigation" role="navigation">
	<?php wp_nav_menu([
		'theme_location' => 'central-menu'
		
	])  ?>
</nav>

<div id="main" class="main site-content">
<!-- DISPLAYS TEMPLATE PAGE For trouble-shooting? -->
<!-- 

	<div id="output">
	<?php 
	//  if(is_index) echo "index.php";
	 ?>
</div>
-->

<!-- END WP HEADER -->