@extends('layouts.app')

@section('content')
<h1> Novo jogo </h1>

<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4">
    <form action="{{ route('jogos-store') }}" method="post">
        @csrf
        <table class="table">
            <thead></thead>
            <tbody>
                <tr>
                    <td>
                        <label for="nome">Nome:</label>
                    </td>
                    <td>
                        <input type="text" name="nome" class="form-control" placeholder="Nome do jogo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="categoria">Categoria:</label>
                    </td>
                    <td>
                    <input type="text" name="categoria" class="form-control" placeholder="Categoria do jogo">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="lancamento">Ano de Criação</label>
                    </td>
                    <td>
                    <input type="number" min="1960" max="2022" value="2000" name="ano_criacao" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="valor">Valor:</label>
                    </td>
                    <td>
                    <input type="number" name="valor" class="form-control" placeholder="valor">
                    </td>
                </tr>
                </tbody>
                <tbody>
                <tr>
                    <td colspan="2" class="bottom_cel">
                        <!-- <input type="submit" name="submit" class="btn btn-link" value="Adicionar"> -->
                        <button type="submit" name="submit" class="btn btn-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-check" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                            </svg>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div class="col-lg-4"></div>

@endsection