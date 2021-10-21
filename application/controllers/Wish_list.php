<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wish_list extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Wish_list_model');
		
    }
	
	public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$data = array("keyword"=>null, "records"=>null);
		
		$keyword = $this->input->get('keyword');
		
		
		//$data['username']=get_cookie('username');
		//$data['count'] = $this->My_review_model->review_count($keyword,  $sort_by);
	
		//if(isset($keyword) && isset($sort_by)){
			$data['keyword'] = $keyword;
          
			$data['records'] = $this->Wish_list_model->get_review($keyword);
			
		//}
		
		$this->load->view('wish_list',$data);
		$this->load->view('template/footer');
		
	}
	
}
