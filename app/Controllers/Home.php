<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
            'subtitle' => 'Dashboard',
        ];
        return view('layout/dashboard', $data);
    }

    public function login()
    {
        return view('layout/login');
    }
}
