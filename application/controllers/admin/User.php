

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Memastikan nama model benar: 'User_model'
        $this->load->model('User_model');
    }

    public function index() {
        // Mengambil data dari tabel 'user' dengan sorting
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array(); 

        // Mengirim data ke view
        $data = array(
            'judul_halaman' => 'Data Pengguna', // Perbaikan nama variabel
            'user'          => $user
        );

        // Memuat template dan view
        $this->template->load('admin/template', 'admin/user_index', $data);
    }

    public function simpan() {
        // Memastikan metode 'simpan' ada di model
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'level' => $this->input->post('level'),
        );
        $this->db->insert('user',$data);
        // Set pesan flash
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert">
        This is a success dismissible alert — check it out!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
        ');

        // Redirect ke halaman 'admin/user'
        redirect('admin/user');
    }

    public function update(){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'level' => $this->input->post('level'),
        );

        $where = array('id_user' => $this->input->post('id_user'));

        $this->db->update('user',$data,$where);
        // Set pesan flash
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert">
berhasil diedit!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
        ');

        // Redirect ke halaman 'admin/user'
        redirect('admin/user');
    }

    public function hapus($id){
        $where = array('id_user' => $id);
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-danger alert-dismissible" role="alert">
Data Berhasil Dihapus!!!!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
        ');
        redirect('admin/user');
    }


    public function edit($id){
        $this->db->select('*')->from('user');
        $this->db->where('id_user',$id);
        $user = $this->db->get()->result_array();
        $data = array(
            'user' => $user
        );
        $this->template->load('admin/template' , 'admin/user_edit' ,$data);
    }
}
