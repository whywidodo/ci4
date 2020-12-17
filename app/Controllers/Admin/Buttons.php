<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Buttons extends BaseController
{
    public function index()
    {
        $d = ['data' => 'Buttons'];
        return view('admin/buttons', $d);
    }

    //--------------------------------------------------------------------

}
