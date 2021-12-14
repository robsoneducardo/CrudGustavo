<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;

class JogosController extends Controller
{
    public function index()
    {
        // return "It's alive!";
        $jogos = Jogo::All();
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create(){
        return view('jogos.create');
    }

    public function store(Request $request){
        // dd($request);
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }

    public function edit($id){
        $jogo = Jogo::where('id', $id)->first();
        if(!empty($jogo))
            // dd($jogo);
            return view('jogos.edit', ['jogo'=>$jogo]);
        else
            return redirect()->route('jogos-index');
    }

    public function update(Request $request, $id){
        // dd($request);
        // dd($id);
        $data=[
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor,
        ];
        Jogo::where('id', $id)->update($data);
        return redirect()->route('jogos-index');
    }
}
