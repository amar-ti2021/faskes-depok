<?php
class Faskes_Model extends CI_Model
{

    // Buat Struktur data
    private $table = "faskes";

    public function getAll()
    {
        $this->db->select('faskes.*, jenis_faskes.nama as jenis');
        $this->db->join('jenis_faskes', 'faskes.jenis_id = jenis_faskes.id');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function search($keyword)
    {
        $this->db->like('nama', $keyword);
        return $this->db->get($this->table)->result();
    }
    public function findById($id)
    {
        $this->db->select('faskes.*, jenis_faskes.nama as jenis, kecamatan.nama as kecamatan');
        $this->db->join('jenis_faskes', 'faskes.jenis_id = jenis_faskes.id');
        $this->db->join('kecamatan', 'faskes.kecamatan_id = kecamatan.id');
        $this->db->where('faskes.id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete($this->table);
        return $query;
    }
    public function countFaskes($id)
    {
        $this->db->where('jenis_id', $id);
        return $this->db->count_all_results($this->table);
    }
}
