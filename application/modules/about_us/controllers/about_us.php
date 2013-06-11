<!-- //LOCATION: afc/about_us
 -->
 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends MX_Controller {

	public function index()
	{
		$data['module']='about_us';
		$data['view']='vw_about_us';
		$data['data2'] = array();

		$this->load->module('template');
		$this->template->index($data);

	}

}

/* End of file name.php */
/* Location: ./application/modules/about_us/controllers/name.php */
 ?>