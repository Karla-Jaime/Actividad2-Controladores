<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function lista(){

        $noticias = array();
        $noticias[] = array(
            
            "id" => 1,
            "titulo" => "Descubren cura del cancer", 
            "fecha" => "10/01/2021");
            
        $noticias[] = array(
            
            "id" => 2,
            "titulo" => "Vuelven a clases presenciales", 
            "fecha" => "11/01/2021"); 

        $argumentos = array();
        $argumentos["noticias"] = $noticias;

        return view("noticias.lista", $argumentos);
    }

    public  function detalles($noticia){
        //Simulación de solicitud de detalles de noticias
        $detalles_noticia = array();
        
        $detalles_noticia["titulo"] = "Noticia #" . $noticia;
        $detalles_noticia["autor"] = "Autor de la noticia #" . $noticia;
        $detalles_noticia["fecha"] = "24/02/21" . $noticia;
        $detalles_noticia["cuerpo"] = "Este es el texto de la noticia #" . $noticia;
        $detalles_noticia["foto"] = "https://www.caras.com.mx/wp-content/uploads/2018/05/El-secreto-mejor-guardado-de-La-noche-estrellada-de-Van-Gogh-770x417.jpg";

        $argumentos["noticia"] = $detalles_noticia;

        $argumentos = array();
        $argumentos["noticia"] = $detalles_noticia;
        return view('noticias.detalles' , $argumentos);
    }
}
