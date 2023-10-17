<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaisModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pegawais';
    protected $primaryKey       = 'pegawai_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['pegawai_nip','pegawai_nama','pegawai_jabatan','eselon_id','pangkat_id'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'pegawai_nip'       => 'required|is_unique|max_length[18]|min_length[9]|alpha_numeric_space',
        'pegawai_nama'      => 'required|min_length[3]',
        'pegawai_jabatan'   => 'required|max_length[50]|min_length[5]',
        'eselon_id'         => 'required',
        'pangkat_id'        => 'required',
    ];
    protected $validationMessages   = [
        'pegawai_nip' => [
            'required'              => 'NIP Wajib diisi',
            'is_unique'             => 'NIP sudah digunakan',
            'max_length'            => 'NIP Maximal 18 Karekter',
            'min_length'            => 'NIP Minimal 9 karekter',
            'numeric_space'    => 'NIP Harus berisikan angka',
        ],
        'pegawai_nama' => [
            'required'              => '{field} Wajib diisi',
            'min_length'            => '{field} Minimal 3 Karakter',
        ],
        'pegawai_jabatan' => [
            'required'              => '{field} Wajib diisi',
            'max_length'            => '{field} Maksimal 50 Karakter',
            'min_length'            => '{field} Minimal 5 Karakter',
        ],
        'eselon_id' => [
            'required'              => '{field} Wajib dipilih sesuai daftar',
        ],
        'pangkat_id' => [
            'required'              => '{field} Wajib dipilih sesuai daftar',
        ],
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
