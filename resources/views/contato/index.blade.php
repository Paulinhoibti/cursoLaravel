@extends('layout.site')

@section('titulo','Curso de Laravel')

@section('conteudo')
    <h3>Esta é o meu index caralho</h3>

    @foreach ($contatos as $contato)
            <p>{{$contato->nome}}</p>
            <p>{{$contato->telefone}}</p>
    @endforeach

@endsection