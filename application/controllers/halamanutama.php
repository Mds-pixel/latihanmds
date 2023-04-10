<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class halamanutama extends CI_Controller
{
    function __construct()
    { parent::__construct();
        $this->load->helper('url');}

        public function index(){
            $data['judul'] = "Halamanutama";
            $this->load->view('view_atas',$data);
            $this->load->view('view_depan',$data);
            $this->load->view('view_bawah',$data);
        }
    
    

        public function matkul(){
        $data['judul'] = "Halaman form";
        $this->load->view('view_atas',$data);
        $this->load->view('view_form_matkul',$data);
        $this->load->view('view_bawah',$data);
    }
}
