<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectosController extends Controller
{ 
	public function __construct()
    {

    }

    public function index()
    {
    	return view('proyectos.index');
    }
}
