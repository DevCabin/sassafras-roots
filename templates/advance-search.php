<?php // ADVANCE SEARCH IF NEEDED

 // if (is_page('116')) { ?>

<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  
<?php endwhile; ?>

<?php // from here http://www.sitepoint.com/add-advanced-search-wordpress-site/ ?> 
<div id="advanced_search">
	<form method="get" action="<?php bloginfo('url'); ?>">
	<fieldset>
	<input type="text" name="s" value="" placeholder="search&hellip;" maxlength="50" required="required" />
	<p>Refine search to posts containing chosen tags:</p>
	<?php
	// generate list of tags
	$tags = get_tags();
	foreach ($tags as $tag) {
		echo
			'<label>',
			'<input type="checkbox" name="taglist[]" value="',  $tag->slug, '" /> ',
			$tag->name,
			"</label>\n";
	}
	?>

	<br />
	<button type="submit">Search</button>
	</fieldset>
	</form>
	<p></p>
	<p></p>
</div>

<?php  // } else {  ?>