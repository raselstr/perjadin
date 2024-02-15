<?php

namespace App\Models;

use CodeIgniter\Model;

class PejabatModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'pejabats';
    protected $primaryKey = 'pejabat_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'pejabat_kode',
        'pejabat_namajabatan',
        'pejabat_nama',
        'pejabat_nip',
        'pejabat_pangkat',
        'pejabat_aktif',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [
        'pejabat_kode' => 'required',
        'pejabat_namajabatan' => 'required',
        'pejabat_nama' => 'required',
        'pejabat_nip' => 'required',
        'pejabat_pangkat' => 'required',
    ];
    protected $validationMessages = [
        'pejabat_kode' => [
            'required' => ' Wajib diisi..!!'
        ],
        'pejabat_namajabatan' => [
            'required' => ' Wajib diisi..!!'
        ],
        'pejabat_nama' => [
            'required' => ' Wajib diisi..!!'
        ],
        'pejabat_nip' => [
            'required' => ' Wajib diisi..!!'
        ],
        'pejabat_pangkat' => [
            'required' => ' Wajib diisi..!!'
        ],
    ];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];



    public function getOptions()
    {
        $options = [
            '1' => 'Kaban',
            '2' => 'Sekretaris',
        ];
        return $options;
    }

    function menuactive($id = null)
    {
        $builder = $this->db->table('pejabats as a');
        $builder->select('a.pejabat_aktif');
        $builder->where('a.pejabat_id', $id);
        $query = $builder->get();
        return $query->getResultArray();
    }

    function pejabataktif()
    {
        $builder = $this->db->table('pejabats as a');
        $builder->select('*');
        $builder->where('a.pejabat_aktif', 1);
        $query = $builder->get();
        return $query->getResult();
    }
}
