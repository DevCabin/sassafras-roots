<footer class="content-info" role="contentinfo" id="footer_main">
	<div class="container">
	  <div class="row">
	    <div class="col-lg-12">
		<div class="col-md-4">
	       	 <?php dynamic_sidebar('sidebar-footer'); ?>
		</div>
		<div class="col-md-4">
		<?php dynamic_sidebar('sidebar-footer-2'); ?>
		</div>
		<div class="col-md-4">		
		<?php dynamic_sidebar('sidebar-footer-3'); ?>
		</div>
		<div class="col-md-12">
			 <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
		</div>
	     
	    </div>
	  </div>
	</div>
</footer>

<script type="text/javascript" charset="utf-8">
<?php /*
// To replace placeholder text in sidebar search field
$(document).ready(function(){ 
  $('.sidebar').find(".search-field").each(function(ev)
  {
      if(!$(this).val()) { 
     $(this).attr("placeholder", "");
  }
  });
});

//old bootstrappy slider just in case

$(function(){
    $('.carousel').carousel({
      interval: 2000
    });
});

$( "#myCarousel .item:first" ).addClass( "active" );
$( "#myOtherCarousel .item:first" ).addClass( "active" );


// begin new hot Flux Slider
*/ ?>
			$(function(){
				if(!flux.browser.supportsTransitions)
					alert("Flux Slider requires a browser that supports CSS3 transitions");
					
				window.f = new flux.slider('#slider', {
					autoplay: true,
					pagination: false, 
					captions: true, // pulls from title tag
					delay: 5000, //default is 4000
					transitions: [ 'blinds' ]
				});
		
				// Setup a listener for user requested transitions
				$('div#transitions').bind('click', function(event){
					event.preventDefault();
					
					// below is the function that makes the UL links above work, you can set the transition ONLY IF they HAVE to 
					// click a link to navigate the slides. useful in some cases.
					// note div#transitions, you have to put navigation in there if you are going to use this

				    // window.f.next(event.target.href.split('#')[1]);
					
				});
			});

					// this is the funciton to manually set the transition no matter what triggers it. See the UL for your options.
					// window.myFlux = new flux.slider('#slider', { transitions: [ 'bars3d' ] });

</script>

<?php wp_footer(); ?>
