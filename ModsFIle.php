<?php
/*
Plugin Name: TheNotesLiteThemeMods
Plugin URI: http://customrayguns.com/
Description: 
Version: 0.1
Author: Jim Maguire
Author URI: http://customrayguns.com/
*/

//namespace TheNotesLiteThemeMods;



add_action( 'wp_footer', 'your_function' );
	
function your_function(){

echo '
<script>
	jQuery("document").ready(function(){
		jQuery(".footer-copyright-wrapper").hide();
	});
</script>
';
	}