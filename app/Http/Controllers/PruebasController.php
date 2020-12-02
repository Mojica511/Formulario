<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function validar(Request $request){
        $user = $request->input('user');
        $pass = $request->input('pass');

        if($user === 'ArmandoMojica' && $pass === '12345'){
            $url = 'formulario.correcto';
        }else{
            $url = 'formulario.error';
        }

        return view($url, [
            
            ]);
    }

    public function login(){
        return view('formulario.formulario');
    }
}
