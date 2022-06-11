<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class asoy extends Controller
{
    public function index()
    {
        $session = session();

        return view('pages/home');
    }
    public function about()
    {

        return view('pages/about');
    }
    public function career()
    {

        return view('pages/career');
    }
}
