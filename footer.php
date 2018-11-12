<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Salient
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info wrap">
		<?php get_sidebar( 'footer' ); ?>
	</div>
</footer>
<?php if ( get_field( 'gdpr_cookies_message', 'option' ) ) { ?>
	<div class="gdpr-cookie-banner gdpr-hide">
		<?php the_field( 'gdpr_cookies_message', 'option' ); ?>
		<button class="close-banner">
			<?php echo '<img src="' . esc_attr( get_template_directory_uri() ) . '/assets/images/close-X-icon.svg" />'; ?>
			<span class="screen-reader-text">Close Message Window</span>
		</button>
	</div>
<?php } ?>

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
