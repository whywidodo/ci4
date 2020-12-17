<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Tables extends BaseController
{
    public function index()
    {
        $d = ['data' => 'Tables'];
        return view('admin/tables', $d);
    }

    //--------------------------------------------------------------------

}
