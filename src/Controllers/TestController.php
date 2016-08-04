<?php

namespace Hd\TEST\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{

    public function index()
    {
      return view('test::index');
    }
}
