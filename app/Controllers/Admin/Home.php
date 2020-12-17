<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		$d = ['data' => ''];
		return view('admin/index', $d);
	}

	//--------------------------------------------------------------------

}
