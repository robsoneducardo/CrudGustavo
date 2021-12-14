@extends('layouts.app')

@section('content')
<h1> Criando novo jogo </h1>

<form action="{{ route('jogos-store') }}" method="post">
    @csrf
    <div class="form-group">
    <div class="row">
            <div class="col col-lg-2"></div>
            <div class="col col-lg-3">
                <label for="nome">Nome:</label>
            </div>
            <div class="col col-lg-3">
                <input type="text" name="nome" class="form-control" placeholder="Nome do jogo">
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-2"></div>
            <div class="col col-lg-3">
                <label for="categoria">Categoria:</label>
            </div>
            <div class="col col-lg-3">
                <input type="text" name="categoria" class="form-control" placeholder="Categoria do jogo">
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-2"></div>
            <div class="col col-lg-3">
                <label for="lancamento">Ano de Criação</label>
            </div>
            <div class="col col-lg-3">
                <input type="number" min="1960" max="2022" value="2000" name="ano_criacao" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-2"></div>
            <div class="col col-lg-3">
                <label for="valor">Lançamento:</label>
            </div>
            <div class="col col-lg-3">
                <input type="number" name="valor" class="form-control" placeholder="valor">
            </div>
        </div>
        <div class="row">
        <!-- <div class="col col-lg-3"></div> -->
        <div class="col col-lg-12 text-center">
            <!-- <a href="#" class="btn btn-primary"> Adicionar </a> -->
            <input type="submit" name="submit" class="btn btn-primary" value="Adicionar">
        </div>
        <!-- <div class="col col-lg-3"></div> -->
        </div>
    </div>
</form>
@endsection