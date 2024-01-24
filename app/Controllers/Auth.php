<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        if(session('user_id')){
            return redirect()->to(site_url('/'));
        }
        return view('layout/login');
    }

    public function loginProses()
    {    
        $this->db = \Config\Database::connect();
        $post = $this->request->getPost();
        $query = $this->db->table('users')->getWhere(['user_nama'=>$post['user_nama'],'user_active'=>1]);
        $user = $query->getRow();
        if($user){
            if(password_verify($post['password'], $user->user_password)) {
                $params = [
                    'user_id'=> $user->user_id,
                    'user_nama'=> $user->user_nmlengkap,
                    'user_role'=> $user->user_roleid,
                    'user_active' => $user->user_active,
                    'user_tahun' => $post['tahun'],
                ];
                session()->set($params);
                // dd(session()->user_nama);
                return redirect()->to(site_url('/'));
            } else {
                return redirect()->back()->with('error','Password tidak sesuai');
            }
        } else {
            return redirect()->back()->with('error','User tidak ditemukan');
        }
        
        
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('login'));
    }
}
