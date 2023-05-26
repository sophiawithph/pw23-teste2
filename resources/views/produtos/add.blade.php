@extends('includes.base')

@section('title', 'Produtos - Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

    <form action="{{ route('produtos.addSave') }}" method="post">
        @csrf
    <input type="text" name="name" placeholder="nome do produto">
    <br>
    <input type="number" name="price" step="0.01" placeholder="Preço do produto">
    <br>
    <input type="number" name="quanlity" placeholder="quantidade">
    <hr>
    <button class="submit" value="gravar">Gravar</button>
    </form>
@endsection
