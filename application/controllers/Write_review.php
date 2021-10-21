<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class write_review extends CI_Controller
{

	function __construct() {
        parent::__construct();
        $this->load->library('image_lib');

    }

    public function index()
    {
		$this->load->view('template/header'); 
    	if (!$this->session->userdata('logged_in'))//check if user already login
		{	
			if (get_cookie('remember')) { // check if user activate the "remember me" feature  
				$username = get_cookie('username'); //get the username from cookie
				$password = get_cookie('password'); //get the username from cookie
				if ( $this->user_model->login($username, $password) )//check username and password correct
				{
					$user_data = array('username' => $username,'logged_in' => true );
					$this->session->set_userdata($user_data); //set user status to login in session
					$this->load->view('write_review',array('error' => ' ')); //if user already logined show upload page
				}
			}else{
				redirect('login'); //if user already logined direct user to home page
			}
		}else{
			$this->load->view('write_review',array('error' => ' ')); //if user already logined show login page
		}
		$this->load->view('template/footer');
    }
    
	public function add_review(){
		
		$this->load->model('write_review_model');		//load user model
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$username = $this->input->post('username');  //getting username from reg form
		$product_name = $this->input->post('product_name'); //getting password from reg form
		$product_brand = $this->input->post('product_brand');
		$product_details = $this->input->post('product_details');
		$product_reviews = $this->input->post('product_reviews');
		$favorite_level = $this->input->post('favorite_level');
		//if(!$this->session->userdata('logged_in')){	//Check if user already login
			//if ( $this->reg_model->check_info($username, $password,$email,$password1) )
			//{
				$this->write_review_model->set_review();
				redirect('my_review');
			//}
		//}
		//redirect('home');
		
	
	}
}

