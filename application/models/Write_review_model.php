<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here 
 class Write_review_model extends CI_Model{
    

    public function set_review( ){
        // Validate
     
        $this->load->helper('url');
        
        $data = array(
            'username' => $this->input->post('username'),
           
            'product_name' => $this->input->post('product_name'), //getting password from reg form
		    'product_brand' => $this->input->post('product_brand'),
		    'product_details' => $this->input->post('product_details'),
            'product_reviews' => $this->input->post('product_reviews'),  
            'favorite_level' => $this->input->post('favorite_level'),
        );
        
        return $this->db->insert('review_list',$data);
       
    }
 }
