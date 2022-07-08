<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function index()
    {
        $this->load->model("User_model", "user");
        $data = array('users' => $this->user->getAll());
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'users']);
        $this->load->view('admin/users/index', $data);
        $this->load->view('layouts/footer');
    }

    public function save()
    {
        $id = $this->input->post('id');
        $data = [
            'role' => $this->input->post('role')
        ];

        $this->load->model('user_model', 'faskes');

        $this->faskes->update($id, $data);
        return redirect(base_url('index.php/admin/users/'));
    }

    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model('user_model', 'user');;
        $data = [
            'user' => $this->user->findById($_id),
        ];

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'users']);
        $this->load->view('admin/users/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('user_model', 'user');
        $this->user->delete($_id);
        redirect(base_url('index.php/admin/users'));
    }
}
