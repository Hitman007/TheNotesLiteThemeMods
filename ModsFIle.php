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

$output = <<<OUTPUT
<script>
	jQuery("document").ready(function(){
		alert('jQuery');
		//jQuery(".footer-copyright-wrapper").hide();
		jQuery(".footer-copyright-wrapper").html("<span style="float:left;">Copyright <a href = "http://jimsbigbrain.com">&copy;</a> Jim\'s Big Brain. All rights reserved. <a href = "http://jimsbigbrain.com/contact/">Contact us.</a> This site is a <a href = "http://customrayguns.com">Custom Ray Gun.<img align = "MIDDLE" src = "http://nevadacathouse.biz/wp-content/uploads/2012/12/ray_gun.gif" /></a>.</span>");
	});
</script>
OUTPUT;
	}