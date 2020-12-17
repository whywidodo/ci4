<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class UColor extends BaseController
{
    public function index()
    {
        $d = ['data' => 'UColor'];
        return view('admin/utilities-color', $d);
    }

    //--------------------------------------------------------------------

}
