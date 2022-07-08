<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function index()
    {
        $data = [];
        $this->load->view('login', $data);
    }

    public function otentikasi()
    {
        $this->load->model("user_model", "user");
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->user->login($_username, $_password);
        if (isset($row)) {
            $this->session->set_userdata('ID', $row->id);
            $this->session->set_userdata('USERNAME', $row->username);
            $this->session->set_userdata('ROLE', $row->role);
            $this->session->set_userdata('USER', $row);
            if ($this->session->userdata('ROLE') == 'administrator') {
                redirect(base_url('index.php/admin/dashboard'));
            }
            redirect(base_url() . 'index.php/home');
        } else {
            $this->session->set_flashdata('pesan', '
            <div class="alert alert-danger " role="alert">
                Username atau Password Anda Salah!
            </div>
            ');
            redirect(base_url() . 'login?status=f');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        redirect(base_url() . 'index.php/home');
    }
}
