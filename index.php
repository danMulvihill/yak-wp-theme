
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<header>
	<h1><a href="<?php echo home_url('/') ?>">
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

<!-- end header.php? -->

<div id="main" class="main">
<!-- DISPLAYS TEMPLATE PAGE For trouble-shooting? -->
<!-- 

	<div id="output">
	<?php 
	//  if(is_index) echo "index.php";
	 ?>
</div>
-->

<!-- END WP HEADER -->

<div class="primary">
<?php 
if (have_posts()):
    while (have_posts()): the_post(); 
	    get_template_part('template-parts/content');
    endwhile;
else: 
    get_template_part('template-parts/content','none');
endif;
?>
   
</div>
    
<aside id="secondary" class="secondary widget-area">
    <?php dynamic_sidebar( "main-sidebar"); ?>
</aside>
    

    
</div> <!-- main -->

<!-- START WP FOOTER -->
<?php wp_footer(); ?>
</body>
</html>



