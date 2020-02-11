@extends('layout.principal')
@section('Titulo','NOVO CLIENTE EDITE')
@section('conteudo')


    <h3>Novo Cliente</h3>
<form action="{{route('clientes.update',$cliente['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{$cliente['nome']}}">
    <input type="submit" value="Salvar">

</form>
@endsection
