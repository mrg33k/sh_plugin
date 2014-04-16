<?php
/*
Plugin Name: Let's Be Friends
Plugin URI: http://beeing.us/social-plugins
Description: Collects data and sends messages to facebook users 
Version: 1.0
Author: Patrik Matheson
Author URI: http://beeing.us
*/
  


/***
**** Styles and scc
***/
function lpf_front_end_css(){

	wp_enqueue_style('lpf_front_end_css', plugins_url('inc/css/style.css' , __FILE__ ));
	


}
	add_action( 'wp_head', 'lpf_front_end_css' );

function lpf_bootstrap_css(){

	wp_enqueue_style('lpf_bootstrap_css', plugins_url('inc/css/bootstrap.min.css' , __FILE__ ));
	


}
	add_action( 'wp_head', 'lpf_bootstrap_css' );

function lpf_selectTwo_css(){

	wp_enqueue_style('lpf_selectTwo_css', plugins_url('inc/css/select2.css' , __FILE__ ));
	


}
	add_action( 'wp_head', 'lpf_selectTwo_css' );
		
function lpf_selectTwo_js(){

	wp_enqueue_script('lpf_selectTwo_js', plugins_url('inc/js/select2.js' , __FILE__ ));
	


}
	add_action( 'wp_head', 'lpf_selectTwo_js' );
	
function invite_friends(){
include( plugin_dir_path( __FILE__ ) . 'inc/scripts/load.php');	
	if($user){  
	
	
	include( plugin_dir_path( __FILE__ ) . 'inc/partials/edit-fb-info.php');
	   		
	   		
	  }else{ 
	  
	include( plugin_dir_path( __FILE__ ) . 'inc/partials/sign-up.php');
	
	}
		
}

add_shortcode('lbf' , 'invite_friends');