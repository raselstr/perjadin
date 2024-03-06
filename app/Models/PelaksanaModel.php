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

    function datapelaksanaall($id=null)
    {
        // dd($subquery);
        $builder = $this->db->table('pelaksanas');
        $builder->select('*');
        $builder->join('spts','spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais','pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pejabats','pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('pangkats','pangkats.pangkat_id = pegawais.pangkat_id');
        $builder->join('lokasiperjadins','lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');
        $builder->where('pelaksanas.spt_id',$id);
        $builder->orderBy('pangkats.pangkat_id', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }
    function datapelaksanatotal($id=null)
    {
        // dd($subquery);
        $builder = $this->db->table('pelaksanas');
        $builder->select('*');
        $builder->join('spts','spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais','pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pejabats','pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('pangkats','pangkats.pangkat_id = pegawais.pangkat_id');
        $builder->join('lokasiperjadins','lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');
        $builder->where('pelaksanas.spt_id',$id);
        $builder->orderBy('pangkats.pangkat_id', 'DESC');
        $query = $builder->get();
        $result = [
            'data' => $query->getResult(),
            'jumlah' => $query->getNumRows(),
        ];
        return $result;
    }
    function datapelaksana($id=null)
    {   
        $subquery = $this->db->table('pejabats')->select('pejabats.pejabat_nip')
                            ->join('spts','spts.spt_pjb_tugas = pejabats.pejabat_id')
                            ->where('pejabats.pejabat_kode',esc('Kaban'))
                            ->groupby('pejabats.pejabat_nip')
                            ->get();
        $nip = $subquery->getRow();
        $builder = $this->db->table('pelaksanas');
        $builder->select('*');
        $builder->join('spts','spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais','pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pejabats','pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('pangkats','pangkats.pangkat_id = pegawais.pangkat_id');
        $builder->join('lokasiperjadins','lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');

        $builder->where('pelaksanas.spt_id',$id);
        
        
        $builder->where('pegawais.pegawai_nip !=',$nip->pejabat_nip);

        $builder->orderBy('pelaksanas.pelaksana_utama', 'DESC');
        $builder->orderBy('pangkats.pangkat_id', 'DESC');
        $builder->orderBy('pegawais.pegawai_nip','ASC');
        $query = $builder->get();
        $result = [
            'data' => $query->getResult(),
            'jumlah' => $query->getNumRows(),
        ];
        return $result;
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
        $array = ['pelaksanas.spt_id' => $id, 'pelaksanas.pelaksana_utama' => 0];
        $builder = $this->db->table('pelaksanas');
        $builder->select('*');
        // $builder->selectCount('pelaksanas.pelaksana_utama');
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
        $builder->orderBy('pegawais.eselon_id', 'DESC');
        $builder->orderBy('pangkats.pangkat_id', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }

    public function angkaKeHuruf($angka)
    {
        $bilangan = array(
            '',
            'satu',
            'dua',
            'tiga',
            'empat',
            'lima',
            'enam',
            'tujuh',
            'delapan',
            'sembilan'
        );

        if ($angka < 10) {
            return $bilangan[$angka];
        } elseif ($angka < 20) {
            // Bilangan antara 10 hingga 19
            $bilanganBelasan = array(
                'sepuluh',
                'sebelas',
                'dua belas',
                'tiga belas',
                'empat belas',
                'lima belas',
                'enam belas',
                'tujuh belas',
                'delapan belas',
                'sembilan belas'
            );
            return $bilanganBelasan[$angka - 10];
        } elseif ($angka < 100) {
            // Bilangan antara 20 hingga 99
            return $bilangan[$angka / 10] . ' puluh ' . $bilangan[$angka % 10];
        } elseif ($angka < 1000) {
            // Bilangan antara 100 hingga 999
            return $bilangan[$angka / 100] . ' ratus ' . $this->angkaKeHuruf($angka % 100);
        } elseif ($angka < 1000000) {
            // Bilangan antara 1000 hingga 999999
            return $this->angkaKeHuruf($angka / 1000) . ' ribu ' . $this->angkaKeHuruf($angka % 1000);
        } elseif ($angka < 1000000000) {
            // Bilangan antara 1 juta hingga 999 juta
            return $this->angkaKeHuruf($angka / 1000000) . ' juta ' . $this->angkaKeHuruf($angka % 1000000);
        }
    }

    function kabanpelaksana($id=null)
    {
       $subquery = $this->db->table('pejabats')->select('pejabats.pejabat_nip')
                            ->join('spts','spts.spt_pjb_tugas = pejabats.pejabat_id')
                            ->where('pejabats.pejabat_kode',esc('Kaban'))
                            ->groupby('pejabats.pejabat_nip')
                            ->get();
        $nip = $subquery->getRow();
                            // ->where('pejabats.pejabat_aktif',1);
        // dd($subquery);
        $builder = $this->db->table('pelaksanas');
        $builder->select('*');
        $builder->join('spts','spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais','pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pejabats','pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('pangkats','pangkats.pangkat_id = pegawais.pangkat_id');
        $builder->join('lokasiperjadins','lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');
        
        $builder->where('pelaksanas.spt_id',$id);
        $builder->where('pegawais.pegawai_nip =',$nip->pejabat_nip);
        $query = $builder->get();
        return $query->getResult();
    }

    
}

