<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Correos extends Controller
{
    public function contacto(Request $request){

        
        $correo_from ='correo que se colocó en el .env';// Aqui va el correo del servidor, en este caso el correo GMAIL que se utiliza para enviar los correos (OPCIONAL).

        
        $correo_personal ='correo que funcionaria como un correo del personal';// en este se coloca el correo del personal para avisar que se ha recibido un correo de contacto.
        
        $data = array(
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'asunto' => $request->asunto,
            'mensaje' => $request->mensaje,
            'correo_from' => $correo_from
        );
        print_r($data);
        Mail::send('correos.contacto_cliente', $data, function ($message) use ($data) {
                    
                    $message->from($data['correo_from'], 'Games Center'); //OPCIONAL
            
                    $message->to($data['correo']);

                    $message->subject('🎮 Games Center - Gracias por contactarnos 😄!');
            
                });

        Mail::send('correos.contacto_personal', $data, function ($message) use ($data) {
                    
                    $message->from($data['correo_from'], 'Personal Games Center'); //OPCIONAL
            
                    $message->to($correo_personal);

                    $message->subject('📡 Contacto Game Center: '.$data['nombre'].' ('.$data['asunto'].')');
            
                });

        return redirect('/contacto')->with('msj', '¡Correo Enviado!');

    }
}
