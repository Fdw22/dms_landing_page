<?php

namespace App\Controllers;

use Config\Services;
use GuzzleHttp\Client;

class Home extends BaseController
{
    public function index()
    {

        // dd("test");
        return view('Views/home/Home');
    }
}
