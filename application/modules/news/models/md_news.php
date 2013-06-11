	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Md_news extends CI_Model {
			 function __construct()
    {
        parent::__construct();
    }
	
		public function getNews()
		{
		    $query=$this->db->get('news');
		    return $query->result();
		}
	
	}
	
	/* End of file md_news.php */
	/* Location: ./application/modules/news/models/md_news.php */
 ?>