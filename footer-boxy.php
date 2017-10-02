<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * PHP Version 5
 *
 * @category Custom
 *
 * @package Salient
 *
 * @author Paul Stonier <pstonier@salient.com>
 *
 * @license All Rights Reserved https://en.wikipedia.org/wiki/All_rights_reserved
 *
 * @link https://pstonier@source.salient.com/scm/mwp/salient-brand.git
 */
?>

    </div><!-- #content -->


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
