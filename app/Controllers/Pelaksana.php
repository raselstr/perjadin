<?php

namespace App\Controllers;

use TCPDF;
// use Dompdf\Dompdf;
use App\Models\SptModel;
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
        $spt = new SptModel();
        $dataspt = $spt->findAll();
        $data = [
            'title'     => 'Surat Perintah Tugas',
            'subtitle'  => 'Home',
            'spt'       => $dataspt,
        ];
        $html = view('spt/spt_pdf', $data);
        
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT,true, 'UTF-8', false);
        
        $pdf->AddPage();
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        $this->response->setContentType('application/pdf');
        $pdf->Output('example_001.pdf', 'S');

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
        $datapelaksana = $itemModel->pelaksanastatus($itemIds);
        
        $status = $datapelaksana[0]['pelaksana_utama'];
        // dd($status);

        // if (!empty($itemIds)) {
            if($status == '0'){
                $itemModel->where('pelaksana_id', $itemIds)->set(['pelaksana_utama' => 1])->update();
            } else {
                $itemModel->where('pelaksana_id', $itemIds)->set(['pelaksana_utama' => 0])->update();
            }
    }

    public function exportPDF()
    {
        

    }
}
