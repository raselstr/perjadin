<?php

namespace App\Controllers;

use App\Models\SptModel;
use App\Models\VerifModel;
use App\Models\SpjhotelModel;
use App\Models\SpjTaksiModel;
use App\Models\LaporjadinModel;
use App\Models\SpjHotelModel as ModelsSpjHotelModel;
use App\Models\SpjPesawatModel;
use App\Models\UangHarianModel;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\RESTful\ResourcePresenter;

/**
 * @property IncomingRequest $request
 */


class Verifikasi extends ResourcePresenter
{
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $thn = session('tahun');
        $model = new VerifModel();
        $query = $model->verifdataspt($thn);
        $qrhotel = $model->verifhotel();
        $data = [
            'title' => 'Verifikasi Data Perjalanan Dinas',
            'subtitle' => 'Home',
            'data' => $query,
            'hotel' => $qrhotel,
        ];
        // dd($data);
        return view('verifikasi/index', $data);

    }

    public function form($id=null)
    {
        $model = new VerifModel();
        $query = $model->verifdatasptid($id);

        $data = [
            'title' => 'Verifikasi Data Laporan Perjalanan Dinas',
            'subtitle' => 'Home',
            'data'  => $query,
        ];
        // dd($data);
        return view('verifikasi/verif', $data);

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
        $model = new VerifModel();
        $modeluh = new UangHarianModel();
        $query = $model->verifdatapelaksana($id);
        $qrhotel = $model ->verifhotel($id);
        $qrpesawat = $model->verifpesawat($id);
        $qrtaksi = $model->veriftaksi($id);
        
        $uh = $modeluh->cariid($id);

        $data = [
            'title' => 'Data Laporan Perjalanan Dinas',
            'subtitle' => 'Home',
            'data'  => $query,
            'hotel' => $qrhotel,
            'pesawat' => $qrpesawat,
            'taksi' => $qrtaksi,
            'uh'    => $uh,
        ];
        // dd($data);
        return view('verifikasi/verifspj', $data);

    }

    public function showlapor($id = null)
    {
        $model = new VerifModel();
        $query = $model->verifdatasptid($id);
        $qrjadin = $model->verifjadin($id);


        $data = [
            'title' => 'Data Laporan Perjalanan Dinas',
            'subtitle' => 'Home',
            'data'  => $query,
            'perjadin'  => $qrjadin,
        ];
        // dd($data);
        return view('verifikasi/veriflapor', $data);

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
        $model = new SpjhotelModel();
        $post = $this->request->getPost();
        $saved = $model->save($post);
        if ($saved) {
                $pesan = [
                    'error' => false,
                    'messages' => 'Data berhasil disimpan ke database.'
                ];
            } else {
                $pesan = [
                    'error' => true,
                    'messages' => 'Gagal menyimpan data ke database.'
                ];
            }

            return $this->response->setJSON($pesan);
        
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
        $model = new LaporjadinModel();
        $query = $model->datasptid($id);

        $nmfoto1 = file_exists(FCPATH . 'image/dokuemtasi/' . $query[0]->laporjadin_foto1) ? $query[0]->laporjadin_foto1 : null;
        $nmfoto2 = file_exists(FCPATH . 'image/dokuemtasi/' . $query[0]->laporjadin_foto2) ? $query[0]->laporjadin_foto2 : null;
        $nmfoto3 = file_exists(FCPATH . 'image/dokuemtasi/' . $query[0]->laporjadin_foto3) ? $query[0]->laporjadin_foto3 : null;


        $hapus = $model->delete($query[0]->laporjadin_id);
        if($hapus) {
            if($nmfoto1 != "") {
                unlink(FCPATH . 'image/dokuemtasi/' . $query[0]->laporjadin_foto1);
            }
            if($nmfoto2 != "") {
                unlink(FCPATH . 'image/dokuemtasi/' . $query[0]->laporjadin_foto2);
            }
            if($nmfoto3 != "") {
                unlink(FCPATH . 'image/dokuemtasi/' . $query[0]->laporjadin_foto3);
            }

            // dd($query[0]->laporjadin_id);
            return redirect()->back();
        }
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

    public function verif()
    {
        $model = new LaporjadinModel();
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();

            $saved = $model->save($data);

            if ($saved) {
                $pesan = [
                    'error' => false,
                    'messages' => 'Data berhasil disimpan ke database.'
                ];
            } else {
                $pesan = [
                    'error' => true,
                    'messages' => 'Gagal menyimpan data ke database.'
                ];
            }

            return $this->response->setJSON($pesan);
        } 
    }


    public function verifpesawat()
    {
        $spjpesawat = new SpjPesawatModel();
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();

            $saved = $spjpesawat->save($data);

            if ($saved) {
                $pesan = [
                    'error' => false,
                    'messages' => 'Data berhasil disimpan ke database.'
                ];
            } else {
                $pesan = [
                    'error' => true,
                    'messages' => 'Gagal menyimpan data ke database.'
                ];
            }

            return $this->response->setJSON($pesan);
        } 
    }

    public function verifhotel()
    {
        $spjhotel = new SpjhotelModel();
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();

            $saved = $spjhotel->save($data);

            if ($saved) {
                $pesan = [
                    'error' => false,
                    'messages' => 'Data berhasil disimpan ke database.'
                ];
            } else {
                $pesan = [
                    'error' => true,
                    'messages' => 'Gagal menyimpan data ke database.'
                ];
            }

            return $this->response->setJSON($pesan);
        } 
    }

    public function veriftaksi()
    {
        $spjtaksi = new SpjTaksiModel();
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();

            $saved = $spjtaksi->save($data);

            if ($saved) {
                $pesan = [
                    'error' => false,
                    'messages' => 'Data berhasil disimpan ke database.'
                ];
            } else {
                $pesan = [
                    'error' => true,
                    'messages' => 'Gagal menyimpan data ke database.'
                ];
            }

            return $this->response->setJSON($pesan);
        } 
    }


    public function verifuangharian()
    {
        $uangharian = new UangHarianModel();
        $data = $this->request->getPost();
        // dd($data);
        $saved = $uangharian->save($data);
        if ($saved) {
                $pesan = [
                    'error' => false,
                    'messages' => 'Data berhasil disimpan ke database.',
                    'data' => $data,
                ];
            } else {
                $pesan = [
                    'error' => true,
                    'messages' => 'Gagal menyimpan data ke database.',
                    'data' => $data,
                ];
            }

            return $this->response->setJSON($pesan);
    }


    
}
