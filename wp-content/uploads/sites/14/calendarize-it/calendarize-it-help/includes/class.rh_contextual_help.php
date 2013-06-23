<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rh_contextual_help {
	var $uid=0;
	var $echelps = array();
	function rh_contextual_help($args=array()){
		$defaults = array(
			'url'				=> '',
			'path'				=> ''
		);	
		foreach($defaults as $property => $default){
			$this->$property = isset($args[$property])?$args[$property]:$default;
		}
		//-----------		
		add_action('in_admin_header',array(&$this,'in_admin_header'));
	}
	
	function in_admin_header(){
		global $hook_suffix;
		$screen = get_current_screen();
		$current_hookname = $this->get_hookname($screen,$hook_suffix);		
		$this->load_echelps($current_hookname);
		$this->add_echelps($screen,$current_hookname);	
	}
	
	function load_echelps($hookname){
		include 'serialized_help.php';
		$data = unserialize(trim($serialized_help));
		$this->echelps = array();
		foreach($data as $d){
			if(in_array($hookname,$d->location)){
				$this->echelps[]=$d;
			}
		}
	}
	
	function add_echelps($screen,$current_hookname){
		if(!empty($this->echelps)){
			foreach($this->echelps as $h){
				if(!empty($h->location)){			

					if(!in_array($current_hookname,$h->location))continue;

					if( '1'==$h->replace_existing_help ){
						$screen->remove_help_tabs();
					}
					
					$content = apply_filters('the_content',$h->content);
					$content = strip_tags($content)==$content?"<p>$content</p>":$content;					
					$content = str_replace('{dcurl}',$this->url.'images/',$content);
					if( 'sidebar'==$h->help_type ){
						$screen->set_help_sidebar( $content );
					}else{
						$screen->add_help_tab(array(
							'id'		=> 'echelp-'.$this->uid++,
							'title'		=> $h->title,
							'content'	=> $content
						));					
					}
				}
			}		
		}		
	}
	
	function get_hookname($screen,$hook_suffix){
		switch($hook_suffix){
			case 'edit.php':
				return $screen->post_type=='post'?'edit.php':sprintf('edit.php?post_type=%s',$screen->post_type);
			case 'post-new.php':
			case 'post.php':
				return $screen->post_type=='post'?'post-new.php':sprintf('post-new.php?post_type=%s',$screen->post_type);
			case 'edit-tags.php':
				return $screen->post_type=='post' || $screen->taxonomy=='link_category' ? sprintf('edit-tags.php?taxonomy=%s',$screen->taxonomy):sprintf('edit-tags.php?taxonomy=%s&post_type=%s',$screen->taxonomy,$screen->post_type);
			case 'media.php':
				return 'media-new.php';
			case 'link.php':
				return 'link-add.php';
			case 'appearance_page_theme_options':
				return 'theme_options';
			case 'appearance_page_custom-background':
				return 'custom-background';
			case 'appearance_page_custom-header':
				return 'custom-header';
			default:
				global $plugin_page;
				if(trim($plugin_page)!='')return $plugin_page;
				return $hook_suffix;
		}
	}
}
?>