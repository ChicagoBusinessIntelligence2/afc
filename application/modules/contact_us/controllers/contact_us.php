<!-- //LOCATION: afc/contact_us
 -->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends MX_Controller {

	public function index()
	{
		$data['module']='contact_us';
		$data['view']='vw_contact_us';
		$data['data2'] = array();

		$this->load->module('template');
		$this->template->index($data);
	}

}

/* End of file contact_us.php */
/* Location: ./application/modules/contact_us/controllers/contact_us.php */