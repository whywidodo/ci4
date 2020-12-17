<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class UAnimation extends BaseController
{
    public function index()
    {
        $d = ['data' => 'UAnimation'];
        return view('admin/utilities-animation', $d);
    }

    //--------------------------------------------------------------------

}
