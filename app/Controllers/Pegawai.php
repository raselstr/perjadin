<?php

namespace App\Controllers;

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
         $datapegawais = $pegawais->findAll();
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
        $datapegawais = $pegawais->findAll();
        $data = [
            'title' => 'Tambah Pegawai',
            'subtitle' => 'Home',
            'pegawais' => $datapegawais,
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
       $peg = $this->request->getPost();
       $save = $pegawais->save($peg);

       if ($save){
        // session()->setFlashdata(['info' => 'success','message'=>'Sukses disimpan']);
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
        $peg = $pegawais->find($id);
        if(is_object($peg)){
            $data = [
                'title' => 'Edit Tambah Pegawai',
                'subtitle' => 'Home',
                'peg'   => $peg,
                // 'pegawai'   => $pegawais->findAll(),
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
