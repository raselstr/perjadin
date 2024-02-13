<?php

namespace App\Controllers;

use App\Models\SptModel;
use App\Models\PelaksanaModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Verifspt extends ResourcePresenter
{
    protected $session;
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */

    public function __construct()
    {
        // Load session helper
        helper('session');

        // Mendapatkan instance dari session
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        helper('date');
        $session = $this->session->get('idpengguna');
        $sessionthn = $this->session->get('tahun');
        
        $spt = new SptModel();
        // $penugas = new PejabatModel();
        
        
        $dataspt = $spt->verifpelaksanaspt($sessionthn, $session);
        $data = [
            'title'     => 'Verifikasi Surat Perintah Tugas',
            'subtitle'  => 'Home',
            'spt'       => $dataspt,
            // 'pejabat'   => $penugas->findAll(),
        ];
        // dd($data);
        return view('spt/verif', $data);
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
        $sesispt = $this->request->getPost('sesisptid');
        // dd($cek, $cekutama);
       
        $validation = \Config\Services::validation();
        // $tgl_mulai = $spt->valid_tanggalspt($id);
        $valid = $this->validate([
            'spt_id'        => [
                'rules'     => 'permit_empty|is_natural_no_zero'
            ],
            'spt_nomor' => [
                'rules' => 'required|is_unique[spts.spt_nomor,spt_id,{spt_id}]',
                'errors' => [
                    'required'  => 'Nomor SPT Wajib diisi ! ',
                    'is_unique' => 'Nomor sudah digunakan, Harap masukkan nomor lain !',
                ]
            ],
            'sppd_nomor' => [
                'rules' => 'required|is_unique[spts.sppd_nomor,spt_id,{spt_id}]',
                'errors' => [
                    'required'  => 'Nomor SPD Wajib diisi ! ',
                    'is_unique' => 'Nomor sudah digunakan, Harap masukkan nomor lain !',
                ]
            ],
           
            'spt_tgl' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => 'Tanggal SPT Wajib diisi ! ',
                ]
            ],

        ]);
        $tglmulai = strtotime($this->request->getVar('spt_mulai'));
        $tglspt = strtotime($this->request->getVar('spt_tgl'));
        

        if(!$valid) {
            if($tglspt > $tglmulai) {
                $errors = [
                    'error' => true,
                    'spt_tgl' => $tglspt,
                    'spt_mulai' => $tglmulai,
                    'messages' => 'Tanggal SPT melebihi dari Tanggal Mulai Perjalanan, Harap diganti!',
                ];
                return $this->response->setJSON($errors);
            } 
                $errors = [
                    'error' => true,
                    'messages' => $validation->getErrors(),
                ];
                return $this->response->setJSON($errors);
            
        } else {
                $spt = new SptModel();
           
                $data = $this->request->getPost();
                $spttgl = $this->request->getPost('spt_tgl');
                $data['spt_tgl'] = date('Y-m-d', strtotime($spttgl));
                $spt->save($data);
                $responsesuccess = [
                    'success'   => true,
                    'messages'   => 'Data Berhasil disimpan'
                ];
                return $this->response->setJSON($responsesuccess);
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
