@extends('layout.principal')
@section('Titulo','CLIENTE DETALHES')
@section('conteudo')

    <h2>Informações de cliente</h2>
<p>ID: {{$cliente['id']}}</p>
<p>NOME: {{$cliente['nome']}}</p><br>

<a href="{{route('clientes.index')}}">VOLTAR</a>
@endsection
