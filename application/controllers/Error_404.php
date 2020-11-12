<?php

class Error_404 extends CI_Controller{
    
    public function index()
    {
        $this->load->view("template/header");
        $this->load->view("template/error_404");
        $this->load->view("template/footer");
    }
    
}