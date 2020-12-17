<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ForgotPassword extends BaseController
{
    public function index()
    {
        return view('admin/forgot-password');
    }

    //--------------------------------------------------------------------

}
