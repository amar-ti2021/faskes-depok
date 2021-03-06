<?php
class User_model extends CI_Model
{

    private $table = "users";

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
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
    public function login($uname, $pass)
    {
        $sql = "SELECT * FROM users WHERE username=?  and password=MD5(?)";

        $query = $this->db->query($sql, [$uname, $pass]);
        return $query->row();
    }
}
