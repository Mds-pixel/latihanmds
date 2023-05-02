<?php
class latihan3 extends CI_Controller
{
    public function index(){

        $data['judul'] = "Halamanutama";
        $this->load->view('view_atas',$data);
        $this->load->view('view_latih3', $data);
        $this->load->view('view_bawah',$data);
    }

    public function penjumlahan($angka1, $angka2){
        $this->load->model('model_latihan3');
        $data['nilai1']=$angka1;
        $data['nilai2']=$angka2;
        $data['hasil']= $this->model_latihan3->jumlah($angka1, $angka2);

        
        $data['judul'] = "Halamanutama";
                $this->load->view('view_atas',$data);
                $this->load->view('view_latihan3', $data);
                $this->load->view('view_bawah',$data);
       
    }
}