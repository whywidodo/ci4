<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        //$d = ['data' => 'Buttons'];
        return view('admin/login');
    }

    //--------------------------------------------------------------------

}
