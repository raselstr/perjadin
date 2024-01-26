<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        // $model = new AuthModel();
        // $data = $model->datalogin('198309292011011013');

        if(session('user_id')){
            return redirect()->to(site_url('/'));
        }
        // dd($data);
        return view('layout/login');
    }

    // public function loginProses()
    // {    
    //     $this->db = \Config\Database::connect();
    //     $post = $this->request->getPost();
    //     $query = $this->db->table('users')->getWhere(['user_nama'=>$post['user_nama'],'user_active'=>1]);
    //     $user = $query->getRow();
    //     if($user){
    //         if(password_verify($post['password'], $user->user_password)) {
    //             $params = [
    //                 'user_id'=> $user->user_id,
    //                 'user_nama'=> $user->user_nmlengkap,
    //                 'user_active' => $user->user_active,
    //             ];
    //             session()->set($params);
    //             // dd(session()->user_nama);
    //             return redirect()->to(site_url('/'));
    //         } else {
    //             return redirect()->back()->with('error','Password tidak sesuai');
    //         }
    //     } else {
    //         return redirect()->back()->with('error','User tidak ditemukan');
    //     }
        
        
    // }

    public function loginProses()
    {
        $model = new AuthModel();
        $user = $this->request->getPost('user_nama');
        $pass = $this->request->getPost('password');
        // $userpengguna = $model->userpengguna($user, $pass);
        if(!empty($user) && !empty($pass)){
            $login = $model->datalogin($user,$pass);
            if($login){
                $params = [
                    'nama' => $login['user_nmlengkap'],
                    'role' => $login['role_nama'],
                    'role_id' => $login['role_id'],
                    'idpengguna' => $login['user_nama']
                    ];
                session()->set($params);
                return redirect()->to(site_url('/'));
            } else {
                return redirect()->back()->with('error', 'Kombinasi User dan Password tidak cocok !!');
            }
        } else {
            return redirect()->back()->with('error', 'Salah satu User atau Password tidak diisi');
        }
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('login'));
    }
}
