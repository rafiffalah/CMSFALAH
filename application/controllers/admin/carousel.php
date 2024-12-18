<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Carousel extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
        $this->db->from('carousel');
        $carousel = $this->db->get()->result_array();
        $data = array(
            'judul_halalaman' => 'beranda',
            'carousel'=> $carousel
        );
		$this->template->load('admin/template','admin/carousel',$data);
	}

    public function simpan()
    {
        $namafoto = date("YmHis") . '.jpg';     
        $config['upload_path']      = 'upload/carousel/';
        $config['max_size'] = 30 * 1024 * 1024; // 10 MB
        $config['allowed_types'] = '*';
        $config['file_name']        = $namafoto;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 30 * 1024 * 1024) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Ukuran File terlalu besar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/carousel');
        } elseif (! $this->upload->do_upload('foto')) {
            $error      = array('error' => $this->upload->display_errors());
        } else {
            $data = array('uppload_data' => $this->upload->data());
        }

        $carousel = $this->input->post('judul');
        $this->db->from('carousel');
        $this->db->where('judul', $carousel);
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Nama carousel sudah digunakan SILAHKAN GANTI
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/carousel');
        }
        $data = array(
            'judul'      => $this->input->post('judul'),
            'foto'      => $namafoto,
        );

        $this->db->insert('carousel', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        carousel Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/carousel');
    }


    public function hapus($id){
        $this->db->where('id_caraousel', $id);
        $this->db->delete('carousel');
        echo "
        <script>
        alert('Berhasil Dihapus');
        window.location='".site_url('admin/carousel')."'
        </script>
        ";
    }

}
