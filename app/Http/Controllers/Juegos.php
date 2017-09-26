<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juego;

//Para definir el lugar de guardado de las imagenes
use Storage;

class Juegos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // carga todos los juegos
      $juegos = Juego::all();
      return view('admin.juegos')->with(['juegos' => $juegos] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crear = true;
        return view('admin.juegos',compact('crear'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //GUARDAR JUEGO

          $this->validate($request, [
            'titulo' => 'required|unique:juegos',
            'informacion' => 'required'
          ]);
          $juego = new Juego();
          //cargo los datos de juegos.
          $juegos = Juego::all();
          $juego->titulo = $request->titulo;
          $juego->info = $request->informacion;
  
  
          $imagen = $request->urlImg_values;
  
          //Verifica si el campo imagen no estaba vacio.
          if( !empty($imagen) ){
            //obtener el Base64:
            list($tipo, $base64_str) = explode(';', $imagen);
            list(,$extension) = explode('/',$tipo);
            list(,$base64)      = explode(',', $base64_str);
            //decodifica la cadena base-64:
            $decodificado = base64_decode($base64);
              // Si la extension es jpg el base-64 dice que es jpeg, hay que cambiarlo
            if($extension=='jpeg')$extension='jpg';
            $imagen_nombre="juego-".strtotime('now').".".$extension;
            // Se guarda el archivo en el disco creado en el filesystems.php:
            Storage::disk('juegosImg')->put($imagen_nombre, $decodificado );
  
            // Se guarda el nombre para subirlo a la Base de datos:
            $juego->urlImg = $imagen_nombre;
          }
            //Este guarda todo y verifica si se guardo correctamente
            if ($juego->save()) {
              // con esto se regresa a la pagina de carga o de donde se venia junto con un mensaje.
              // msj es una variable session en la vista
              return redirect('admin/juegos')->with('msj', '¡Juego Agregado!');

            } else {
              // return back()->with('emsj','Datos Guardados');
            }
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
        // dd('edit');
        $juego = Juego::find($id);
        return view('admin.juegos')->with(['edit' => true,'juego' => $juego ]);
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
        if (isset($request->urlImg_values)) {
                      Storage::disk('juegosImg')->delete( $request->current_img );
                      $juego = Juego::find($id);
                      $juego->titulo = $request->titulo;
                      $juego->info = $request->informacion;
                      $imagen = $request->urlImg_values;
            
                      //Verifica si el campo imagen no estaba vacio.
                      if( !empty($imagen) ){
                        list($tipo, $base64_str) = explode(';', $imagen);
                        list(,$extension) = explode('/',$tipo);
                        list(,$base64) = explode(',', $base64_str);
                        $decodificado = base64_decode($base64);
                        if($extension =='jpeg') $extension='jpg';
                        $imagen_nombre="juego-".strtotime('now').".".$extension;
                        Storage::disk('juegosImg')->put($imagen_nombre, $decodificado );
                        $juego->urlImg = $imagen_nombre;
                      }
                        if ($juego->save()) {
                          return redirect('admin/juegos')->with('msj', '¡Juego Editado!');
                        } else {
                        }
                  }else{
                      $juego = Juego::find($id);
                      $juego->titulo = $request->titulo;
                      $juego->info = $request->informacion;
                      $juego->urlImg = $request->current_img;
                      $juego->save();
                      return redirect()->route('juegos.index');
                  }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id)
    {
         if ( (isset($request->delete_juego)) && ($request->delete_juego=='delete_juego') ) {
            $juego = Juego::find($id);
            // printf($juego);
            $producto = Juego::findOrFail($id)->delete();
            Storage::disk('juegosImg')->delete( $juego->urlImg );
            return redirect()->route('juegos.index');
        } else {
            return redirect()->route('juegos.index');
        }
    }
}
