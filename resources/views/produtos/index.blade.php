@extends('includes.base')

@section('title', 'Produtos')

@section('content')
    <p>Produtos funcionando</p>
    <a href="{{ route('produtos.add') }}">Adicionar produtos</a>
@endsection

