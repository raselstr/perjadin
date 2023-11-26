<?php

namespace App\Controllers;

use App\Models\SpjhotelModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Spjhotel extends ResourcePresenter
{
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $model = new SpjhotelModel();
        $query = $model->spjhotel();
        $data = [
            'title'     => 'Pertanggung Jawaban Hotel',
            'subtitle'  => 'Home',
            'spj'       => $query,
        ];
        // dd($data);
        return view('hotel/index', $data);
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
        
       
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        //  $data = [
        //     'title'     => 'Tambah Pertanggung Jawaban Hotel',
        //     'subtitle'  => 'Home',
        // ];
        // dd($data);
        // return view('hotel/modalform');
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        
        if($this->request->isAJAX()){
            // $idspt = $this->request->getVar('idspt');
            // $idpegawai = $this->request->getVar('idpegawai');
            $serializedData = $this->request->getPost('formdata');
            $formHotel = [];
            parse_str($serializedData,$formHotel);
            $spjhotel = new SpjhotelModel();
            $spjhotel->save($formHotel);

            $data = [
                'error'     => false,
                'message'   => 'Berhasil',
                // 'dataform'  => $serializedData,
                // 'idspt'     => $idspt,
                // 'idpegawai' => $idpegawai,
            ];
            return $this->response->setJSON($data);
        } else {
            echo "Perintah ini tidak dapat dilakukan";
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
        //
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
}
