<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH."third_party/Smarty/Smarty.class.php";

/**
 * 
 * Smarty libraray to call smarty form Thirdparty folder
 * @author Tudip Technology
 *
 */

class CI_Smarty extends Smarty {

    // Codeigniter instance
    protected $CI;

    public function __construct()
    {
        parent::__construct();

        //Store the Codeigniter super global instance... whatever
        $this->CI = get_instance();
        $this->CI->load->config('smarty');

        $this->template_dir      = $this->CI->config->item('template_directory'); 
        $this->compile_dir       = $this->CI->config->item('compile_directory');
        $this->cache_dir         = $this->CI->config->item('cache_directory');
        $this->config_dir        = $this->CI->config->item('config_directory');
        $this->left_delimiter    = $this->CI->config->item('left_delimiter');
        $this->right_delimiter   = $this->CI->config->item('right_delimiter');
		
        // Add all helpers to plugins_dir
        $helpers = glob(APPPATH . 'helpers/', GLOB_ONLYDIR | GLOB_MARK);

        $this->addPluginsDir($helpers);
                
        //Should let us access Codeigniter stuff in views
        $this->assign("this", $this->CI);
    }
    
    /**
     * Smarty resource accessor functions
     */
    public function ci_get_template ($tpl_name, &$tpl_source, &$smarty_obj)
    {
        // ask CI to fetch our template 

		$tpl_source = $this->CI->load->view($tpl_name, $smarty_obj->get_template_vars(), true);
        return true;
    }

}