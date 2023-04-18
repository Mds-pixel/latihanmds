<?php
class form_matakuliah extends CI_Controller
{
    public function index(){
        $data['judul'] = "form_matakuliah";
        $this->load->view('atas', $data);
        $this->load->view('view-form-matakuliah', $data);
        $this->load->view('bawah', $data);
    }
}