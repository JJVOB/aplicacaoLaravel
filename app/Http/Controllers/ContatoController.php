<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SiteContato;
class ContatoController extends Controller
{
    public function SiteContato(Request $request){
      
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato ');
        $contato->mensagem = $request->input('mensagem');

        $contato->save();
        return view('site.contato');
    }
}
