<?php
class User_model extends CI_Model
{

    private $table = "user";

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        $this->db->where('nim', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function login($uname,$pass){
        $sql = "SELECT * FROM user WHERE username=?  and password=MD5(?)";

        $query = $this->db->query($sql, [$uname,$pass]);
        return $query->row();
    }
}
?>