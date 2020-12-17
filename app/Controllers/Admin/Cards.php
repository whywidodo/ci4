<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Cards extends BaseController
{
    public function index()
    {
        $d = ['data' => 'Cards'];
        return view('admin/cards', $d);
    }

    //--------------------------------------------------------------------

}
