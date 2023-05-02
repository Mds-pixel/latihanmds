<?php
class siswa extends CI_Controller
{


    public function index(){
        $data['judul'] = "Halamanutama";
        $this->load->view('view_atas',$data);
        $this->load->view('view_siswa',$data);
        $this->load->view('view_bawah',$data);
    }


    public function cetak()
         {
        $this->form_validation->set_rules(
            'nis', 'Nis Siswa', 
            'required|min_length[3]', [
            'required' => 'Kosong !! , Nis Matakuliah Harus diisi',
            'min_length(5)' => 'Kode terlalu pendek'
        ]);
        $this->form_validation->set_rules(
            'nama', 'Nama Siswa', 
            'required|min_length[3]', [
            'required' => 'Nama Siswa Harus diisi'
        ]);
        if ($this->form_validation->run() != true) {
                $data['judul'] = "Halamanutama";
                $this->load->view('view_atas',$data);
                $this->load->view('view_siswa',$data);
                $this->load->view('view_bawah',$data);
            
        
        
        } else {
            $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'lahir' => $this->input->post('lahir'),
            'tanggal' => $this->input->post('tanggal'),
            'alamat' => $this->input->post('alamat'),
            'kelamin' => $this->input->post('kelamin'),
            'agama' => $this->input->post('agama')
            ];
            $data['judul'] = "Halamanutama";
            $this->load->view('view_atas',$data);
            $this->load->view('view_cetak_siswa',$data);
            $this->load->view('view_bawah',$data);

        }
     }
    }
    
