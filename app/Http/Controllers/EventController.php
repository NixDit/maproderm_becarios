<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Las clases o archivos se importan en estas seccion
use App\Models\Events;

class EventController extends Controller
{
    public function index(){
        return view('pages.events.index');
    }

    public function create(){
        // return view('pages.events.create')->with( 'job', new Job );
        return view('pages.events.create');
    }

    public function guardarEvento(Request $request){ // Los datos que vienen del formulario se guardan automaticamente en la variable $request
        // dd($request->all()); //Con dd() debugueas o verificas los valores que llevas tus variables o funciones
        /**
         * El nombre de la clase que vas a usar debe ser el mismo
         * Debes importarla con use App\Models\Events;
         * Ya con el modelo importado, ya no deberia dar error
         * Cuando te de un error 50, significa error del servidor o del lado del backend, en este caso es error en tu PHP
         * Al mandar a llamar $request->all() estas mandandole al create la indicacion de guardar los datos que envias
         */
        $nuevoEvento= Events::create($request->all()); // Esta función de create() te guarda todos los datos que vienen del formulario
        // El create se guarda eln la variable $nuevoEvento, y el if() pregunta si nuevoEvento existe
        if (nuevoEvento){  // Aqui te va a dar error, porque estas pasando nuevoEvento y debe ser $nuevoEvento,vamor a probarlo asi
         return back;
        } else{
            dd('El evento no pudo ser guardado');
        };
        
       }

}
