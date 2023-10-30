<?php

namespace App\Models;

use CodeIgniter\Model;

class SptModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'spts';
    protected $primaryKey       = 'spt_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['spt_tahun','spt_nomor','spt_tgl','spt_jenis','spt_pjb_tugas','spt_dasar','spt_uraian','spt_lama','spt_mulai','spt_berakhir','spt_tujuan','spt_transport'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'spt_id'        => 'permit_empty|is_natural_no_zero',
        'spt_pjb_tugas' => 'required',
        'spt_jenis'     => 'required',
        'spt_uraian'    => 'required',
        'spt_lama'      => 'required',
        'spt_mulai'     => 'required',
        'spt_tujuan'    => 'required',
        'spt_transport' => 'required',
    ];
    protected $validationMessages   = [
        'spt_pjb_tugas' => [
            'required'  => "Pejabat yang menugaskan wajib diisi !",
        ],
        'spt_jenis' => [
            'required'  => "Jenis Perjalanan Dinas wajib diisi !",
        ],
        'spt_uraian' => [
            'required'  => "Maksud Perjalanan Dinas wajib diisi",
        ],
        'spt_lama' => [
            'required'  => "Lama Perjalanan Dinas wajib diisi !",
        ],
        'spt_mulai' => [
            'required'  => "Tanggal Mulai Perjalanan Dinas wajib diisi !",
        ],
        'spt_tujuan' => [
            'required'  => "Kota/ Provinsi Tujuan Perjalanan Dinas wajib diisi !",
        ],
        'spt_transport' => [
            'required'  => "Transportasi yang digunakan Perjalanan Dinas wajib diisi !",
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

    // function ambilspt($id=null,$jenis=null)
    // {
    //     if($jenis)=="Luar Kota dalam Provinsi" {
    //         $builder = $this->db->table('spts');
    //     $builder->select('*');
    //     $builder->where('spts.spt_id',$id);
    //     $query = $builder->get();
    //     return $query->getResult();
    //     }
    //     $builder = $this->db->table('spts');
    //     $builder->select('*');
    //     $builder->where('spts.spt_id',$id);
    //     $query = $builder->get();
    //     return $query->getResult();
    // }
}
