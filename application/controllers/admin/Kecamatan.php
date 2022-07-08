<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{
    public function index()
    {
        $this->load->model("Kecamatan_Model", "kecamatan");
        $data = array('kecamatan' => $this->kecamatan->getAll());
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'kecamatan']);
        $this->load->view('admin/kecamatan/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'kecamatan']);
        $this->load->view('admin/kecamatan/create');
        $this->load->view('layouts/footer');
    }

    public function save()
    {

        $data = [
            'nama' => $this->input->post('nama'),
        ];
        $id = $this->input->post('id');
        $this->load->model('Kecamatan_Model', 'kecamatan');
        if (isset($id)) {
            $this->kecamatan->update($id, $data);
        } else {
            $this->kecamatan->save($data);
        }
        return redirect(base_url('index.php/admin/kecamatan/'));
    }

    public function edit()
    {
        $_id = $this->input->get('id');

        $this->load->model("Kecamatan_Model", "kecamatan");
        $data = [
            'kecamatan' => $this->kecamatan->findById($_id)
        ];

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'kecamatan']);
        $this->load->view('admin/kecamatan/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('Kecamatan_Model', 'kecamatan');
        $this->kecamatan->delete($_id);
        redirect(base_url('index.php/admin/kecamatan'));
    }
}
