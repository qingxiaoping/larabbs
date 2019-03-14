<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PagesController extends Controller
{
	public function root()
	{
		return view('pages.root');
	}
}
