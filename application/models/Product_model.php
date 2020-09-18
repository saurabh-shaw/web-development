<?php
	class Product_model extends CI_Model{
		public function __construct(){
			$this->load->model('product_model');
		}
		public function get_product($lc_style){
			// $this->load->database();
			$this->db->order_by('product.lc_style');
			$query = $this->db->get_where('product',array('lc_style'=>$lc_style));
			return $query->row_array();
			// print_r($query->row_array());
		}
		public function get_products(){
			// $this->load->database();
			$this->db->order_by('product.lc_style');
			$query=$this->db->get('product');
			return $query->result_array();
		}
	}
?>