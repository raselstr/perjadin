<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\RawSql;

class AuthModel extends Model
{
    function datalogin($user, $pass)
    {
        $builder = $this->db->table('users as a');
        $builder->select('a.user_nmlengkap,a.user_id, b.role_nama, b.role_id');
        $builder->join('roles as b', 'b.role_id = a.user_roleid');
        $builder->where('a.user_nama',$user);

        $hashedPassword = $this->db->table('users')
                        ->select('user_password')
                        ->where('user_nama', $user)
                        ->get()
                        ->getRow()->user_password;

        if (password_verify($pass, $hashedPassword)) {
            $query = $builder->get();
            $result = $query->getRowArray();
            return $result;
        }

        return null; // Login gagal
    }

    function navmenu($id)
    {

        $builder = $this->db->table('rolemenus as a');
        $builder->select('b.role_id, b.role_nama,
                          d.menu_id, d.menu_nama, d.menu_icon, d.menu_link');
        $builder->join('roles as b', 'b.role_id = a.role_id');
        $builder->join('submenus as c', 'c.submenu_id = a.submenu_id');
        $builder->join('menus as d', 'd.menu_id = c.menu_id');
        $builder->where('c.submenu_active',1);
        $builder->where('d.menu_active',1);
        $builder->where('b.role_id',$id);
        $builder->groupBy('d.menu_id');
        $builder->orderBy('d.menu_id','ASC');

        $query = $builder->get();

        return $query->getResultArray();
    }
    function navsubmenu($id, $menu)
    {
        $builder = $this->db->table('submenus as a');
        $builder->select('
                b.role_id, 
                d.role_nama, 
                a.menu_id, 
                c.menu_nama, 
                a.submenu_nama, 
                a.submenu_icon, 
                a.submenu_link, 
                a.submenu_active
            ');
        $builder->join('rolemenus AS b', 'a.submenu_id = b.submenu_id');
        $builder->join('menus AS c', 'a.menu_id = c.menu_id');
        $builder->join('roles AS d', 'b.role_id = d.role_id');
        $builder->where('a.submenu_active = 1 AND c.menu_active = 1');
        $builder->where('a.menu_id', $menu);
        $builder->where('b.role_id', $id);

        $builder->orderBy('a.menu_id', 'ASC');

        $query = $builder->get();
        $result = $query->getResult();

        return $result;

    }
}
