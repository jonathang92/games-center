<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Info;
use App\Juego;

class Web extends Controller
{
    public function index()
    {
        $info = Info::find('1');
        $juegos = Juego::all();
        return view('pagina.index')->with(['info' => $info, 'juegos' => $juegos ]);
    }
    public function nosotros()
    {
        $info = Info::find('1');
        return view('pagina.nosotros')->with(['info' => $info]);
    }
    public function juegos()
    {
        $juegos = Juego::all();
        return view('pagina.juegos')->with(['juegos' => $juegos]);
    }
    public function contacto()
    {
        $info = Info::find('1');
        return view('pagina.contacto')->with(['info' => $info]);
    }
}
