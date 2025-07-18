<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PagesController extends BaseController
{
    public function skills()
    {
        //
        return view('profile');
    }
}
