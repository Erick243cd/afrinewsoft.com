<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function views($page = 'home')
    {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        
        $acceptLang = ['fr', 'en']; 

        $lang = in_array($lang, $acceptLang) ? $lang : 'fr';

        if (file_exists(APPPATH . 'views/pages/'.$lang.'/' . $page . '.php')) {
            //Head and footer Links
            $data = ['links' => headerData($page, $lang)]; 

            return view('pages/'.$lang.'/' . $page, $data);

        } else {
            return view('errors/404');
        }
    }

    public function index()
    {
        return view('welcome_message');
    }
}
