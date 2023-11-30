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
        $spjhotel = $model->spjhotel();
        $data = [
            'title'     => 'Pertanggung Jawaban Hotel',
            'subtitle'  => 'Home',
            'spjhotel'  => $spjhotel,
        ];
        // dd($spjhotel);
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
           
            $data = $this->request->getPost();
            
            $foto = $this->request->getFile('hotel_foto');
            $scan = $this->request->getFile('hotel_bill');
            
            $namafoto = $foto->getRandomName();
            $namascan = $scan->getRandomName();

            $spjhotel = new SpjhotelModel();
            $data['hotel_foto'] = $namafoto;
            $data['hotel_bill'] = $namascan;
            // dd($data);

            $save = $spjhotel->save($data);
            
            if ($save) {
                $foto->move(FCPATH . 'image/hotel', $namafoto);
                $scan->move(FCPATH . 'image/hotelbill', $namascan);

                return $this->response->setJSON($data);
            } else {
                $validationerror = [
                    'error'     => true,
                    'message'   => $spjhotel->errors(),
                ];
                return $this->response->setJSON($validationerror);
            }
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
        $spjhotel = new SpjhotelModel();
        $data = $spjhotel->find($id);
        return $this->response->setJSON($data);
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
