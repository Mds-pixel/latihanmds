<?php
class latihan3 extends CI_Controller
{
    public function index(){
    echo"Selamat datang di miniMds . ini adalah page 3";
    echo"Menggunakan model ,view ,controller";
    }

    public function penjumlahan($angka1, $angka2){
        $this->load->model('model_latihan3');
        $data['nilai1']=$angka1;
        $data['nilai2']=$angka2;
        $data['hasil']= $this->model_latihan3->jumlah($angka1, $angka2);

        $this->load->view('view_latihan3', $data);
    }
}