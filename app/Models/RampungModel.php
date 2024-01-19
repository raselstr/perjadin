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
    
    

    function verifdatapelaksana($id = null)
    {
        $builder = $this->db->table('pelaksanas');
        $builder->select('pelaksanas.*, spts.*, pegawais.*, pejabats.pejabat_nama, lokasiperjadins.lokasiperjadin_nama');
        $builder->join('spts', 'spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais', 'pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pejabats', 'pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('lokasiperjadins', 'lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');
        $builder->where('spts.spt_verif',1);
        $builder->where('pelaksanas.pelaksana_id',$id);
        $builder->orderBy('spts.created_at', 'DESC');
        $query = $builder->get();
        $result = [
            'data' => $query->getResult(),
            'jumlah' =>$query->getNumRows(),
        ];
        return $result;
    }

    function verifhotel($id = null)
    {
        $builder = $this->db->table('spjhotels As a');
        $builder->select('a.*, b.pelaksana_id, c.spt_id, c.spt_nomor, c.spt_tgl, c.spt_mulai, c.spt_berakhir, c.spt_tempat,d.pegawai_nama, d.pegawai_nip,d.pegawai_id, c.spt_uraian');
        $builder->join('pelaksanas As b', 'b.pelaksana_id = a.spjhotel_pelaksanaid', 'RIGHT');
        $builder->join('spts As c', 'c.spt_id = b.spt_id');
        $builder->join('pegawais As d', 'd.pegawai_id = b.pegawai_id');
        $builder->where('c.spt_verif', 1);
        if ($id !== null){
            $builder->where('b.pelaksana_id', $id);
        }
        $builder->orderBy('a.spjhotel_created_at', 'DESC');

        $query = $builder->get();
        $result = [
            'data' => $query->getResult(),
            'nilai' => $query->getNumRows(),
        ];
        return $result;
    }

    function verifpesawat($id)
    {
        $builder = $this->db->table('spjpesawats As a');
        $builder->select('a.*, b.pelaksana_id, c.spt_id, c.spt_nomor, c.spt_tgl, c.spt_mulai, c.spt_berakhir, c.spt_tempat,d.pegawai_nama, d.pegawai_nip,d.pegawai_id, c.spt_uraian');
        $builder->join('pelaksanas As b', 'b.pelaksana_id = a.spjpesawat_pelaksanaid', 'RIGHT');
        $builder->join('spts As c', 'c.spt_id = b.spt_id');
        $builder->join('pegawais As d', 'd.pegawai_id = b.pegawai_id');
        $builder->where('c.spt_verif', 1);
        $builder->where('b.pelaksana_id', $id);
        $builder->orderBy('a.spjpesawat_created_at', 'DESC');

        $query = $builder->get();
        $result = $query->getResult();

        return $result;
    }
    function veriftaksi($id)
    {
        $builder = $this->db->table('spjtaksis As a');
        $builder->select('a.*, b.pelaksana_id, c.spt_id, c.spt_nomor, c.spt_tgl, c.spt_mulai, c.spt_berakhir, c.spt_tempat,d.pegawai_nama, d.pegawai_nip,d.pegawai_id, c.spt_uraian');
        $builder->join('pelaksanas As b', 'b.pelaksana_id = a.spjtaksi_pelaksanaid', 'RIGHT');
        $builder->join('spts As c', 'c.spt_id = b.spt_id');
        $builder->join('pegawais As d', 'd.pegawai_id = b.pegawai_id');
        $builder->where('c.spt_verif', 1);
        $builder->where('b.pelaksana_id', $id);
        $builder->orderBy('a.spjtaksi_created_at', 'DESC');

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
