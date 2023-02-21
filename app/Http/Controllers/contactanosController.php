<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\contactanosMailable;
use \Illuminate\Support\Facades\Mail;
class contactanosController extends Controller
{
    public function index(){
        return view('contactanos.contactanos');
    }

    public function sendMessage(){
        $correo = new contactanosMailable;
        Mail::to('joseantoniorojas999@gmial.com')->send($correo);

        return "Mensaje enviado";
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        $correo = new contactanosMailable($request->all());
        Mail::to('joseantoniorojas999@gmial.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info','Mensaje Enviado');
    }
}
