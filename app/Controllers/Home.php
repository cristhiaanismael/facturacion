<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }

        public function index2()
    {
        return view('welcome_message');
    }
 
}
