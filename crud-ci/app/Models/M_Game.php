<?php

namespace App\Models;

use CodeIgniter\Controller;
use CodeIgniter\Model;

class M_Game extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('game')->get()->getResultArray();
    }
    public function tambah($data)
    {
        return $this->db->table('game')->insert($data);
    }
    public function hapus($id)
    {
        return $this->db->table('game')->delete(['id' => $id]);
    }
}
