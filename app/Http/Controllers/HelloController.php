<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($name = 'Everybody')
    {
		$data = ['name'=>$name];
		
        return view('hello.index', $data);
    }
}
