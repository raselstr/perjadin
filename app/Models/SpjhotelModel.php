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
        'hotel_idspt',
        'hotel_idpegawai',
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
}
