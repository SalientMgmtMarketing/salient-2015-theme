<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Salient 2015
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
      <div class="site-info wrap">
		<?php get_sidebar( 'footer' ); ?>
      </div>
	</footer>

<?php wp_footer(); ?>
<script>
window.addEventListener('load',function(){
  var setint_thanku = setInterval(function(){
    if(jQuery('._form-thank-you:contains("Thank You! A link to the case study has been delivered to the email address that was provided.")').is(":visible"))
    {
        __gaTracker('send','event','form','submit','download case study');
        clearInterval(setint_thanku);
    }
  },500);
})
</script>
</body>
</html>
