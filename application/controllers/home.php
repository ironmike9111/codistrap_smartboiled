<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/home
	 *	- or -  
	 * 		http://example.com/index.php/home/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/home/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// Build the $data variable
		$data['title']='Home';
		$data['description']='Starting template';
		$data['author']='Michael Lewis';
		
		//display the view via Smarty
		$this->parser->parse('home.tpl',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */