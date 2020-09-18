<?php
	class Pages extends CI_Controller{
		public function view($page='home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);
			$data['product'] = $this->product_model->get_products();	
			$data['groupe'] = $this->product_filter_model->fetch_filter_type();//
			$this->load->view('templates/header');
			$this->load->view('product_filter',$data);//
			$this->load->view('pages/'.$page,$data);
			$this->load->view('templates/footer');
		}


	}
