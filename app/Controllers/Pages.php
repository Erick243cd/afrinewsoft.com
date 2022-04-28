<?php

namespace App\Controllers;
use Config\UserAgents;

class Pages extends BaseController
{
    public function views($page = 'home')
    {
        
        
    
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

        $acceptLang = ['fr', 'en'];

        $lang = in_array($lang, $acceptLang) ? $lang : 'fr';

        $agent = $this->request->getUserAgent();

        if (file_exists(APPPATH . 'views/pages/' . $lang . '/' . $page . '.php')) {
            //Head and footer Links
            $data = [
                'links' => headerData($page, $lang),
                'page' => $page,
                'isMobile' => $agent->isMobile(),
                'services' => ($page == 'home' || $page=='services') ? $this->serviceModel->asObject()->limit(4)->find() : ''
            ];

            return view('pages/' . $lang . '/' . $page, $data);
        } else {
            return view('errors/404');
        }
    }

    public function index()
    {
        return view('welcome_message');
    }
}
