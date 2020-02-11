@extends('layout.principal')
@section('Titulo','CLIENTES')
@section('conteudo')

<h3>Clientes:</h3>
<a href="{{route('clientes.create')}}">Novo Cliente</a>
@if(count($clientes)>0)
<ol>

    @foreach($clientes as $c)
    <ul>
        {{  $c['nome']}}
        <a href="{{route('clientes.edit',$c['id'])}}">Editar</a>
        <a href="{{route('clientes.show',$c['id'])}}">Info</a>
        <form action="{{route('clientes.destroy',$c['id'])}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">

        </form>
    </ul>
    @endforeach
</ol>


@else
    <h3>Não existem usuarios cadastrados</h3>
@endif
@endsection
