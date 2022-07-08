<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]', [
            'required' => 'Nama Harus Diisi!',
            'is_unique' => 'Username tidak dapat digunakan'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Harus Diisi!'
        ]);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', [
            'required' => 'Password Harus Diisi!',
            'matches' => 'Password Yang Anda Masukkan Tidak Sama!'
        ]);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]', [
            'required' => 'Password Harus Diisi!',
            'matches' => 'Password Yang Anda Masukkan Tidak Sama!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password_1')),
                'email' => $this->input->post('email'),
                'role' => 'public'
            );
            $this->db->insert('users', $data);
            $this->session->set_flashdata('pesan', '
            <div class="alert alert-success " role="alert">
                Selamat registrasi berhasil! Silahkan Login
            </div>
            ');
            redirect('index.php/login');
        }
    }
}
