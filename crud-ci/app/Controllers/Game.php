<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Game;

class Game extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var IncomingRequest
     */
    protected $request;

    public function __construct()
    {
        $this->model = new M_Game;
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Game',
            'game' => $this->model->getAllData()
        ];

        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('game/index.php', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'genre' => $this->request->getPost('genre'),
            'ukuran' => $this->request->getPost('ukuran'),
            'tahun' => $this->request->getPost('tahun')
        ];

        //INSERT
        $success = $this->model->tambah($data);
        if ($success) {
            return redirect()->to(base_url('game'));
        }
    }
}
