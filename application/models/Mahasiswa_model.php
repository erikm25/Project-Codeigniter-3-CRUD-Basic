<?php

class Mahasiswa_model extends CI_model{
    
        public function getAllMahasiswa()
        {
            return $this->db->get('mahasiswa')->result_array();

        }


        public function tambahDataMahasiswa()
        {
            $data = [
                
                "nama" => $this->input->post('nama',true),
                "nim" => $this->input->post('nim',true),
                "kelas" => $this->input->post('kelas',true),
                "email" => $this->input->post('email',true),
                "jurusan" => $this->input->post('jurusan',true),
                "matakuliahsp" => $this->input->post('matakuliahsp',true)

            ];
                $this->db->insert('mahasiswa', $data);
        }


        public function hapusDataMahasiswa($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('mahasiswa');

        }



        public function getMahasiswaById($id)
        {
            return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
        }


        public function editDataMahasiswa()
        {
            $data = [
                
                "nama" => $this->input->post('nama',true),
                "nim" => $this->input->post('nim',true),
                "kelas" => $this->input->post('kelas',true),
                "email" => $this->input->post('email',true),
                "jurusan" => $this->input->post('jurusan',true),
                "matakuliahsp" => $this->input->post('matakuliahsp',true)

            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('mahasiswa', $data);
        }

        
        public function cariDataMahasiswa()
        {
            $cari = $this->input->post('cari'); 
                $this->db->like('nama',$cari);
                $this->db->or_like('email',$cari);
                $this->db->or_like('nim',$cari);
                $this->db->or_like('kelas',$cari);
                $this->db->or_like('jurusan',$cari);
                $this->db->or_like('matakuliahsp',$cari);
            return $this->db->get('mahasiswa')->result_array();
        }
}