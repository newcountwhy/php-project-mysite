<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here 
 class Reg_model extends CI_Model{
    public function check_info($username, $password,$email,$password1){
        $this->db->where('username', $username);
        $this->db->where('email', $email);
       // $password1 => $this->input->post('password1');
        //$password => $this->input->post('password');

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return true;
        } else {
            return false;
        }

    }
    public function set_info(){
        // Validate
        $this->load->helper('url');
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'description' => $this->input->post('description'),
        );
        return $this->db->insert('users',$data);
       
    }
 }
