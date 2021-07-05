<?php

class Mahasiswa extends CI_Controller{
    
    public function __construct()
    {

        parent:: __construct();
            $this->load->model('Mahasiswa_model');
            $this->load->library('form_validation');

    }
   
    public function index()
    {

      
        $data['judul'] ='Daftar Mahasiswa SP';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
            if ( $this->input->post('cari'))
                {
                    $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
                }
            $this->load->view('templates/header',$data ); 
            $this->load->view('mahasiswa/index',$data);
            $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['judul']='Form Tambah Data Mahasiswa';
        $data['jurusan']=['Informatika S-1', 'Sistem Informasi S-1', 'Sistem Informasi D-3',
        'Teknikologi Informasi'];
        $data['matakuliahsp']=['Jaringan Komputer', 'Pemograman Framwork', 'Bahasa Indonesia',
         'Kalkulus I', 'Pemograman Web', 'Komunikasi Data'];
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
            $this->form_validation->set_rules('kelas', 'Kelas', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('templates/header',$data);
                    $this->load->view('mahasiswa/tambah',$data);
                    $this->load->view('templates/footer');
                        
                }else{

                    $this->Mahasiswa_model->tambahDataMahasiswa();
                    $this->session->set_flashdata('flash', 'Ditambahkan');
                    redirect('mahasiswa');
                }
    }

    

       public function hapus($id)
    {
            $this->Mahasiswa_model->hapusDataMahasiswa($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('mahasiswa');
    }


       public function detail($id)
    {

        $data['judul']='Detail Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/detail',$data);
            $this->load->view('templates/footer');
        
    }


    public function edit($id)
    {
        $data['judul']='Form Edit Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['jurusan']=['Informatika S-1', 'Sistem Informasi S-1', 'Sistem Informasi D-3',
        'Teknikologi Informasi'];
        $data['matakuliahsp']=['Jaringan Komputer', 'Pemograman Framwork', 'Bahasa Indonesia',
         'Kalkulus I', 'Pemograman Web', 'Komunikasi Data'];
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
            $this->form_validation->set_rules('kelas', 'Kelas', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('templates/header',$data);
                    $this->load->view('mahasiswa/edit',$data);
                    $this->load->view('templates/footer');
                        
                }else{

                    $this->Mahasiswa_model->editDataMahasiswa();
                    $this->session->set_flashdata('flash', 'Diubah');
                    redirect('mahasiswa');
                }
    }
}   