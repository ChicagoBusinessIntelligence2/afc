<!-- //LOCATION: afc/buying
 -->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buying extends MX_Controller {

	public function index()
	{
		$data['module']='buying';
		$data['view']='vw_buying';
		$data['data2'] = array();

		$this->load->module('template');
		$this->template->index($data);
	}

}

/* End of file buying.php */
/* Location: ./application/modules/buying/controllers/buying.php */