<div class="row">
	<div class="container">


		
	</div>
</div> <!-- row -->

<div class="row sub_slide">
	<div class="container">

		<div class=""></div>
		
	</div>

</div>
<?php /*
// the oft needed recent posts area code. Also, check functions.php for the limit excerpt function!
<div class="recent_posts">

				<h3>STAY UP TO DATE ON ALL OF OUR RECENT NEWS</h3>

				<?php
				wp_reset_query();
				$args = array(
					'cat'      => 4,
					'posts_per_page'    => 2
					/*
					'year'     => $current_year,
					'monthnum' => $current_month,
					'order'    => 'ASC'
					
				);
				query_posts( $args );
				while ( have_posts() ) : the_post();
				?> 
				
				  <div class="home_single">
					<div class="meta">POSTED ON <?php the_time('l, F jS, Y') ?></div>
						<div class="recent_news"><?php the_title(); ?></div>   
						<div class="excerpt col-md-9">
							<?php
							  $excerpt = get_the_excerpt();
							  echo string_limit_words($excerpt,8);
							?>
						</div>
						<div class="col-md-3 read_more pull-right">
							<a href="<?php the_permalink(); ?>">READ MORE</a>
						</div>
						<div class="clear clearfix"></div>
				  </div>
				

				<?php
				endwhile; wp_reset_query();
				?> 		
						 
<div class="clear clearfix"></div>

				<div id="archive">
					<a href="">CLICK HERE FOR OUR ARCHIVE</a>
				</div>

				</div>
*/ ?>
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
