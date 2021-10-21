<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal_center extends CI_Controller {

    public function __construct() {
        parent:: __construct();
		$this->load->library('session'); //enable session
		$this->load->library('form_validation');
    }

	public function index()
	{
		//$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
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
					$this->load->view('personal_center',array('error' => ' ')); //if user already logined show upload page
				} else {
				// Set variable from Form
				            $user_id    =   $this->input->post('user_id');
				            $username   =   $this->input->post('username');
				            $email      =   $this->input->post('email');
				            $description     =   $this->input->post('description');
				            if($this->personal_update_model->updateUser($user_id, $username, $email,$description)) {
					            $this->session->set_flashdata('notice','<div class="success">Your details updated Successfully!</div>');
					            redirect('personal_center');
				            }
			            }
		    }
			//$this->load->model('personal_update_model');		//load user model
		    
		
		
		//$update_info = $this->input->get('update_description');
		
		//	$this->personal_update_model->updateUser($update_info);
			
	
				
				
		//	$data['records'] = $this->personal_update_model->getUserByIUsername();
		//	$this->load->view('personal_center', $data ); //if user already logined show login page
		}
		$this->load->view('template/footer');
			
	}
	public function upload_photo(){
		$this->load->model('file_model');
        $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|mp4|mkv';
		$config['max_size'] = 10000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do('userfile')) {
            $this->load->view('template/header');
            $data = array('error' => $this->upload->display_errors());
            $this->load->view('personal_center', $data);
            $this->load->view('template/footer');
        } else {
			$this->file_model->upload($this->upload->data('file_name'), $this->upload->data('full_path'),$this->session->userdata('username'));
            $this->load->view('template/header');
            $this->load->view('personal_center', array('error' => 'File upload success. <br/>'));
            $this->load->view('template/footer');
        }
	}
	
	
	


	
	
}