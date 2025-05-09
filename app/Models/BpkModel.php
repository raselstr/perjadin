<?php

namespace App\Models;

use CodeIgniter\Model;

class BpkModel extends Model
{
        function rekapbpkall($thn, $tgl1 = null, $tgl2 = null)
        {
            // dd($subquery);
            $builder = $this->db->table('spts As a');
            $builder->select('
            a.spt_id, 
            a.spt_tahun, 
            a.spt_nomor, 
            a.sppd_nomor, 
            a.spt_tgl, 
            a.spt_jenis, 
            a.spt_acara, 
            a.spt_dasar, 
            a.spt_lama, 
            a.spt_mulai, 
            a.spt_berakhir, 
            b.pelaksana_id, 
            c.pegawai_nip, 
            c.pegawai_nama, 
            c.pegawai_jabatan, 
            c.eselon_id, 
            c.pangkat_id, 
            c.pegawai_tingkat, 
            d.pangkat_nama, 
            d.pangkat_gol,
            e.jenisperjadin_nama,
            f.tingkat_nama, 
	        f.tingkat_uraian,
            g.lokasiperjadin_nama
            ');
            $builder->join('pelaksanas AS b', 'a.spt_id = b.spt_id');
            $builder->join('pegawais AS c', 'b.pegawai_id = c.pegawai_id');
            $builder->join('pangkats AS d', 'c.pangkat_id = d.pangkat_id');
            $builder->join('jenisperjadins AS e', 'a.spt_jenis = e.jenisperjadin_id');
            $builder->join('tingkats AS f', 'c.pegawai_tingkat = f.tingkat_id');
            $builder->join('lokasiperjadins AS g', 'a.spt_tujuan = g.lokasiperjadin_id');
            $builder->where('a.spt_verif', 1);
            $builder->where('a.spt_tahun', $thn);
            if ($tgl1 !== null && $tgl2 !== null) {
                $builder->where('a.spt_tgl >=', $tgl1);
                $builder->where('a.spt_tgl <=', $tgl2);
            }

            $builder->orderBy('a.spt_tgl', 'ASC');
            $query = $builder->get();
            return $query->getResult();
        }

        function bpkharian($pelaksana)
        {
            $builder = $this->db->table('spts AS a');
            $builder->select('
                a.spt_id,
                c.uangharian_jumlah, 
                c.uangharian_jumlahbiayatransport, 
                c.uangharian_jumlahrepresentasi, 
                c.uangharian_jumlahsewamobil, 
            ');
            $builder->join('pelaksanas AS b', 'a.spt_id = b.spt_id', 'LEFT');
            $builder->join('uangharians AS c', 'b.pelaksana_id = c.uangharian_idpelaksana', 'LEFT');
            $builder->where('b.pelaksana_id', $pelaksana);
            $query = $builder->get();
            return $query->getResult();
        }

        function bpkpesawat($pelaksana)
        {
            $builder = $this->db->table('spts AS a');
            $builder->select('
                a.spt_id,
                c.uangharian_jumlah, 
                c.uangharian_jumlahbiayatransport, 
                c.uangharian_jumlahrepresentasi, 
                c.uangharian_jumlahsewamobil, 
            ');
            $builder->join('pelaksanas AS b', 'a.spt_id = b.spt_id', 'LEFT');
            $builder->join('uangharians AS c', 'b.pelaksana_id = c.uangharian_idpelaksana', 'LEFT');
            $builder->where('b.pelaksana_id', $pelaksana);
            $query = $builder->get();
            return $query->getResult();
        }
       

    
}
