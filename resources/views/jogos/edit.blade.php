@extends('layouts.app')

@section('content')
<h1> Atualizando jogo </h1>

<form action="{{ route('jogos-update', ['id'=>$jogo->id]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
    <div class="row">
            <div class="col col-lg-2"></div>
            <div class="col col-lg-3">
                <label for="nome">Nome:</label>
            </div>
            <div class="col col-lg-3">
                <input type="text" name="nome" class="form-control" value={{$jogo->nome}}>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-2"></div>
            <div class="col col-lg-3">
                <label for="categoria">Categoria:</label>
            </div>
            <div class="col col-lg-3">
                <input type="text" name="categoria" class="form-control" value="{{$jogo->categoria}}">
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-2"></div>
            <div class="col col-lg-3">
                <label for="lancamento">Ano de Criação</label>
            </div>
            <div class="col col-lg-3">
                <input type="number" min="1960" max="2022" value="{{$jogo->ano_criacao}}" name="ano_criacao" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-2"></div>
            <div class="col col-lg-3">
                <label for="valor">Valor:</label>
            </div>
            <div class="col col-lg-3">
                <input type="number" name="valor" class="form-control" value="{{$jogo->valor}}">
            </div>
        </div>
        <div class="row">
        <!-- <div class="col col-lg-3"></div> -->
        <div class="col col-lg-12 text-center">
            <!-- <a href="#" class="btn btn-primary"> Adicionar </a> -->
            <input type="submit" name="submit" class="btn btn-primary" value="Atualizar">
        </div>
        <!-- <div class="col col-lg-3"></div> -->
        </div>
    </div>
</form>
@endsection