<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Home extends BaseController
{
    public function index(): string
    {
        // $session = \Config\Services::session();
        // $navmenu = new AuthModel();
        // $idrole = $session->get('role_id');
        $data = [
            'title'     => 'Dashboard',
            'subtitle'  => 'Dashboard',
            // 'idrole'    => $idrole,
            // 'navmenu'   => $navmenu->navmenu($idrole),
            // 'navsubmenu'   => $navmenu->navsubmenu(2,5),
        ];
        // dd($data);
        return view('layout/dashboard', $data);
    }

    public function login()
    {
        return view('layout/login');
    }
}
