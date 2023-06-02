@extends('includes.base')

@section('title', 'Produtos')

@section('content')
    <table border="1" style="border-color: palevioletred">
        <tr>
            <th>Nome:</th>
            <th>Preço:</th>
            <th>Quantidade:</th>
            <th>Editar</th>
        </tr>

  @foreach ($prods as $prod)
        <tr>
            <td><a href="{{ route('produtos.view', $prod->id) }}">{{ $prod->name }}</a></td>
            <td>R${{ number_format($prod->price, 2, ',','.' )}}</td>
            <td>{{ $prod->quanlity }}</td>
            <td><a href="{{ route('produtos.edit', $prod->id)}}">Editar</a></td>
        </tr>
 @endforeach
    </table>

    <a href="{{ route('produtos.add') }}">Adicionar produtos</a>
@endsection

