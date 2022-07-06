<?php
class Comment_model extends CI_Model
{

    // Buat Struktur data
    private $table = "komentar";

    public function getAll()
    {
        $this->db->select('komentar.*, users.username as username, faskes.nama as faskes, nilai_rating.nama rating');
        $this->db->join('users', 'komentar.users_id = users.id');
        $this->db->join('faskes', 'komentar.faskes_id = faskes.id');
        $this->db->join('nilai_rating', 'komentar.nilai_rating_id = nilai_rating.id');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function findComment($id)
    {
        $this->db->select('komentar.*, users.username as username');
        $this->db->join('users', 'komentar.users_id = users.id');
        $this->db->where('faskes_id', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function save($data)
    {
        //insert into

        $this->db->insert($this->table, $data);
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete($this->table);
        return $query;
    }
    public function setRating($id, $new_rating)
    {
        $data = ['skor_rating' => $this->getRating($id, $new_rating)];
        $this->db->where('id', $id);
        $this->db->update('faskes', $data);
    }
    private function getRating($id, $new_rating)
    {
        $this->db->select_sum('nilai_rating_id');
        $this->db->where('faskes_id', $id);
        $query = $this->db->get($this->table)->row();
        $sum = $query->nilai_rating_id + $new_rating;
        // $sum = (int) $this->db->get($this->table)->result() ;
        $count = $this->db->count_all_results($this->table) + 1;

        $average =  $sum / $count;
        return  number_format((float)$average, 1, '.', '');
        // return $average;
    }
}
