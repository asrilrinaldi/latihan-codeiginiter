<?php

namespace App\Models;

use CodeIgniter\Controller;
use CodeIgniter\Model;

class M_Game extends Model
{
    protected $table = 'game';
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
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
    public function edit($data, $id)
    {
        return $this->builder->update($data, ['id' => $id]);
    }
}
