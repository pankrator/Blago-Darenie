<?php
/**
 * Plugin Name: Charity Plugin
 * Plugin URI: fsdfdsfds
 * Description: Charity plugin that addds functionality for creating charity campaigns and exchanging items and good for charity
 * Version: 1.0
 * Author: Sofia University - Students in second grade Computer Science and Software Engineering
 * Author URI: gsfsdfdsfs
 * License: "MIT"
 */
 
	require("charity-admin.php");
 	

// SEND EMAIL ONCE POST IS PUBLISHED

function notify_new_post($post_id) {
   echo "<script>console.log('success')</console>";
}

add_action( 'publish_post', 'notify_new_post' );
?>