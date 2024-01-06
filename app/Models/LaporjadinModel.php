<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporjadinModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'laporjadins';
    protected $primaryKey       = 'laporjadin_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'laporjadin_sptid',
        'laporjadin_pembuka',
        'laporjadin_hasil',
        'laporjadin_penutup',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'laporjadin_datetime';
    protected $createdField  = 'laporjadin_created_at';
    protected $updatedField  = 'laporjadin_updated_at';
    protected $deletedField  = 'laporjadin_deleted_at';

    // Validation
    protected $validationRules      = [
        'laporjadin_pembuka'    => 'required',
        'laporjadin_hasil'      => 'required',
        'laporjadin_penutup'    => 'required',
    ];
    protected $validationMessages   = [
        'laporjadin_pembuka'    => [
            'required'  => 'Pembuka konsultasi harus diisi !!!'],
        'laporjadin_hasil'      => [
            'required'  => 'Hasil Konsultasi harus diisi !!!'],
        'laporjadin_penutup'    => [
            'required'  => 'Penutup Konsultasi harus diisi'],
    ];
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
