<?php
class Matakuliah extends CI_Controller
{

    public function index(){
        $data['judul'] = "Halamanutama";
        $this->load->view('view_atas',$data);
        $this->load->view('view-form-matakuliah',$data);
        $this->load->view('view_bawah',$data);
    }



    public function cetak()
         {
        $this->form_validation->set_rules(
            'kode', 'Kode Matakuliah', 
            'required|min_length[3]', [
            'required' => 'Kode Matakuliah Harus diisi',
            'min_length' => 'Kode terlalu pendek'
        ]);
        $this->form_validation->set_rules(
            'nama', 'Nama Matakuliah', 
            'required|min_length[3]', [
            'required' => 'Nama Matakuliah Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);
        if ($this->form_validation->run() != true) {
                $data['judul'] = "Halamanutama";
                $this->load->view('view_atas',$data);
                $this->load->view('view-form-matakuliah',$data);
                $this->load->view('view_bawah',$data);
            
        
        
        } else {
            $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks'),
            'awal' => $this->input->post('awal')
            ];
            $data['judul'] = "Halamanutama";
            $this->load->view('view_atas',$data);
            $this->load->view('view-data-matakuliah',$data);
            $this->load->view('view_bawah',$data);
        }
     }
    }
    
