<?php

namespace App\Models;

use CodeIgniter\Model;

class SpjPesawatModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'spjpesawats';
    protected $primaryKey       = 'spjpesawat_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'spjpesawat_pelaksanaid',
        'spjpesawat_jenis',
        'spjpesawat_maskapai',
        'spjpesawat_notiket',
        'spjpesawat_kdboking',
        'spjpesawat_tgl',
        'spjpesawat_dari',
        'spjpesawat_ke',
        'spjpesawat_harga',
        'spjpesawat_fototiket',
        'spjpesawat_bill',
        'spjpesawat_verif',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'spjpesawat_created_at';
    protected $updatedField  = 'spjpesawat_updated_at';
    protected $deletedField  = 'spjpesawat_deleted_at';

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



    function spjpesawat()
    {
        $builder = $this->db->table('spjpesawats As a');
        $builder -> select('a.*, b.pelaksana_id, c.spt_id, c.spt_nomor, c.spt_tgl, d.pegawai_nama, d.pegawai_nip,d.pegawai_id, c.spt_uraian');
        $builder -> join('pelaksanas As b', 'b.pelaksana_id = a.spjpesawat_pelaksanaid', 'RIGHT');
        $builder -> join('spts As c', 'c.spt_id = b.spt_id');
        $builder -> join('pegawais As d', 'd.pegawai_id = b.pegawai_id');
        $builder -> where('c.spt_verif', 1);
        $query = $builder -> get();
        $result = [
            'result' => $query->getResult(),
            'jumlah' => $query->getNumRows(),
        ];

        return $result;
    }
}
