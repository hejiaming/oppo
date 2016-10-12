<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends CommonController
{
   //加载后台首页
	public function index()
	{

		return view("admin.index");  //加载后台首页模板
	}

}
