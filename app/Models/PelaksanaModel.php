<?php

namespace App\Models;

use CodeIgniter\Model;

class PelaksanaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pelaksanas';
    protected $primaryKey       = 'pelaksana_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['spt_id','pegawai_id','pelaksana_utama'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        // 'pelaksana_id'  => 'permit_empty',
        // 'spt_id'      => 'permit_empty',
        // 'pegawai_id'  => 'is_unique[pelaksanas.pegawai_id,spt_id,{spt_id}]',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function datapelaksana($id=null)
    {
        $builder = $this->db->table('pelaksanas');
        $builder->select('*');
        $builder->join('spts','spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais','pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pejabats','pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('pangkats','pangkats.pangkat_id = pegawais.pangkat_id');
        $builder->join('lokasiperjadins','lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');


        $builder->where('pelaksanas.spt_id',$id);
        $query = $builder->get();
        return $query->getResult();
    }
    function pelaksanastatus($id=null)
    {
        $builder = $this->db->table('pelaksanas');
        $builder->select('pelaksanas.pelaksana_utama');
        $builder->join('spts','spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais','pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->where('pelaksanas.pelaksana_id',$id);
        $query = $builder->get();
        return $query->getResultArray();
    }

    function caripengikut($id)
    {
        $array = ['pelaksanas.spt_id' => $id];
        $builder = $this->db->table('pelaksanas');
        $builder->select('*');
        $builder->join('spts','spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais','pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->where($array);
        $query = $builder->get();
        return $query->getNumRows();
    }
    function cariutama($id)
    {
        $array = ['pelaksanas.spt_id' => $id, 'pelaksanas.pelaksana_utama' => 1];
        $builder = $this->db->table('pelaksanas');
        $builder->select('*');
        // $builder->selectCount('pelaksanas.pelaksana_utama');
        $builder->join('spts','spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais','pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->where($array);
        $query = $builder->get();
        return $query->getNumRows();
    }

    function pelaksanautama ($id)
    {
        $array = ['pelaksanas.spt_id' => $id, 'pelaksanas.pelaksana_utama' => 1];
        $builder = $this->db->table('pelaksanas');
        $builder->select('*');
        $builder->join('pegawais','pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pangkats','pangkats.pangkat_id = pegawais.pangkat_id');
        $builder->where($array);
        $query = $builder->get();
        return $query->getResult();
    }
    function pelaksanapengikut ($id)
    {
        $array = ['pelaksanas.spt_id' => $id, 'pelaksanas.pelaksana_utama' => 0];
        $builder = $this->db->table('pelaksanas');
        $builder->select('*');
        $builder->join('pegawais','pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pangkats','pangkats.pangkat_id = pegawais.pangkat_id');
        $builder->where($array);
        $query = $builder->get();
        return $query->getResult();
    }

    
}

