<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Charts extends BaseController
{
    public function index()
    {
        $d = ['data' => 'Charts'];
        return view('admin/charts', $d);
    }


    //--------------------------------------------------------------------

}
