<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Dotenv\Validator;
use Nette\Utils\Html;
class formcontroller extends Controller
{
    public function form(){
        $usuarios = Usuario::all();
       /* $usuariosnuevo = Usuario::table('usuarios')
                     ->select('usuarios.*')
                     ->orderBy('id','DESC')
                     ->get();*/
        return \view('templates.Forms.form')->with('usuario',$usuarios);
    }
    public function formulario(){
        return \view('templates.Forms.form');
    }
    public function registrado(){
        return \view('templates.Forms.register');
    }
    public function indexprincipal(){
        return \view('pages.projects.index');
    }

    public function tablaprincipal(){ // Te manda el error porque no estas pasandole la variable en el controlador correcto
        $usuarios = Usuario::all();
        return \view('templates.tables.usertable')->with('usuarios',$usuarios);

}
    public function guardarUsuario(Request $_request){
        /*dd($_request->all());
        $_request->validate([
            'name'=>'required',
            'apellidos'=>'required',
            'email'=>'required',
            'fecha_nacimiento'=>'required',
            'whatssap'=>'required',
            'facebook'=>'required',
            'instagram'=>'required',
            'ciudad'=>'required',
            'profesion'=>'required',
            'comercializa'=>'required',
            'info_requiere'=>'required',
            'event_id'=>'required',



        ]);
        Usuario::create([]);*/
        //dd($_request->all());
        $usuariosnuevo = Usuario::create($_request->all());
        if ($usuariosnuevo){
            return back();
        }
        else {
        dd('no se guardo');
        };

        /*Usuario::all();*/



    }
}
