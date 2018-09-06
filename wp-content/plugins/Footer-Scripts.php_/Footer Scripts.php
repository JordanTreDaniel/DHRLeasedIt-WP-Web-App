<?php
/**
Plugin Name: Footer Scripts
*/
add_action( 'wp_footer', 'my_footer_scripts' );
function my_footer_scripts(){
  ?>
  <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXX"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>console.log("Footer Scripts Plugin is operational");</script>
  <?php
}