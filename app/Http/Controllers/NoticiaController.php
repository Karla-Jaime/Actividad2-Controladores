<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;

class NoticiaController extends Controller
{
    public function lista(){

        $noticias = Noticias::all();

        $argumentos = array();
        $argumentos["noticias"] = $noticias;

        return view("noticias.lista", $argumentos);
    }

    public  function detalles($id){
        //Funcion find
        $noticias = Noticias::find($id);

        $argumentos = array();
        $argumentos["noticia"] = $noticias;
        return view('noticias.detalles' , $argumentos);
    }
}
