<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model("Faskes_Model", "faskes");
        $this->load->model("Jenis_Faskes_Model", "jenis_faskes");
        $data = array(
            'faskes' => $this->faskes->getAll(),
            'jumlah' => []
        );
        $jenis_faskes = $this->jenis_faskes->getAll();
        foreach ($jenis_faskes as $jf) {
            $data['jumlah'] += array(str_replace(' ', '_', strtolower($jf->nama)) => $this->faskes->countFaskes($jf->id));
        }
        $this->load->view('home/index', $data);
    }
    public function search($keyword = " ")
    {
        $this->load->model("Faskes_Model", "faskes");
        $data = array('faskes' => $this->faskes->search($keyword));
        if (!$data['faskes']) {
            echo '<h3 class="text-center"> Fasilitas Tidak Ditemukan </h3>';
        }
        $this->load->view('index.php/home/search', $data);
    }
    public function detail()
    {
        $id = $this->input->get('id');
        $this->load->model('Faskes_Model', 'faskes');
        $this->load->model('Comment_model', 'comment');
        $data['faskes'] = $this->faskes->findById($id);
        $data['comment'] = $this->comment->findComment($id);
        $this->load->view('index.php/home/detail', $data);
    }
    public function comment()
    {
        $id = $this->input->get('id');
        $this->load->model('Faskes_Model', 'faskes');
        $data['faskes'] = $this->faskes->findById($id);
        $this->load->view('index.php/home/comment', $data);
    }
    public function addComment()
    {
        $id_faskes = $this->input->post('id_faskes');
        $rating = $this->input->post('nilai_rating');
        $data = [
            'tanggal' => date("Y/m/d"),
            'isi' => $this->input->post('isi'),
            'users_id' => $this->session->userdata('ID'),
            'faskes_id' => $id_faskes,
            'nilai_rating_id' => $rating
        ];
        $this->load->model('Comment_model', 'comment');
        $this->comment->setRating($id_faskes, $rating);
        $this->comment->save($data);
        return redirect(base_url('index.php/home/detail?id=') . $id_faskes);
    }
}
