<!-- //LOCATION: afc/selling 
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Selling extends MX_Controller {

	public function index()
	{
		$data['module']='selling';
		$data['view']='vw_selling';
		$data['data2'] = array();

		$this->load->module('template');
		$this->template->index($data);
	}

}

/* End of file selling.php */
/* Location: ./application/modules/selling/controllers/selling.php */