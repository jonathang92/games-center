<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Juego;

class Infos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nosotrosIndex()
    {
      $info = Info::find('1');
      return view('admin.nosotros')->with('info', $info );
    }
    public function principalIndex()
    {
      $info = Info::find('1');
      return view('admin.pagina-principal')->with('info', $info );
    }
    public function contactoIndex()
    {
      $info = Info::find('1');
      return view('admin.contacto')->with('info', $info );
    }
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $info = Info::find('1');
        if ( (isset($request->info)) && ($request->info=='nosotros') ) {
            $info->info_nosotros = $request->info_nosotros;
      
            if ($info->save()) {
              return redirect('admin/nosotros')->with('msj', '¡Informacion de nosotros actualizada!');;
            } else {
              return redirect('admin/nosotros')->with('emsj', '¡Error en el guardado!');;
            }
        }
        if ( (isset($request->info)) && ($request->info=='pagina-principal') ) {
            $info->titulo_principal = $request->titulo_principal;
            $info->info_principal = $request->info_principal;
      
            if ($info->save()) {
              return redirect('admin/pagina-principal')->with('msj', '¡Informacion actualizada!');;
            } else {
              return redirect('admin/pagina-principal')->with('emsj', '¡Error en el guardado!');;
            }
        }
        if ( (isset($request->info)) && ($request->info=='contacto') ) {
            $info->direccion = $request->direccion;
      
            if ($info->save()) {
              return redirect('admin/contacto')->with('msj', '¡Informacion actualizada!');;
            } else {
              return redirect('admin/contacto')->with('emsj', '¡Error en el guardado!');;
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
