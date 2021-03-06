<?php

namespace Anunciate\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//Esta linea evita el uso constante de \Anunciate\Anuncio:: al llamar el modelo y metodo
use Anunciate\Anuncio;


class DashboardController extends Controller
{
    public function index(){
//        $anuncios = Anuncio::All();
//        $anuncios = DB::table('det_anuncios')->simplePaginate(10);
        $anuncios = \Anunciate\Anuncio::paginate(10);
        return view("dashboard/content",  compact('anuncios'));
    }
    
    public function create(){
        return view("dashboard/anuncio");
    }
    
    public function store(Request $request){
         \Anunciate\Anuncio::create([
            'Anuncio' => $request['anuncio'],
            'Descripcion' => $request['descripcion'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
            'precio' => $request['precio']
        ]);
         
         return redirect('/dashboard')->with('message','store');
    }
    
    public function edit($Id_anun) {
        $anun = Anuncio::find($Id_anun);
//        $anun = DB::table('det_anuncios')
//                ->where('Id_anun', '=', $id)
//                ->get();
//        $anun = DB::table('det_anuncios')->select('*')->where('Id_anun', '=', $id)->get();
        return view('dashboard.Editanun',['anun'=>$anun]);
    }
    
}
