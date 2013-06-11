	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class News extends MX_Controller {

		public function index()
		{
			$this->load->model('md_news');
			$data['module']='news';
			$data['view']='vw_news';
			$data['data2'] = array('site_news'=>$this->md_news->getNews());

			$this->load->module('template');
			$this->template->index($data);	
		}

	}
	
	/* End of file news.php */
	/* Location: ./application/modules/news/controllers/news.php */
	?>