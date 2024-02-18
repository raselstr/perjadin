<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kesalahan extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Maaf, Error !!!!',
            'subtitle' => 'Home',
        ];
        return view('layout/500', $data);
    }
}
