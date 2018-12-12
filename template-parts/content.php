<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<h2><a href="<?php if( !is_page() || !/*  */is_single() ) the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php the_content(); ?> </p>
		<?php if (!is_page()): ?>
			<p class="byline">
				Author: <?php the_author(); ?> | 
				Date: <?php the_time('M,j,Y'); 
				if (has_category() ): ?> |
				Categories: <?php the_category(','); ?>
				<?php endif; ?>
			</p>
		<?php endif; ?>
</article>