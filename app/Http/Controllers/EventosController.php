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
    public function getnoticias(){
        $noticias = Noticias::all()->take(10);
        return response()->json($noticias);
    }
    public function getPrimeros10Titulos(){
        $titulos = Noticias::take(10)->pluck('titulo');
        return response()->json($titulos);
    }
    public function insertarNoticiaPostman(Request $request){
        $datos = $request->all();
    
        $noticia = new Noticias();
        $noticia->eventos_id = $datos['eventos_id'];
        $noticia->titulo = $datos['titulo'];
        $noticia->contenido = $datos['contenido'];
        $noticia->save();
    
        return response()->json(['message' => 'Noticia insertada con éxito']);
    }
    public function buscarNoticiaPorTitulo($titulo){
    $noticia = Noticias::where('titulo', $titulo)->first();
    
    if ($noticia) {
        return response()->json($noticia);
    } else {
        return response()->json(['message' => 'Noticia no encontrada'], 404);
    }
    
}
public function contarNoticiasPrimerEvento(){
    $primerEvento = eventos::first(); 
    
    if ($primerEvento) {
        $cantidadNoticias = $primerEvento->noticias->count();
        return response()->json(['cantidad_noticias' => $cantidadNoticias]);
    } else {
        return response()->json(['message' => 'No hay eventos'], 404);
    }
}
public function verificarNoticiaPorIdEvento($eventoId) {
    $evento = eventos::find($eventoId);
    
    if ($evento) {
        $noticia = $evento->noticias->first();
        return response()->json($noticia);
    } else {
        return response()->json(['message' => 'Evento no encontrado'], 404);
    }
}




    
    
    
    
}
