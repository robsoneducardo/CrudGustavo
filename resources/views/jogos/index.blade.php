@extends('layouts.app')

@section('content')
<h1>Lista de jogos
    <a href="{{ route('jogos-create') }}">
        <svg class="icon" viewBox="0 0 1000 1000">
            <g><path d="M500,928.8L500,928.8c236.8,0,428.8-192,428.8-428.8S736.8,71.3,500,71.3S71.3,263.2,71.3,500S263.2,928.8,500,928.8L500,928.8z M500,990L500,990C229.4,990,10,770.6,10,500S229.4,10,500,10s490,219.4,490,490S770.6,990,500,990L500,990z M239.7,500c0-25.4,20.4-45.9,46.2-45.9h428.2c25.5,0,46.2,20.4,46.2,45.9l0,0c0,25.4-20.4,45.9-46.2,45.9H285.9C260.4,545.9,239.7,525.5,239.7,500L239.7,500z M500,760.3c-25.4,0-45.9-20.4-45.9-46.2V285.9c0-25.5,20.4-46.2,45.9-46.2l0,0c25.4,0,45.9,20.4,45.9,46.2v428.2C545.9,739.6,525.5,760.3,500,760.3L500,760.3z"/></g>
        </svg>
    </a>
</h1>

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-10">
<table class="table my-table">
     <tr>
        <thead>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Ano de Criação</th>
            <th>Valor</th>
            <th colspan="2">Ações</th>
        </thead>
    </tr>

    @foreach ($jogos as $jogo)
        <tr>
            <td>{{$jogo->nome}}</td>
            <td>{{$jogo->categoria}}</td>
            <td>{{$jogo->ano_criacao}}</td>
            <td>R${{number_format($jogo->valor, 2, ',', '.')}}</td>
            <td> <a href="{{route('jogos-edit', ['id'=>$jogo->id])}}" >
                <svg class="icon" viewBox="0 0 44 44">
                    <g>
                        <path d="M11,33l8.54-1.46,23-23a5,5,0,1,0-7.07-7.07l-23,23ZM36.88,2.88a3,3,0,0,1,4.24,4.24L39.83,8.41,35.59,4.17ZM34.17,5.59l4.24,4.24L20,28.24V24H15.76ZM14.27,26H18v3.73l-4.5.77ZM43,15a1,1,0,0,0-1,1V38a4,4,0,0,1-4,4H6a4,4,0,0,1-4-4V6A4,4,0,0,1,6,2H28a1,1,0,0,0,0-2H6A6,6,0,0,0,0,6V38a6,6,0,0,0,6,6H38a6,6,0,0,0,6-6V16A1,1,0,0,0,43,15Z"/>
                    </g>
                </svg>
            </a></td>
            <td>
                <form action="{{route('jogos-destroy', ['id'=>$jogo->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link" onclick="return confirm('Deseja excluir {{$jogo->nome}}?')">
                        <svg class="icon" enable-background="new 0 0 40 40" viewBox="0 0 40 40" >
                            <g>
                                <path d="M28,40H11.8c-3.3,0-5.9-2.7-5.9-5.9V16c0-0.6,0.4-1,1-1s1,0.4,1,1v18.1c0,2.2,1.8,3.9,3.9,3.9H28c2.2,0,3.9-1.8,3.9-3.9V16   c0-0.6,0.4-1,1-1s1,0.4,1,1v18.1C33.9,37.3,31.2,40,28,40z"/></g><g><path d="M33.3,4.9h-7.6C25.2,2.1,22.8,0,19.9,0s-5.3,2.1-5.8,4.9H6.5c-2.3,0-4.1,1.8-4.1,4.1S4.2,13,6.5,13h26.9   c2.3,0,4.1-1.8,4.1-4.1S35.6,4.9,33.3,4.9z M19.9,2c1.8,0,3.3,1.2,3.7,2.9h-7.5C16.6,3.2,18.1,2,19.9,2z M33.3,11H6.5   c-1.1,0-2.1-0.9-2.1-2.1c0-1.1,0.9-2.1,2.1-2.1h26.9c1.1,0,2.1,0.9,2.1,2.1C35.4,10.1,34.5,11,33.3,11z"/></g><g><path d="M12.9,35.1c-0.6,0-1-0.4-1-1V17.4c0-0.6,0.4-1,1-1s1,0.4,1,1v16.7C13.9,34.6,13.4,35.1,12.9,35.1z"/></g><g><path d="M26.9,35.1c-0.6,0-1-0.4-1-1V17.4c0-0.6,0.4-1,1-1s1,0.4,1,1v16.7C27.9,34.6,27.4,35.1,26.9,35.1z"/></g><g><path d="M19.9,35.1c-0.6,0-1-0.4-1-1V17.4c0-0.6,0.4-1,1-1s1,0.4,1,1v16.7C20.9,34.6,20.4,35.1,19.9,35.1z"/>
                            </g>
                        </svg>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    <tfoot>
        <td colspan="6">Dados obtidos de localhost:8000</td>
    </tfoot>
</table>
</div>
<div class="col-lg-1"></div>
</div>

@endsection