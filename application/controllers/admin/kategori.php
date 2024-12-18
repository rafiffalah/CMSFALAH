<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halalaman' => 'beranda',
            'kategori' => $kategori
        );
		$this->template->load('admin/template','admin/kategori',$data);
	}

    public function simpan(){
        $this->db->from('kategori');
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori',$data);
        echo"
        <script>
        alert('berhasil ditambhkan');
        window.location = '".base_url('admin/kategori')."'
        </script>
        ";
    }
}
