<?php

namespace App\Controllers;

use App\Models\JenisperjadinModel;
use App\Models\LokasiperjadinModel;
use App\Models\PegawaisModel;
use App\Models\PejabatModel;
use App\Models\PelaksanaModel;
use App\Models\SptModel;
use CodeIgniter\RESTful\ResourcePresenter;
use CodeIgniter\HTTP\IncomingRequest;

/**
 * @property IncomingRequest $request
 */

class Spt extends ResourcePresenter
{
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $spt = new SptModel();
        $penugas = new PejabatModel();
        $dataspt = $spt->pelaksanaspt();
        $data = [
            'title'     => 'Surat Perintah Tugas',
            'subtitle'  => 'Home',
            'spt'       => $dataspt,
            'pejabat'   => $penugas->findAll(),
        ];
        // dd($data);
        return view('spt/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        $lokasiperjadin = new LokasiperjadinModel();
        $jenisperjadin  = new JenisperjadinModel();
        $pejabat        = new PejabatModel();
        $data = [
            'title'     => 'Surat Perintah Tugas',
            'subtitle'  => 'Home',
            'lokasi'    => $lokasiperjadin->findAll(),
            'jenis'     => $jenisperjadin->findAll(),
            'pejabat'   => $pejabat->findAll(),
        ];
        // dd($data);
        return view('spt/tambahspt', $data);
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $spt = new SptModel();
        $data = $this->request->getPost();
        // dd($data);

        $save = $spt->save($data);
        // dd($spt->errors());
        if ($save){
            return redirect()->to(site_url('spt'))->with('info','Data Berhasil di Simpan');
        } else {
            return redirect()->back()->withInput()->with('validation', $spt->errors());
        }
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $spt = new SptModel();
        $lokasiperjadin = new LokasiperjadinModel();
        $jenisperjadin  = new JenisperjadinModel();
        $pejabat        = new PejabatModel();
        $dataspt = $spt->find($id);
        if(is_object($dataspt)){
            $data = [
                'title'     => 'Edit Tambah Pegawai',
                'subtitle'  => 'Home',
                'spt'       => $dataspt,
                'lokasi'    => $lokasiperjadin->findAll(),
                'jenis'     => $jenisperjadin->findAll(),
                'pejabat'   => $pejabat->findAll(),
            ];
           
            return view('spt/editspt', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
       
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $spt = new SptModel(); 
        $data = $this->request->getPost();
        $spt->save($data);
        return redirect()->back();
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        $spt = new SptModel();
        
        // $dataspt = $spt->find($id);
        $spt->delete($id);
        return redirect()->to(site_url('spt'))->with('info','Data Berhasil di Hapus');
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }

    public function pelaksana($id = null)
    {
        $spt = new SptModel();
        $pelaksana = new PegawaisModel();
        $pegpelaksana = new PelaksanaModel();
        $dataspt = $spt->find($id);
        $data = [
            'title'     => 'Tambah Pelaksana Perjalanan Dinas',
            'subtitle'  => 'Home',
            'spt'       => $dataspt,
            'peg'       => $pelaksana->orderBy('pegawais.pegawai_id')->findAll(),
            'pelks'     => $pegpelaksana->orderBy('pelaksanas.pelaksana_utama', SORT_DESC)->datapelaksana($id),
            ];

        // dd($data);    
        return view('spt/pelaksanaspt', $data);
        

    }

    // Membuat Select Option Dinamis / Select option bertingkat
    public function getdatalokasi()
    {
        $idlokasi = new LokasiperjadinModel();

        if($this->request->isAJAX()){
            $idjenis = $this->request->getVar('spt_jenis');
            $idtempat = $idlokasi->lokasijenis($idjenis);
            $isidata ="";
            foreach ($idtempat as $key => $value) :
               $isidata .='<option value="'.$value['lokasiperjadin_id'].'">'.$value['lokasiperjadin_nama'].'</option>';
            endforeach;
            $msg = [
                'data' => $isidata,
            ];
            echo json_encode($msg);
        }
    }

    public function verif()
    {
        $spt = new SptModel();
        $penugas = new PejabatModel();
        $dataspt = $spt->pelaksanaspt();
        $data = [
            'title'     => 'Verifikasi Surat Perintah Tugas',
            'subtitle'  => 'Home',
            'spt'       => $dataspt,
            'pejabat'   => $penugas->findAll(),
        ];
        // dd($data);
        return view('spt/verif', $data);
    }


    
}
