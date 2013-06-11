<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//LOCATION: afc/home
class Home extends MX_Controller {
		 function __construct()
    {
        parent::__construct();
    }

	
	public function index()
	{
		$data['module']='home';
		$data['view']='vw_home';
		$data['data2'] = array('name'=>'Nadya');

		$this->load->module('template');
		$this->template->index($data);
	}
	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */