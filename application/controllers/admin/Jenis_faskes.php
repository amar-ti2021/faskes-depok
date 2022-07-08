<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_faskes extends CI_Controller
{
    public function index()
    {

        $this->load->model("Jenis_Faskes_Model", "jenis_faskes");
        $data = array('jenis_faskes' => $this->jenis_faskes->getAll());
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'jenis_faskes']);
        $this->load->view('admin/jenis_faskes/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'jenis_faskes']);
        $this->load->view('admin/jenis_faskes/create');
        $this->load->view('layouts/footer');
    }

    public function save()
    {

        $data = [
            'nama' => $this->input->post('nama'),
        ];
        $id = $this->input->post('id');
        $this->load->model('Jenis_Faskes_Model', 'jenis_faskes');
        if (isset($id)) {
            $this->jenis_faskes->update($id, $data);
        } else {
            $this->jenis_faskes->save($data);
        }
        return redirect(base_url('index.php/admin/jenis_faskes/'));
    }

    public function edit()
    {
        $_id = $this->input->get('id');

        $this->load->model("Jenis_Faskes_Model", "jenis_faskes");
        $data = [
            'jenis_faskes' => $this->jenis_faskes->findById($_id)
        ];

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'jenis_faskes']);
        $this->load->view('admin/jenis_faskes/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('Jenis_Faskes_Model', 'jenis_faskes');
        $this->jenis_faskes->delete($_id);
        redirect(base_url('index.php/admin/jenis_faskes'));
    }
}
