<?php
	class Product extends CI_Controller{
		// public function __construct(){
		// 	$this->load->model('product_model');
		// }
		public function view($lc_style = NULL){
			$data['title'] = 'products';
			$data['product'] = $this->product_model->get_product($lc_style);	
			$data['lc_style'] = $data['product']['lc_style'];
			$this->load->view('templates/header');
			$this->load->view('product/view',$data);
			$this->load->view('templates/footer');
		}
	}
?>