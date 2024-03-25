<?php

namespace App\Controllers;

use App\Models\SptModel;
use App\Models\AuthModel;
use App\Models\LaporjadinModel;

class Home extends BaseController
{
    public function index(): string
    {
        $sptModel = new SptModel();
        $modellapor = new LaporjadinModel();

        $bulan = $sptModel->grafik();
        if($bulan) {
            $bulanMap = [
                1 => 'Januari',
                2 => 'Februari',
                3 => 'Maret',
                4 => 'April',
                5 => 'Mei',
                6 => 'Juni',
                7 => 'Juli',
                8 => 'Agustus',
                9 => 'September',
                10 => 'Oktober',
                11 => 'November',
                12 => 'Desember'
            ];

            foreach ($bulan as $result) {
                $result->bulan = $bulanMap[$result->bulan];
            }
        } else {
            $bulan = [];
        }

        $data = [
            'title'     => 'Dashboard',
            'subtitle'  => 'Dashboard',
            'grafik'    => $bulan,
            'gambar'    => $modellapor->datafoto(),
        ];
        return view('layout/dashboard', $data);
    }

    public function login()
    {
        return view('layout/login');
    }
}
