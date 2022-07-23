@extends('property.master')

@section('content')

<h1>Formulário de Cadastro :: Imóveis</h1>

{{-- action = rota do controlador que fará o registro --}}
<form action="{{route('property.store')}}" method="post">
    @csrf
    <label for="title">Título do Imóvel</label>
    <input type="text" name="title" id="title"><br>

    <label for="description">Descrição do Imóvel</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea><br>

    <label for="rental_price">Valor de Locação:</label>
    <input type="number" name="rental_price" id="rental_price" decimal="2"><br>

    <label for="sale_price">Valor de Venda:</label>
    <input type="number" name="sale_price" id="sale_price" decimal="2"><br>

    <button type="submit">Cadastrar Imóvel</button>
</form>

@endsection
