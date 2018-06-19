<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

function general()
	{
		$data['layout'] 		= 'public/layouts/layout';
		$data['header'] 		= 'public/layouts/header';
		$data['footer'] 		= 'public/layouts/footer';
		$data['sidebar'] 		= 'public/layouts/sidebar';
		
		return $data;
	}
	function index()
	{
		$data = $this->general();
		$data['pageName']    = "index";
		$data['pageTitle']   ='test';
		$data['metaKeywords'] ='';
		$data['metaDescription'] ='';
		$data['content'] = 'public/pages/home';
		$this->load->view('public/welcome',$data);
		
	}

	function sudeep()
	{
		$data = $this->general();
		$data['pageName']    = "index";
		$data['pageTitle']   ='test';
		$data['metaKeywords'] ='';
		$data['metaDescription'] ='';
		$data['content'] = 'public/pages/sudeep';
		$this->load->view('public/welcome',$data);
		
	}
	function about()
	{
		$data = $this->general();
		$data['pageName']    = "about";
		$data['pageTitle']   ='TITLE';
		$data['metaKeywords'] ='';
		$data['metaDescription'] ='';
		$data['content'] = 'public/pages/about';
		$this->load->view('public/welcome',$data);
		
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */