<?php

namespace App\Models;

use CodeIgniter\Model;

class SpjhotelModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'spjhotels';
    protected $primaryKey       = 'hotel_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'hotel_pelaksanaid',
        'hotel_nama',
        'hotel_nokamar',
        'hotel_typekamar',
        'hotel_foto',
        'hotel_bill',
        
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'hotel_created_at';
    protected $updatedField  = 'hotel_updated_at';
    protected $deletedField  = 'hotel_deleted_at';

    // Validation
    protected $validationRules      = [];
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


    function spjhotel() 
    {
        $builder = $this->db->table('spjhotels As a');
        $builder -> select('a.*, b.pelaksana_id, c.spt_id, c.spt_nomor, d.pegawai_nama, d.pegawai_nip,d.pegawai_id, c.spt_uraian');
        $builder -> join('pelaksanas As b','b.pelaksana_id = a.hotel_pelaksanaid','RIGHT');
        $builder -> join('spts As c','c.spt_id = b.spt_id');
        $builder -> join('pegawais As d','d.pegawai_id = b.pegawai_id');
        $builder -> where('c.spt_verif = 1');
        $query = $builder -> get();
        return $query->getResult();
    }

}

