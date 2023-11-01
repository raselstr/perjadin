<?php

namespace App\Controllers;

use App\Models\PelaksanaModel;
use CodeIgniter\RESTful\ResourcePresenter;
use CodeIgniter\Database\Exceptions\DatabaseException;

class Pelaksana extends ResourcePresenter
{
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $pelaksana = new PelaksanaModel();

        
        try {
            $data = $this->request->getPost();
            $pelaksana->save($data);
            return redirect()->back()->with('berhasil','Data Berhasil disimpan');
            // Data inserted successfully
        } catch (DatabaseException $e) {
            // $error = $e->getMessage();
            
            return redirect()->back()->with('error','Data sudah ada, harap memilih pegawai lain !');
            // Handle the duplicate entry error, perhaps by returning an error message.
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
        //
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
        $pelaksana = new PelaksanaModel();
        
        // $dataspt = $spt->find($id);
        $pelaksana->delete($id);
        return redirect()->back()->with('info','Data Berhasil di Hapus');
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

    public function updatetoggle()
    {
        $itemModel = new PelaksanaModel();
        $itemIds = $this->request->getPost('item_ids');
     

        if (!empty($itemIds)) {
            $itemModel->whereIn('pelaksana_id', $itemIds)->set(['pelaksana_utama' => 0])->update();

            // Set status menjadi 0 (nonaktif) untuk item yang dicentang
        } else {
            $itemModel->whereIn('pelaksana_id', $itemIds)->set(['pelaksana_utama' => 1])->update();
        }


        // $pelaksana = new PelaksanaModel();
        
        // // $catId = $this->request->getPost('catId');
        // $datapelaksana = $pelaksana->pelaksanastatus($catId);
        // $data = [
        //     'datastatus' => $datapelaksana
        // ];
        // // $status = $data['datastatus'][0]['pelaksana_utama'];
        // // $status = $datapelaksana['pelaksana_utama'];
        // if($data['datastatus'][0]['pelaksana_utama']=='1') {
        //     $data['datastatus'][0]['pelaksana_utama'] = '0';
        // } else {
        //     $status = '1';
        // }

        // $pelaksana->update(['pelaksana_id' => $catId],$status);

    }
}
