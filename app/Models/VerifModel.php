<?php

namespace App\Models;

use CodeIgniter\Model;

class VerifModel extends Model
{
    function verifdataspt()
    {
        $builder = $this->db->table('spts');
        $builder->select('spts.*, pejabats.pejabat_nama, lokasiperjadins.lokasiperjadin_nama');
        $builder->join('pejabats', 'pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('lokasiperjadins', 'lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');
        $builder->where('spts.spt_verif',1);
        $builder->orderBy('spts.created_at', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }

    function verifdatasptid($id)
    {
        $builder = $this->db->table('pelaksanas');
        $builder->select('pelaksanas.*, spts.*, pegawais.*, pejabats.pejabat_nama, lokasiperjadins.lokasiperjadin_nama');
        $builder->join('spts', 'spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais', 'pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pejabats', 'pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('lokasiperjadins', 'lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');
        $builder->where('spts.spt_verif',1);
        $builder->where('spts.spt_id',$id);
        $builder->orderBy('spts.created_at', 'DESC');
        $query = $builder->get();
        $result = [
            'data' => $query->getResult(),
            'jumlah' =>$query->getNumRows(),
        ];
        return $result;
    }
    
}
