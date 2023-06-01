@extends('includes.base')

@section('title', 'Produtos - Adicionar')

@section('content')

    <h2>Adicione seu produto</h2>
<div style="background:rgb(0, 0, 0, 0.8); padding: 15px; width: 190px; border-radius: 10%;">
    <form action="{{ route('produtos.addSave') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome do produto">
        <br>
        <input type="number" name="price" step="0.01" placeholder="Preço do produto">
        <br>
        <input type="number" name="quanlity" placeholder="Quantidade">
        <hr>
        <button class="submit" value="gravar" style="width: 177px; ">Gravar</button>
    </form>
</div>
@endsection
