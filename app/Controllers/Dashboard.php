<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Test\CIDatabaseTestCase;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            "title" => 'Dashboard',
        ];
        return view('v_Index', $data);
    }
}
