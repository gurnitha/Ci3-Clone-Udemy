<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

// If there is no function('get_settings')
if(! function_exists('get_settings')){
	// Use this get_settings function
	function get_settings($type = ''){
		$CI =& get_instance();
		$CI->load->database();
		$CI->db->where('type',$type);
		$result = $CI->db->get('settings')->row()->description;
		return $result;
	}
}