<?php
/*
Plugin Name: TheNotesLiteThemeMods
Plugin URI: http://customrayguns.com/
Description: 
Version: 0.1
Author: Jim Maguire
Author URI: http://customrayguns.com/
*/

namespace TheNotesLiteThemeMods;

//die ('hello');

add_action( 'wp_footer', '\TheNotesLiteThemeMods\recomveCopyrightInfo' );
	
function recomveCopyrightInfo(){

$rayGunIMG_URL = "http://messagetothefish.com/wp-content/plugins/TheNotesLiteThemeMods/img/ray_gun.png";

$output = <<<OUTPUT
<script>
	jQuery("document").ready(function(){
		jQuery(".footer-copyright-wrapper").html('<span style="float:left;">Copyright <a href = "http://messagetothefish.com">&copy;</a> Message To The Fish. All rights reserved. This site is a <a href = "http://customrayguns.com">Custom Ray Gun.<img align = "MIDDLE" src = "$rayGunIMG_URL" /></a>.</span>');
		jQuery(".brand").html('<span>Customer Ray Guns</span>');
	});
	
</script>
<style>
     a {text-decoration:underline !important;}
</style>

OUTPUT;

	echo $output;
	}
