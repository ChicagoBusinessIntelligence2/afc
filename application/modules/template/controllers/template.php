 
	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//LOCATION: afc/home	
	class Template extends MX_Controller {
	
		public function index($data)
		{
			$this->load->view('vw_template', $data);	
		}
	
	}
	
	/* End of file template.php */
	/* Location: ./application/modules/template/controllers/template.php */
 ?>