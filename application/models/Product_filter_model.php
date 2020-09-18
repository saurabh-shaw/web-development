<?php 
class Product_filter_model extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->model('product_filter_model');
		}

	
	public function fetch_filter_type()
	{
			// $this->load->database();
		$this->db->distinct();
		$this->db->select('product.group_name');
		$query=$this->db->get('product');
		return $query->result_array();

		}
}
?>
