<?php

namespace App\Http\Controllers;
use App\Models\Curso; 

abstract class Controller
{
     public function index(){
        $linhas = Curso::all();
        return view ("admin.cursos.index", compact('linhas'));
        
    }
}
