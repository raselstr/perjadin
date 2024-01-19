<?php

namespace App\Models;

use CodeIgniter\Model;

class RampungModel extends Model
{
    function rampungdataspt()
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

    function rampungall($id)
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
        $result = $query->getResult();
        return $result;
    }
    function rampungutama($id)
    {
        $builder = $this->db->table('pelaksanas');
        $builder->select('pelaksanas.*, spts.*, pegawais.*, pejabats.pejabat_nama, lokasiperjadins.lokasiperjadin_nama');
        $builder->join('spts', 'spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais', 'pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pejabats', 'pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('lokasiperjadins', 'lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');
        $builder->where('spts.spt_verif',1);
        $builder->where('pelaksanas.pelaksana_utama',1);
        $builder->where('spts.spt_id',$id);
        $builder->orderBy('spts.created_at', 'DESC');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }
    
    function rampunghotel($id = null)
    {
        // 
        $builder = $this->db->table('spjhotels As a');
        $builder->select('a.*');
        $builder->join('pelaksanas As b', 'b.pelaksana_id = a.spjhotel_pelaksanaid', 'RIGHT');
        $builder->join('spts As c', 'c.spt_id = b.spt_id');
        $builder->join('pegawais As d', 'd.pegawai_id = b.pegawai_id');
        $builder->where('c.spt_verif', 1);
        $builder->where('a.spjhotel_pelaksanaid', $id);
        $builder->where('a.spjhotel_verif', 1);
        $builder->orderBy('a.spjhotel_created_at', 'ASC');

        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    function rampungpesawat($id)
    {
        $builder = $this->db->table('spjpesawats As a');
        $builder->select('a.*');
        $builder->join('pelaksanas As b', 'b.pelaksana_id = a.spjpesawat_pelaksanaid', 'RIGHT');
        $builder->join('spts As c', 'c.spt_id = b.spt_id');
        $builder->join('pegawais As d', 'd.pegawai_id = b.pegawai_id');
        $builder->where('c.spt_verif', 1);
        $builder->where('a.spjpesawat_pelaksanaid', $id);
        $builder->where('a.spjpesawat_verif', 1);
        $builder->orderBy('a.spjpesawat_created_at', 'ASC');

        $query = $builder->get();
        $result = $query->getResult();

        return $result;
    }
    function rampungtaksi($id)
    {
        $builder = $this->db->table('spjtaksis As a');
        $builder->select('a.*');
        $builder->join('pelaksanas As b', 'b.pelaksana_id = a.spjtaksi_pelaksanaid', 'RIGHT');
        $builder->join('spts As c', 'c.spt_id = b.spt_id');
        $builder->join('pegawais As d', 'd.pegawai_id = b.pegawai_id');
        $builder->where('c.spt_verif', 1);
        $builder->where('a.spjtaksi_pelaksanaid', $id);
        $builder->where('a.spjtaksi_verif', 1);
        $builder->orderBy('a.spjtaksi_created_at', 'ASC');

        $query = $builder->get();
        $result = $query->getResult();

        return $result;
    }

    function verifjadin($id)
    {
        $builder = $this->db->table('laporjadins');
        $builder->select('laporjadins.*, spts.*, pejabats.pejabat_nama, lokasiperjadins.lokasiperjadin_nama');
        $builder->join('spts', 'spts.spt_id = laporjadins.laporjadin_sptid', 'RIGHT');
        $builder->join('pejabats', 'pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('lokasiperjadins', 'lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');
        $builder->where('spts.spt_verif', 1);
        $builder->where('spts.spt_id', $id);
        $builder->orderBy('spts.created_at', 'DESC');
        $query = $builder->get();

        return $query->getResult();
    }


   



    
}
