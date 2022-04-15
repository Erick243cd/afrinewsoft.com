<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function views($page = 'home')
    {
        if (file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            
            return view('pages/' . $page);


        }else{
            return view('errors/404');
        }    
        
    }

    public function index()
    {
        return view('welcome_message');
    }
}
