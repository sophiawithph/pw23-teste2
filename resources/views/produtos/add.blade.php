@extends('includes.base')

@section('title', 'Produtos - Adicionar')

@section('content')

    <h2>Adicione seu produto</h2>
  @if ($errors)
      @foreach ( $errors->all() as $err )
          {{ $err }} <br>
      @endforeach
  @endif
<div>
    <form action="{{ route('produtos.addSave') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome do produto" value="{{ old ('name') }}">
        <br>
        <input type="number" name="price" step="0.01" placeholder="Preço do produto" value="{{ old ('price') }}">
        <br>
        <input type="number" name="quanlity" placeholder="Quantidade" value="{{ old ('quanlity') }}">
        <hr>
        <button class="submit" value="gravar" style="width: 177px; ">Gravar</button>
    </form>
</div>
@endsection
