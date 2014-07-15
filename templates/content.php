<?php if ( has_post_thumbnail() ) { ?>

 <article <?php post_class(); ?>>
 <div class="col-md-3">
    <div class="post_img">
  	 	<?php the_post_thumbnail(); ?>
  	</div>
 </div>
 <div class="col-md-9">
	  <header>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part('templates/entry-meta'); ?>
	  </header>
	  <div class="entry-summary">
		<?php the_excerpt(); ?>
	  </div>
  </div>
</article> 	

<?php } else { ?>

<article <?php post_class(); ?>>

  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>

<?php } ?>
