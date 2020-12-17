<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class UOther extends BaseController
{
    public function index()
    {
        $d = ['data' => 'UOther'];
        return view('admin/utilities-other', $d);
    }

    //--------------------------------------------------------------------

}
