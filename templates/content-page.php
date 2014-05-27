<?php while (have_posts()) : the_post(); ?>

<?php if ( has_post_thumbnail() ) { ?>
	<div class="page_img">
	 	<?php the_post_thumbnail(); ?>
	</div>
<?php } ?>

  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
