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
}
