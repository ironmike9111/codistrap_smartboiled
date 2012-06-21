<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 * MY_Parser library to overide the parse function of CI core parser.
 * @author Tudip Technology
 *
 */
class MY_Parser extends CI_Parser {

	protected $CI;
	protected $theme_location;

	public function __construct(){
		$this->CI = get_instance();
		$this->CI->load->library('smarty');
	}

	/**
	 * Parse a template using Smarty. Hows this for a Codeigniter
	 * core extension? Nice and simple.
	 *
	 * @param mixed $template
	 * @param array $data
	 * @param mixed $return
	 */
	public function parse($template, $data = '', $return = FALSE, $use_theme = FALSE){
		// If we have variables to assign, lets assign them
		if ($data){
			foreach ($data as $key => $val){
				$this->CI->smarty->assign($key, $val);
			}
		}

		// Get our template data as a string
		$template_string = $this->CI->smarty->fetch($template);

		// If we're returning the templates contents, we're displaying the template
		if ($return == FALSE){
			$this->CI->output->append_output($template_string);
		}
		// We're returning the contents, fo'' shizzle
		return $template_string;
	}

	function string_parse($template, $data, $return = FALSE, $is_include = FALSE){
		return $this->CI->smarty->fetch('string:'.$template, $data);
	}

	function parse_string($template, $data, $return = FALSE, $is_include = false){
		return $this->CI->smarty->fetch('string:'.$template, $data);
	}
}