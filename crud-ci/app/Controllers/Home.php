<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates/v_header');
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('home/index.php');
        echo view('templates/v_footer');
    }
}
