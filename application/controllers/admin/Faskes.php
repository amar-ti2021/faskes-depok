<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faskes extends CI_Controller
{
    public function index()
    {
        $this->load->model("Faskes_Model", "faskes");
        $data = array('faskes' => $this->faskes->getAll());
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'faskes']);
        $this->load->view('admin/faskes/index', $data);
        $this->load->view('layouts/footer');
    }

    public function view()
    {
        $id = $this->input->get('id');
        $this->load->model('Faskes_Model', 'faskes');
        $data['faskes'] = $this->faskes->findById($id);
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'faskes']);
        $this->load->view('admin/faskes/view', $data);
        $this->load->view('layouts/footer');
    }


    public function create()
    {
        $this->load->model("Jenis_Faskes_Model", "jenis_faskes");
        $this->load->model("Kecamatan_Model", "kecamatan");
        $data = array(
            'jenis_faskes' => $this->jenis_faskes->getAll(),
            'kecamatan' => $this->kecamatan->getAll()
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'faskes']);
        $this->load->view('admin/faskes/create', $data);
        $this->load->view('layouts/footer');
    }

    public function save()
    {

        $data = [
            'nama' => $this->input->post('nama'),
            'kecamatan_id' => $this->input->post('kecamatan'),
            'alamat' => $this->input->post('alamat'),
            'latlong' => $this->input->post('latlong'),
            'website' => $this->input->post('website'),
            'jenis_id' => $this->input->post('jenis'),
            'deskripsi' => $this->input->post('deskripsi'),
            'jumlah_dokter' => $this->input->post('jumlah_dokter'),
            'jumlah_pegawai' => $this->input->post('jumlah_pegawai'),
            'foto1' => $this->upload_photo('foto_1'),
            'foto2' => $this->upload_photo('foto_2'),
            'foto3' => $this->upload_photo('foto_3'),
        ];
        $id = $this->input->post('id');
        $this->load->model('Faskes_Model', 'faskes');
        if (isset($id)) {
            if (!$data['foto1']) {
                $data['foto1'] = $this->input->post('old_foto1');
            }
            if (!$data['foto2']) {
                $data['foto2'] = $this->input->post('old_foto2');
            }
            if (!$data['foto3']) {
                $data['foto3'] = $this->input->post('old_foto3');
            }
            $this->faskes->update($id, $data);
            return redirect(base_url('index.php/admin/faskes/view?id=' . $id));
        }

        $this->faskes->save($data);
        return redirect(base_url('index.php/admin/faskes/'));
    }

    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model('Faskes_Model', 'faskes');
        $this->load->model("Jenis_Faskes_Model", "jenis_faskes");
        $this->load->model("Kecamatan_Model", "kecamatan");
        $data = [
            'faskes' => $this->faskes->findById($_id),
            'jenis_faskes' => $this->jenis_faskes->getAll(),
            'kecamatan' => $this->kecamatan->getAll()
        ];

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', ['active' => 'faskes']);
        $this->load->view('admin/faskes/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('Faskes_Model', 'faskes');
        $this->faskes->delete($_id);
        redirect(base_url('index.php/admin/faskes'));
    }

    private function upload_photo($field_name)
    {
        $foto = $_FILES[$field_name];
        if (isset($foto)) {
            $config['upload_path'] = './assets/foto/';
            $config['allowed_types'] = 'jpg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($field_name)) {
                return null;
            } else {
                return $this->upload->data('file_name');
            }
        } else {
            return;
        }
    }
}
