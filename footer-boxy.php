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
<script type="text/javascript" language="javascript">llactid=13443</script> 
<script type="text/javascript" language="javascript" src="http://t2.trackalyzer.com/trackalyze.js"></script>
<?php if (is_page_template('page-landing-page.php') || is_page('contact')) { ?>
  <script type="text/javascript">llfrmid=13443</script> 
  <script type="text/javascript" src="https://formalyzer.com/formalyze_init.js"></script>
  <script type="text/javascript" src="https://formalyzer.com/formalyze_call_secure.js"></script>
  <script>jQuery('.gform_button').on('click',function(){formalyzer_call_onclick(13443);});</script>
<?php } ?>
</body>
</html>