<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reg extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->library('session'); //enable session
    }

	public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('reg', $data);
		$this->load->view('template/footer');
    }
    public function reg()
	{
		$this->load->model('reg_model');		//load user model
		$data['error']= "<div class=\"alert alert-danger\" role=\"alert\"> username existing</div> ";
		$data['error_password'] = "<div class=\"alert alert-danger\" role=\"alert\"> different between two inputs</div> ";
		$data['error_email']= "<div class=\"alert alert-danger\" role=\"alert\"> email existing</div> ";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$username = $this->input->post('username'); //getting username from reg form
		$password = $this->input->post('password'); //getting password from reg form
		$email = $this->input->post('email');
		$password1 = $this->input->post('password1');
		$description = $this->input->post('description');
		//if(!$this->session->userdata('logged_in')){	//Check if user already login
			//if ( $this->reg_model->check_info($username, $password,$email,$password1) )
			//{
				$this->reg_model->set_info();
				redirect('login');
			//}
		//}
		//redirect('home');
		
	}
	
	
}