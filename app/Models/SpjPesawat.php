<?php

namespace App\Models;

use CodeIgniter\Model;

class SpjPesawat extends Model
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
        'spjpesawat_harga',
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
}
