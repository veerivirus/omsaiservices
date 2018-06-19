<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller {


function general()
	{
		$data['layout'] 		= 'admin/layouts/layout';
		$data['header'] 		= 'admin/layouts/header';
		
		return $data;
	}
	function index()
	{
		$data = $this->general();
		$data['pageName']    = "index";
		$data['pageTitle']   ='test';
		$data['metaKeywords'] ='';
		$data['metaDescription'] ='';
		$data['content'] = 'admin/pages/home';
		$this->load->view('admin/admin_welcome',$data);
		
	}

	function sudeep()
	{
		$data = $this->general();
		$data['pageName']    = "index";
		$data['pageTitle']   ='test';
		$data['metaKeywords'] ='';
		$data['metaDescription'] ='';
		$data['content'] = 'admin/pages/sudeep';
		$this->load->view('admin/admin_welcome',$data);
		
	}
	
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */