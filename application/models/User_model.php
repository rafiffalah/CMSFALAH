<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_model {
	public function simpan(){
        $data = array(
            'nama'      => $this->input->post('nama'),
            'username'      => $this->input->post('username'),
            'password'      => sha1($this->input->post('password')),
            'level'      => $this->input->post('level'), 
        );
        $this->db->insert('user', $data);
}
}
