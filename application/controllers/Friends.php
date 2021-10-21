<?php
class Friends extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Friends_Model');
	}
	public function index(){
		$this->load->view('template/header');
        $result['data']=$this->Friends_Model->displayrecords();
        $this->load->view('display_records',$result);
	}

	public function savedata()
	{
		$this->load->view('reg');
        if($this->input->post('save'))
        {
            $n=$this->input->post('username');
            $e=$this->input->post('email');
            $m=$this->input->post('description');
            $this->Friends_Model->saverecords($n,$e,$m);		
            redirect("Friends/dispdata");  
            }
        }
        
        public function dispdata()
        {
			$this->load->view('template/header');
        $result['data']=$this->Friends_Model->displayrecords();
        $this->load->view('display_records',$result);
		
        }
        
        public function deletedata()
        {
	$id=$this->input->get('id');
	$this->Friends_Model->deleterecords($id);
	redirect("Friends/dispdata");
	}
	
	public function updatedata()
	{
		$this->load->view('template/header');
	$id=$this->input->get('id');
	$result['data']=$this->Friends_Model->displayrecordsById($id);
	$this->load->view('update_records',$result);	
	
		if($this->input->post('update'))
		{
		$n=$this->input->post('username');
		$e=$this->input->post('email');
		$m=$this->input->post('description');
		$this->Friends_Model->updaterecords($n,$e,$m,$id);
		redirect("Friends/dispdata");
		}
	}
}
?>