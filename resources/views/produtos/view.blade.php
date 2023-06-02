
@extends('includes.base')

@section('title', 'Produtos - Ver')

@section('content')
    <h2>{{ $prod->name }}</h2>
    <p>{{ $prod->price }}</p>
    <p>{{ $prod->quanlity }}</p>
    <p>
        <a href="{{ route('produtos')}}">Voltar</a>
    </p>
@endsection
