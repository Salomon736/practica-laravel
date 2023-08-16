<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\eventos;
use App\Models\Noticias;

class EventosController extends Controller
{
    //
    public function ObtenerNoticias(Request $request)
{
    
   
$noticias = eventos::find(1)->noticias;
return view('noticias2', ['noticias' => $noticias]);
}
    public function ObtenerEventos(Request $request)
    {
        //$eventos = Noticias::find(1)->eventos;
        $evento=eventos::get();
        return view('evento',['eventos'=>$evento]);
        //dd($eventos);
    }
    public function SubirDatos(Request $request)
    {
        $eventos = eventos::find(1);
   
        $noticias = new Noticias;
        $noticias->titulo = "Getafe-Barça: La defensa del título comienza en el Coliseum Alfonso Pérez";
        $noticias->contenido = "El FC Barcelona da comienzo a LaLiga EA Sports 2023-2024 con su su visita al Getafe en el Coliseum Alfonso Pérez. Los de Xavi Hernández, reforzados este verano, tienen la ilusión de revalidar el título que
        ganaron la temporada pasada y buscarán imponerse en un campo que es siempre complicado";
           
        $eventos = $eventos->noticias()->save($noticias);
    }
}
