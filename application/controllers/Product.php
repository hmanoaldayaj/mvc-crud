<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function show($id) {
        //Send the query to the Product Model
        $this->load->model('product_model');
        $product = $this->product_model->get_product($id);
        
        //Data received back from Model
        $data['id'] = $product['id'];
        $data['name'] = $product['name'];
        $data['rate'] = $product['rate'];
        $data['price'] = $product['price'];
        $data['description'] =$product['description'];
        $data['image'] = $product['image'];
        
        //Send Data to View
        $this->load->view('product_profile', $data);
    }
    public function display(){
$data['product']=$this->Product_model->disply_items();
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('display_view',$data);
    $this->load->view('footer');

}

public function index(){
    $this->load->model('product_model');
    $data['product']=$this->Product_model->disply_items();
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('insert_view',$data);
    $this->load->view('footer');
}
public function form_validation(){
    $this->load->library("form_validation");
    $this->form_validation->set_rules("name","name",'required|alpha');
    $this->form_validation->set_rules("rate","rate",'required');
     $this->form_validation->set_rules("price","price",'required');
      $this->form_validation->set_rules("description","description",'required|alpha');
      
      
      if($this->form_validation->run()){
          $this->load->model("product_model");
          $data=array(
              "name"=>$this->input->post("name"),
              "rate"=>$this->input->post("rate"),
              "price"=>$this->input->post("price"),
              "description"=>$this->input->post("description")
              );
          $this->product_model->insert($data);
          $this->display();
          
          
      }else{
         
          $this->index();
      }
          
      }
      
}
    



?>