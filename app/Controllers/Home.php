<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('layout/dashboard');
    }

    public function login()
    {
        return view('layout/login');
    }
}
