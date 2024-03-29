<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceModel;
use Config\UserAgents;

class Services extends BaseController
{
    public function index()
    {
        //
    }

    public function service($serviceSlug)
    {
        $service = $this->serviceModel->asObject()->where('serviceSlug', $serviceSlug)->first();
        if (!empty($service)) {
            $page = "service_view";
            $agent = $this->request->getUserAgent();
            $data = [
                'service' => $service,
                'page' => $page,
                'nearServices' => $this->serviceModel->asObject()->where('serviceSlug !=', $serviceSlug)->findAll(10),
                'links' => headerData($page, localLang()),
                'lang' => localLang(),
                'isMobile' => $agent->isMobile(),
                'services' => $this->serviceModel->asObject()->find()
            ];

            return view('pages/' . localLang() . '/' . $page, $data);
        } else {
            return view('errors/404');
        }
    }
}
