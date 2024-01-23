<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\RawSql;
use ReturnTypeWillChange;

class RampungModel extends Model
{
    function rampungdataspt()
    {
        $builder = $this->db->table('spts');
        $builder->select('spts.*, pejabats.pejabat_nama, lokasiperjadins.lokasiperjadin_nama');
        $builder->join('pejabats', 'pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('lokasiperjadins', 'lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');
        $builder->where('spts.spt_verif',1);
        $builder->orderBy('spts.created_at', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }

    function rampungall($id)
    {
        $builder = $this->db->table('pelaksanas');
        $builder->select('pelaksanas.*, spts.*, pegawais.*, pejabats.pejabat_nama, lokasiperjadins.lokasiperjadin_nama');
        $builder->join('spts', 'spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais', 'pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pejabats', 'pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('lokasiperjadins', 'lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');
        $builder->where('spts.spt_verif',1);
        $builder->where('spts.spt_id',$id);
        $builder->orderBy('spts.created_at', 'DESC');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }
    function rampungutama($id)
    {
        $builder = $this->db->table('pelaksanas');
        $builder->select('pelaksanas.*, spts.*, pegawais.*, pejabats.pejabat_nama, lokasiperjadins.lokasiperjadin_nama');
        $builder->join('spts', 'spts.spt_id = pelaksanas.spt_id');
        $builder->join('pegawais', 'pegawais.pegawai_id = pelaksanas.pegawai_id');
        $builder->join('pejabats', 'pejabats.pejabat_id = spts.spt_pjb_tugas');
        $builder->join('lokasiperjadins', 'lokasiperjadins.lokasiperjadin_id = spts.spt_tujuan');
        $builder->where('spts.spt_verif',1);
        $builder->where('pelaksanas.pelaksana_utama',1);
        $builder->where('spts.spt_id',$id);
        $builder->orderBy('spts.created_at', 'DESC');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }
    
    function rampunghotel($id = null)
    {
        // 
        $builder = $this->db->table('spjhotels As a');
        $builder->select('a.*');
        $builder->join('pelaksanas As b', 'b.pelaksana_id = a.spjhotel_pelaksanaid', 'RIGHT');
        $builder->join('spts As c', 'c.spt_id = b.spt_id');
        $builder->join('pegawais As d', 'd.pegawai_id = b.pegawai_id');
        $builder->where('c.spt_verif', 1);
        $builder->where('a.spjhotel_pelaksanaid', $id);
        $builder->where('a.spjhotel_verif', 1);
        $builder->orderBy('a.spjhotel_created_at', 'ASC');

        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    function rampungpesawat($id)
    {
        $builder = $this->db->table('spjpesawats As a');
        $builder->select('a.*');
        $builder->join('pelaksanas As b', 'b.pelaksana_id = a.spjpesawat_pelaksanaid', 'RIGHT');
        $builder->join('spts As c', 'c.spt_id = b.spt_id');
        $builder->join('pegawais As d', 'd.pegawai_id = b.pegawai_id');
        $builder->where('c.spt_verif', 1);
        $builder->where('a.spjpesawat_pelaksanaid', $id);
        $builder->where('a.spjpesawat_verif', 1);
        $builder->orderBy('a.spjpesawat_created_at', 'ASC');

        $query = $builder->get();
        $result = $query->getResult();

        return $result;
    }
    function rampungtaksi($id)
    {
        $builder = $this->db->table('spjtaksis As a');
        $builder->select('a.*');
        $builder->join('pelaksanas As b', 'b.pelaksana_id = a.spjtaksi_pelaksanaid', 'RIGHT');
        $builder->join('spts As c', 'c.spt_id = b.spt_id');
        $builder->join('pegawais As d', 'd.pegawai_id = b.pegawai_id');
        $builder->where('c.spt_verif', 1);
        $builder->where('a.spjtaksi_pelaksanaid', $id);
        $builder->where('a.spjtaksi_verif', 1);
        $builder->orderBy('a.spjtaksi_created_at', 'ASC');

        $query = $builder->get();
        $result = $query->getResult();

        return $result;
    }

    function rampungperbup($id, $key)
    {
        $sql = 'd.perbup_tingkatid = c.pegawai_tingkat AND d.perbup_lokasiid = a.spt_tujuan ';
        $builder = $this->db->table('spts as a');
        $builder->select(
            'a.spt_id, 
            a.spt_tahun, 
            a.spt_nomor, 
            a.sppd_nomor, 
            a.spt_lama, 
            a.spt_tgl, 
            a.spt_acara, 
            c.pegawai_nama, 
            c.pegawai_nip, 
            c.pegawai_jabatan, 
            b.pelaksana_id, 
            d.*'
        );
        $builder->join('pelaksanas AS b', 'b.spt_id = a.spt_id');
        $builder->join('pegawais AS c', 'c.pegawai_id = b.pegawai_id');
        $builder->join('perbups AS d', new RawSql($sql));

        $builder->where('a.spt_verif', 1);
        $builder->where('a.spt_id', $id);
        $builder->where('b.pelaksana_id', $key);
        $builder->orderBy('a.created_at', 'DESC');
        $query = $builder->get();

        return $query->getResult();
    }


    function rampungperpelaksana($idspt, $idpelaksana)
    {
        $sqhotel = $this->db->table('spjhotels as e')->select('e.spjhotel_id, sum(e.spjhotel_hargatotal) As Hotel ');
                    $sqhotel->where('e.spjhotel_pelaksanaid',$idpelaksana);
                    $sqhotel->where('e.spjhotel_verif','1');
        $sqtaksi = $this->db->table('spjtaksis as f')->select('f. spjtaksi_id, sum(f.spjtaksi_harga) as Taksi' );
                    $sqtaksi->where('f.spjtaksi_pelaksanaid',$idpelaksana);
                    $sqtaksi->where('f.spjtaksi_verif','1');
        $sqpesawat = $this->db->table('spjpesawats as g')->select('g. spjpesawat_id, sum(g.spjpesawat_harga) as Pesawat');
                    $sqpesawat->where('g.spjpesawat_pelaksanaid',$idpelaksana);
                    $sqpesawat->where('g.spjpesawat_verif','1');
       $sql = 'd.perbup_tingkatid = c.pegawai_tingkat AND d.perbup_lokasiid = a.spt_tujuan ';
        $builder = $this->db->table('spts as a');
        $builder->select('
            SUM(CASE WHEN a.spt_acara = 1 THEN d.perbup_uhdiklat * a.spt_lama
                 WHEN a.spt_acara = 2 THEN d.perbup_uhrapat_fullboad * a.spt_lama END) AS UangHarian
        ');
        $builder->join('pelaksanas AS b', 'b.spt_id = a.spt_id');
        $builder->join('pegawais AS c', 'c.pegawai_id = b.pegawai_id');
        $builder->join('perbups AS d', new RawSql($sql));

        $builder->where('a.spt_verif', 1);
        $builder->where('a.spt_id', $idspt);
        $builder->where('b.pelaksana_id', $idpelaksana);
               
       
        $sqhotel->union($sqtaksi, 'Taksi');
        $sqhotel->union($sqpesawat, 'Pesawat');
        $sqhotel->union($builder, 'harian');
        

        $query = $sqhotel->get();

       $data = $query->getResult();

       $totals = [
            'hotel' => 0,
            'taksi' => 0,
            'pesawat' => 0,
        ];

        foreach ($data as $row) {
            $totals['hotel'] += $row->Hotel;
        }
        return [
            'result' => $data,
            'totals' => $totals,
        ];
    }
    //    $array = [
    //     'hotel' => $data[0],
    //     'taksi' => $data[1],
    //     'pesawat' => $data[2],
    //    ];
    //    $tothotel = $tottaksi = $totpesawat = 0;

    // //    foreach ($array as $key => $value) {
    // //     $total = $value->hotel;
    // //    }

    //    return $array;






    
}
