<?php
class halamanutama extends CI_Controller
{
    public function index(){
        $this->load->view('view_atas');
        $this->load->view('view_depan');
        $this->load->view('view_bawah');
    }
    
    public function view_latihan3(){
        $this->load->view('view_atas');
        $this->load->view('view_latihan3');
        $this->load->view('view_bawah');
    }
}