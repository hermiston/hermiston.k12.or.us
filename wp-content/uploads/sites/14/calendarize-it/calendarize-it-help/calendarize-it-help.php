<?php

/**
Plugin Name: Calendarize It! Contextual Help
Plugin URI: http://plugins.righthere.com/calendarize-it/
Description: Provides english Contextual help for Calendarize it!
Version: 1.0.0
Author: (RightHere LLC)
Author URI: http://plugins.righthere.com
 **/
 
if(defined('RHCH_PATH')) throw new Exception( __('A duplicate of this addon/plugin is already active.','rhc') );
 
if(defined('RHC_ADDON_PATH')){
	define('RHCH_PATH', trailingslashit(RHC_ADDON_PATH . dirname($addon)) ); 
	define("RHCH_URL", trailingslashit(RHC_ADDON_URL . dirname($addon)) );
}else{
	define('RHCH_PATH', plugin_dir_path(__FILE__) ); 
	define("RHCH_URL", plugin_dir_url(__FILE__) );
}  
 
class plugin_rhc_contextual_help {
	function plugin_rhc_contextual_help(){
		add_action('plugins_loaded',array(&$this,'plugins_loaded'),9);
	}
	function plugins_loaded(){
		global $wp_version;
		if($wp_version<3.3){
			//require_once RHCH_PATH.'includes/class.rh_contextual_help.prewp33.php';	
		}else{
			require_once RHCH_PATH.'includes/class.rh_contextual_help.php';
			new rh_contextual_help(array(
				'url'	=> RHCH_URL,
				'path'	=> RHCH_PATH
			));
		}		
		

	}
}
new plugin_rhc_contextual_help();
?>