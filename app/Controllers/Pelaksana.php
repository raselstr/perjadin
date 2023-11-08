<?php

namespace App\Controllers;

use TCPDF;
use Dompdf\Dompdf;
use Dompdf\Options;
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
        $dataspt = $spt->pelaksanaspt();
        $data = [
            'title'     => 'Surat Perintah Tugas',
            'subtitle'  => 'Home',
            'spt'       => $dataspt,

        ];
        return view('pelaksana/index', $data);
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

    public function sptpdf($id = null)
    {
        set_time_limit(300);
        // $spt = new SptModel();
        $pelaksana = new PelaksanaModel();

        $dataspt = $pelaksana->datapelaksana($id);
        $data = [
            'imageSrc'    => $this->imageToBase64(ROOTPATH . '/public/images/kop.png'),
            'title'     => 'Surat Perintah Tugas',
            'subtitle'  => 'Home',
            'spt'       => $dataspt,
        ];
        // dd($data);
        // return view('pelaksana/spt_pdf', $data);
        $html = view('pelaksana/spt_pdf', $data);
        
       
        $options = new Options();
        // $options->set('defaultFont', 'Courier'); //membuat huruf default
        // $options->set('pdfBeckend','CPDF');
        // $options->set('Chroot',realpath(''));
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portraid');
        $dompdf->render();
        $dompdf->stream('Dokumenku',array("Attachment"=>false));

    }
    // Kunci menampilkan image di DOMPdf
    private function imageToBase64($path) {
        $path = $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }
}
