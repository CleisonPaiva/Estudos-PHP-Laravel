@extends('layout.principal')
@section('Titulo','OPCOES')

@section('conteudo')
    <div class="options">
        <ul>
         <li><a class="warning selected" href="{{route('opcoes',1)}}">WARNING</a></li>
         <li><a class="info selected"    href="{{route('opcoes',2)}}">INFO</a></li>
         <li><a class="success selected" href="{{route('opcoes',3)}}">SUCCESS</a></li>
         <li><a class="error selected"   href="{{route('opcoes',4)}}">ERROR</a></li>

        </ul>
    </div>
    @if(isset($opcao))
        @switch($opcao)
            @case(1)
            @alerta(['titulo'=>'ERRO FATAL','tipo'=>'warning'])
            <p><strong>WARNING</strong></p>
            <p>OCORREU UM ERRO INESPERADO</p>
            @endalerta
            @break
            @case(2)
            @alerta(['titulo'=>'ERRO FATAL','tipo'=>'info'])
            <p><strong>INFO</strong></p>
            <p>OCORREU UM ERRO INESPERADO</p>
            @endalerta
            @break
            @case(3)
            @alerta(['titulo'=>'ERRO FATAL','tipo'=>'success'])
            <p><strong>SUCCESS</strong></p>
            <p>OCORREU UM ERRO INESPERADO</p>
            @endalerta
            @break
            @case(4)
            @alerta(['titulo'=>'ERRO FATAL','tipo'=>'error'])
            <p><strong>ERROR</strong></p>
            <p>OCORREU UM ERRO INESPERADO</p>
            @endalerta
            @break

        @endswitch
    @endif
@endsection



