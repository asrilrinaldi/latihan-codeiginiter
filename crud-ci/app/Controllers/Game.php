<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Game;

class Game extends Controller
{
    public function index()
    {
        $model = new M_Game();
        $data = [
            'judul' => 'Data Game',
            'game' => $model->getAllData()
        ];

        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('game/index.php', $data);
        echo view('templates/v_footer');
    }
}
