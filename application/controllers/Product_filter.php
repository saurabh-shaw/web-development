
<?php 
	class Product_filter extends CI_Controller {
		// public function __construct(){
		// 	parent::__construct();
		// 	$this->load->model('product_filter_model');
		// }

		public function index(){
			echo "working";
			$data['groupe'] = $this->product_filter_model->fetch_filter_type();
			// $data['g_name'] = $data['groupe']['group_name'];
			$this->load->view('product_filter',$data);
			
			
		}
	}
?>