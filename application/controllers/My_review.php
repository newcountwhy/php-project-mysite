<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class my_review extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('My_review_model');
		
    }
	
	public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$data = array("keyword"=>null, "sort_by"=>null, "records"=>null);
		
		$keyword = $this->input->get('keyword');
		$sort_by = $this->input->get('sort_by');
		
		//$data['username']=get_cookie('username');
		//$data['count'] = $this->My_review_model->review_count($keyword,  $sort_by);
	
		//if(isset($keyword) && isset($sort_by)){
			$data['keyword'] = $keyword;
            $data['sort_by'] = $sort_by;
			$data['records'] = $this->My_review_model->review_search($keyword,  $sort_by);
			
		//}
		
		$this->load->view('my_review',$data);
		$this->load->view('template/footer');
		
	}
	
}
