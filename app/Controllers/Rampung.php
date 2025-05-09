<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\VerifModel;
use App\Models\RampungModel;
use App\Models\LaporjadinModel;
use App\Models\PelaksanaModel;
use CodeIgniter\RESTful\ResourcePresenter;

class Rampung extends ResourcePresenter
{
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $thn = session('tahun');
        $model = new RampungModel();
        $query = $model->rampungdataspt($thn);
        $data = [
            'title' => 'Biaya Rampung',
            'subtitle' => 'Home',
            'data' => $query,
        ];
        // dd($data);
        return view('rampung/index', $data);
    }

    public function form($id=null)
    {
        $model = new RampungModel();
        $qrall = $model->rampungall($id);
        $qrutama = $model->rampungutama($id);
        // $harian = $model->rampungperpelaksana(1,6);

        $data = [
            'title' => 'Pembayaran Rampung Perjalanan Dinas',
            'subtitle' => 'Home',
            'data' => $qrutama,
            'all' => $qrall,
            // 'harian' => $harian,
        ];
        // dd($data);
        return view('rampung/pembayaran', $data);
    }

    public function formcetak($id=null)
    {
        $model = new RampungModel();
        $modelterbilang = new PelaksanaModel();
        $qrall = $model->rampungall($id);
        $qrutama = $model->rampungutama($id);
         
        // $harian = $model->rampungperpelaksana(1,6);

        $data = [
            'title' => 'Pembayaran Rampung Perjalanan Dinas',
            'subtitle' => 'Home',
            'data' => $qrutama,
            'all' => $qrall,
            // 'harian' => $harian,
        ];
        // dd($data);
        return view('rampung/pembayaranprint', $data);
        // $html = view('rampung/invoice-print', $data);
        
       
        // $options = new Options();
        // $options->set('isRemoteEnabled', true);

        // $dompdf = new Dompdf($options);
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'portraid');
        // $dompdf->render();
        // $dompdf->stream('Rampung',array("Attachment"=>false));
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
        $query = $model->verifdatapelaksana($id);
        $qrhotel = $model ->verifhotel($id);
        $qrpesawat = $model->verifpesawat($id);
        $qrtaksi = $model->veriftaksi($id);

        $data = [
            'title' => 'Data Laporan Perjalanan Dinas',
            'subtitle' => 'Home',
            'data'  => $query,
            'hotel' => $qrhotel,
            'pesawat' => $qrpesawat,
            'taksi' => $qrtaksi,
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
        $model = new LaporjadinModel();
        $post = $this->request->getPost();
        $save = $model->save($post);
            // dd($model->errors());
            if ($save) {
                return redirect()->to(site_url('laporjadin'))->with('info', 'Data Berhasil di Simpan');
            } else {
                return redirect()->back()->withInput()->with('validation', $model->errors());
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


    
}
