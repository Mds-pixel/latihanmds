<?php
class latihan2 extends CI_Controller
{
    public function index(){
        echo"selamat datang di miniMds . contoh controler dan model</br>";
        echo"Dapat menghitung penjumlahan.pengurangan,pembagian,rata -rata loh !!!";
    }

    public function penjumlahan($angka1, $angka2){
        $this->load->model('model_latihan2');
        //letak di menu aplication/controllers dengan nama model latihan2
        $hasil = $this->model_latihan2->jumlah($angka1, $angka2);
        echo "hasil Penjumlahan dari ". $angka1 ."+". $angka2 ."=".$hasil;

    }
    public function pengurangan($angka1, $angka2){
        $this->load->model('model_latihan2');
        $hasil1 = $this->model_latihan2->kurang($angka1, $angka2);
        echo "Hasil pengurangan dari ". $angka1 ." - ". $angka2 . "=".$hasil1;
    }
    public function pembagian($angka1, $angka2){
        $this->load->model('model_latihan2');
        $hasil1 = $this->model_latihan2->bagi($angka1, $angka2);
        echo "Hasil pembagian dari ". $angka1 ." / ". $angka2 . "=".$hasil1;
    }
    public function ratarata($angka1, $angka2){
        $this->load->model('model_latihan2');
        $hasil1 = $this->model_latihan2->rata($angka1, $angka2);
        echo "Hasil rata-rata dari ". $angka1 . " dan ". $angka2 . "adalah" . $hasil1;
    }
}