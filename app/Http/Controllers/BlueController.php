<?php

namespace Anunciate\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\usuarios;
use Illuminate\Http\Request\NuevoUsuarioVal;

class BlueController extends Controller
{
    public function index(){   
    	return view("blue/login");
    }

   public function resetpas(){
    	return view("blue/reset");
    }

    public function sistema(){
//    	$usus = usuarios::all();
//    	return view("blue/contenido")->with(['usus'=> $usus]);
        return view("blue/contenido");
    }

    public function sistema2($id){
    	$usu = usuarios::find($id);

    	if(is_null($usu)){
    		abort(404);
    	}

    	return view("blue/contenidosis2")->with(['usu'=> $usu]);
    }
    
    public function store(Request $request) {
        \Anunciate\Users::create([
            'nombre' => $request['nombre'],
            'appat' => $request['appat'],
            'amat' => $request['amat'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);
        return "Usuario registrado";
    }
    public function dashboard(){   
    	return view("dashboard/content");
    }
}