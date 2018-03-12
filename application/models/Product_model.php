<?php 

class Product_model extends CI_Model {
    
    public function __construct()	{
      $this->load->database(); 
    }
    
    public function get_product($id) {
      if($id != FALSE) {
        $query = $this->db->get_where('product', array('id' => $id));
        return $query->row_array();
      }
      else {
        return FALSE;
      }
    }
    
    public function disply_items(){
        $query=$this->db->get('product');
        return $query->result();
    }
      public function insert($data){
    $this->db->insert('product',$data);
      
    }
    
    
    
    
    
}

?>