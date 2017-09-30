<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
    	return view('cursos.index');
    }
}
