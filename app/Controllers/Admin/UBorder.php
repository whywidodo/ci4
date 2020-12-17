<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class UBorder extends BaseController
{
    public function index()
    {
        $d = ['data' => 'UBorder'];
        return view('admin/utilities-border', $d);
    }

    //--------------------------------------------------------------------

}
