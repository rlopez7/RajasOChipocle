<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/skrollr.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/_main.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Google Analytics: change UA-839919-3 to be your site's ID. 
<script>
    var _gaq=[['_setAccount','UA-839919-3'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>-->
<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({interval: 5000});
  });
</script>
<?php wp_footer(); ?>
</body>
</html>
