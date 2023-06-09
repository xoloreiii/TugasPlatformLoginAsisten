<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Ktp extends BaseController
{
    public function index()
    {
        return view('profil');
    }
}