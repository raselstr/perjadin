<?php

namespace App\Controllers;

use App\Models\EselonsModel;
use App\Models\PangkatsModel;
use App\Models\PegawaisModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Pegawai extends ResourcePresenter
{
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    
    public function index()
    {

         $pegawais = new PegawaisModel();
         $datapegawais = $pegawais->getpegawaiAll();
         $data = [
            'title' => 'Daftar Pegawai',
            'subtitle' => 'Home',
            'pegawais' => $datapegawais,
        ];
        // dd($data);
        return view('pegawai/index', $data);
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
        $pegawais = new PegawaisModel();
        $eselon = new EselonsModel();
        $pangkat = new PangkatsModel();

        $datapegawais = $pegawais->findAll();
        $dataeselon = $eselon->findAll();
        $datapangkat = $pangkat->findAll();

        $data = [
            'title' => 'Tambah Pegawai',
            'subtitle'  => 'Home',
            'pegawais'  => $datapegawais,
            'eselon'    => $dataeselon,
            'pangkat'   => $datapangkat,
        ];
        // dd($data);
        return view('pegawai/tambahpegawai', $data);
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
       $pegawais = new PegawaisModel();
       $data = $this->request->getPost();

       $foto        = $this->request->getFile('pegawai_foto'); //Ambil file foto
       $namafoto    = $foto->getRandomName();
       $data['pegawai_foto'] = $namafoto;
       
       $save = $pegawais->save($data);
       if ($save){
            $foto->move(FCPATH. 'image/pegawai/',$namafoto);
            return redirect()->to(site_url('pegawai'))->with('info','Data Berhasil di Simpan');
       } else {
            return redirect()->back()->withInput()->with('validation', $pegawais->errors());
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
        $pegawais = new PegawaisModel();
        $eselon = new EselonsModel();
        $pangkat = new PangkatsModel();

        $peg = $pegawais->find($id);
        if(is_object($peg)){
            $data = [
                'title'     => 'Edit Tambah Pegawai',
                'subtitle'  => 'Home',
                'peg'       => $peg,
                'pegawai'   => $pegawais->findAll(),
                'eselon'    => $eselon->findAll(),
                'pangkat'   => $pangkat->findAll(),
            ];
           
            return view('pegawai/editpegawai', $data);
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
        $pegawais = new PegawaisModel();
        $data = $this->request->getPost();
        // dd($data);
        $update = $pegawais->update(['pegawai_id' => $id],$data);
        if($update){
            return redirect()->to(site_url('pegawai'))->with('info','Data Berhasil di Update');
        } else {
            return redirect()->back()->withInput()->with('validation', $pegawais->errors());
        }
    
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
        
        $pegawais = new PegawaisModel();

        $datapegawai = $pegawais->find($id);
        unlink('image/pegawai/'.$datapegawai['pegawai_foto']);

        $pegawais->delete($id);
        return redirect()->to(site_url('pegawai'))->with('info','Data Berhasil di Hapus');
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
        
    }
}
