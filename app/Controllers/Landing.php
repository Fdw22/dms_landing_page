<?php

namespace App\Controllers;

use Config\Services;
use GuzzleHttp\Client;

class Landing extends BaseController
{
    public function Index()
    {

        // var_dump("TESTT var_dump");
        // die();
        // dd("TESSSSs");
        return view('../Views/home/Home.php');
    }
}
