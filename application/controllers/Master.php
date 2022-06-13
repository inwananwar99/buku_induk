<?php
class Master extends CI_Controller{
    public function guru(){
        $data = [
            'judul' => 'Data Master Guru',
            'konten' => 'master/guru',
            'guru' => $this->db->get('guru')->result_array()
        ];
        $this->load->view('template',$data);
    }

    public function addGuru(){
        $data = [
            'nip_nik' => $this->input->post('nip_nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        ];
        $this->db->insert('guru',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
        Berhasil tambah data!
      </div>');
      redirect('Master/guru');
    }

    public function updateGuru($id){
        $data = [
            'nip_nik' => $this->input->post('nip_nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        ];
        $this->db->where('nip_nik',$id);
        $this->db->update('guru',$data);
        $this->session->set_flashdata('message','<div class="alert alert-primary" role="alert">
        Berhasil ubah data!
      </div>');
      redirect('Master/guru');
    }

    public function deleteGuru($id){
        $this->db->where('nip_nik',$id);
        $this->db->delete('guru');
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
        Berhasil hapus data!
      </div>');
      redirect('Master/guru');
    }

    public function matpel(){
        $this->db->select('*');
        $this->db->from('matpel');
        $this->db->join('guru', 'guru.nip_nik = matpel.nip_nik');
        $join = $this->db->get()->result_array();
            $data = [
            'judul' => 'Data Master Mata Pelajaran',
            'konten' => 'master/matpel',
            'guru' => $this->db->get('guru')->result_array(),
            'matpel' => $join
        ];
        $this->load->view('template',$data);
    }

    public function addMatpel(){
        $data = [
            'nip_nik' => $this->input->post('nip_nik'),
            'kode_mp' => $this->input->post('kode_mp'),
            'nama_mp' => $this->input->post('nama_mp')
        ];
        $this->db->insert('matpel',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
        Berhasil tambah data!
      </div>');
      redirect('Master/matpel');
    }

    public function updateMatpel($id){
        $data = [
            'nip_nik' => $this->input->post('nip_nik'),
            'nama_mp' => $this->input->post('nama_mp'),
            'kode_mp' => $this->input->post('kode_mp')
        ];
        $this->db->where('kode_mp',$id);
        $this->db->update('matpel',$data);
        $this->session->set_flashdata('message','<div class="alert alert-primary" role="alert">
        Berhasil ubah data!
      </div>');
      redirect('Master/matpel');
    }

    public function deleteMatpel($id){
        $this->db->where('kode_mp',$id);
        $this->db->delete('matpel');
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
        Berhasil hapus data!
      </div>');
      redirect('Master/matpel');
    }

    public function nilai(){
            $data = [
            'judul' => 'Data Master Nilai',
            'konten' => 'master/guru',
            'guru' => $this->db->get('guru')->result_array()
        ];
        $this->load->view('template',$data);
    }

}
?>