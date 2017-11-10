<?php

/*
	Template Name: Sample Page
 
 */
 ?> 
 <header>
 <?php get_header(); ?>
 </header>

 
 <?php 
if (have_posts()):
    while (have_posts()): the_post();  ?>
 <article>
 <h1><?php the_title(); ?></h1>
 <div><?php the_post_thumbnail("medium"); ?></div>
 <p><?php echo get_the_content(); ?></p>
 
	<?php endwhile; endif; ?>
 </article>
 
 <footer>
 <?php get_footer(); ?>
 </footer>
 
 