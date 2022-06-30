<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model("Faskes_Model", "faskes");
        $data = array('faskes' => $this->faskes->getAll());
        $this->load->view('home/index', $data);
    }
    public function search($keyword)
    {
        $this->load->model("Faskes_Model", "faskes");
        $data = array('faskes' => $this->faskes->search($keyword));
        if (!$data['faskes']) {
            echo '<h3 class="text-center"> Fasilitas Tidak Ditemukan </h3>';
        }
        $this->load->view('home/search', $data);
    }
}
