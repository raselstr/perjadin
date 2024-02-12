<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'     => 'Dashboard',
            'subtitle'  => 'Dashboard',
        ];
        return view('layout/dashboard', $data);
    }

    public function login()
    {
        return view('layout/login');
    }
}
