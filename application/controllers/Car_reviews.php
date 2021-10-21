<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_reviews extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->library('session'); //enable session
        $this->load->model('Car_reviews_model');
    }

	public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$data = array("keyword"=>null, "records"=>null);
		
		$keyword = $this->input->get('keyword');
		//$sort_by = $this->input->get('sort_by');
		
		
		//if(isset($keyword) && isset($sort_by)){
			$data['keyword'] = $keyword;
           
			$data['records'] = $this->Car_reviews_model->car_review($keyword);
			
		//}
		
		$this->load->view('car_reviews',$data);
		$this->load->view('template/footer');
		
	}
	
}