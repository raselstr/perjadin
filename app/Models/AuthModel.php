<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    function datalogin($user, $pass)
    {
        $builder = $this->db->table('users as a');
        $builder->select('a.user_nmlengkap,a.user_id, b.role_nama, c.role_id');
        $builder->join('roles as b', 'b.role_id = a.user_roleid');
        $builder->join('rolemenus as c', 'c.role_id = b.role_id');
        $builder->join('submenus AS d', 'd.submenu_id = c.submenu_id');
        $builder->join('menus AS e', 'e.menu_id = d.menu_id');
        $builder->where('d.submenu_active',1);
        $builder->where('a.user_nama',$user);

        $hashedPassword = $this->db->table('users')
                        ->select('user_password')
                        ->where('user_nama', $user)
                        ->get()
                        ->getRow()->user_password;

        if (password_verify($pass, $hashedPassword)) {
            $builder->orderBy('e.menu_id', 'ASC');
            $builder->orderBy('d.submenu_id', 'ASC');
            $query = $builder->get();
            $result = $query->getRowArray();
            return $result;
        }

        return null; // Login gagal
    }
    



    
}
