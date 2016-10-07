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
	alert('HI');
	jQuery("document").ready(function(){
		alert('jQuery');
	});
</script>
OUTPUT;
	}