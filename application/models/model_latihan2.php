<?php
class model_latihan2 extends CI_Model
{
    //buat variabel buat nampung nilai
    public $a1, $a2, $hasil;

    // rumus penjumlahan
    public function jumlah($angka1=null,  $angka2=null){
        $this->a1 = $angka1;
        $this->a2 = $angka2;
        $this->hasil = $this->a1 + $this->a2;
        return $this->hasil;
    }

    // rumus pengurangan
    public function kurang($angka1=null,  $angka2=null){
        $this->a1 = $angka1;
        $this->a2 = $angka2;
        $this->hasil = $this->a1 - $this->a2;
        return $this->hasil;
    }

    // rumus pembagian
    public function bagi($angka1=null,  $angka2=null){
        $this->a1 = $angka1;
        $this->a2 = $angka2;
        $this->hasil = $this->a1 / $this->a2;
        return $this->hasil;
    }

    // rumus rata rata
    public function rata($angka1=null,  $angka2=null){
        $this->a1 = $angka1;
        $this->a2 = $angka2;
        $this->hasil = ($this->a1 + $this->a2) / 2;
        return $this->hasil;
    }
}