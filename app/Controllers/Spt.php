<?php

namespace App\Controllers;

use App\Models\JenisperjadinModel;
use App\Models\LokasiperjadinModel;
use App\Models\PegawaisModel;
use App\Models\PelaksanaModel;
use App\Models\SptModel;
use CodeIgniter\RESTful\ResourcePresenter;

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
        $dataspt = $spt->findAll();
        $data = [
            'title'     => 'Surat Perintah Tugas',
            'subtitle'  => 'Home',
            'spt'       => $dataspt,
        ];
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
        $spt = new SptModel();
        $lokasiperjadin = new LokasiperjadinModel();
        $jenisperjadin = new JenisperjadinModel();
        $dataspt = $spt->findAll();
        $data = [
            'title'     => 'Surat Perintah Tugas',
            'subtitle'  => 'Home',
            'spt'       => $dataspt,
            'lokasi'    => $lokasiperjadin->findAll(),
            'jenis'     => $jenisperjadin->findAll(),
        ];
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
        $dataspt = $spt->find($id);
        if(is_object($dataspt)){
            $data = [
                'title'     => 'Edit Tambah Pegawai',
                'subtitle'  => 'Home',
                'spt'       => $dataspt,
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
        //
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
            'peg'       => $pelaksana->findAll(),
            'pelks'     => $pegpelaksana->datapelaksana($id),
            ];

        // dd($pegpelaksana->errors);    
        return view('spt/pelaksanaspt', $data);
        

    }

    public function getdatalokasi()
    {
        $lokasiperjadin  = new LokasiperjadinModel();
        // $jenisperjadin = new JenisperjadinModel();
        $jenisperjadin_id       = $this->request->getPost('jenisperjadin_id');
        dd($jenisperjadin_id);
        $getlokasiperjadin = $lokasiperjadin->lokasijenis($jenisperjadin_id);
        // dd($getlokasiperjadin);
        echo '<option value="">-----Pilih Lokasi Perjalanan Dinas -----------</option>';
        foreach ($getlokasiperjadin as $key => $value) {
            echo "<option value=".$value['lokasiperjadin_id'].">".$value['lokasiperjadin_nama']."</option>";
        }
    }
}
