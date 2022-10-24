<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorFormulario;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{

    public function showFormulario(){
        return view('formulario');

    }

    public function comprobarFormulario(validadorFormulario $req){
        return redirect()->route('formulario')->with('correcto','Todo bien');
    }
}
