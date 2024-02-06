<?php

namespace App\Filters;

use App\Models\RolemenusModel;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        
        $model = new RolemenusModel();
        $url    = $request->uri->getSegment(1);
        // $url2   = $request->uri->getSegment(2);
        // if(!empty($url2)){
        //     $permintaan = $url.'/'.$url2;
        // } else {
            $permintaan = $url;
        // }
        $menurole = $model->datarolefilter(session('role_id'), $permintaan);
        // dd($menurole);
        if ($menurole === null) {
            return redirect()->to(site_url('error'));

        } else {
            return $request;
        }
        
    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}
