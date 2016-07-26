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

	
<?php wp_footer(); ?>

<!-- LeadLander Code -->
<script type="text/javascript" language="javascript"> 
      var sf14gv = 13443; 
      (function() { 
      var sf14g = document.createElement('script'); sf14g.type = 'text/javascript'; sf14g.async = true; 
      sf14g.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 't.sf14g.com/sf14g.js'; 
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sf14g, s); 
      })(); 
</script>
<?php if (is_page_template('page-landing-page.php') || is_page('contact') || is_page('contact-us') ) { ?>
  <script type="text/javascript">llfrmid=13443</script> 
  <script type="text/javascript" src="https://formalyzer.com/formalyze_init.js"></script>
  <script type="text/javascript" src="https://formalyzer.com/formalyze_call_secure.js"></script>
  <script>jQuery('.gform_button').on('click',function(){formalyzer_call_onclick(13443);});</script>
<?php } ?>
</body>
</html>