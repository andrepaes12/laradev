@extends('property.master')

@section('content')

<h1>Formulário de Edição :: Imóveis</h1>

<?php
    $property = $property[0];
?>

{{-- action = rota do controlador que fará o registro --}}
<form action="{{url('/imoveis/update', ['id' => $property->id])}}" method="post">
    @csrf
    @method('PUT')
    {{-- @if (!empty($property)) --}}
        {{-- @foreach ($property as $prop) --}}
            <label for="title">Título do Imóvel</label>
            <input type="text" name="title" id="title" value="{{$property->title}}"><br>

            <label for="description">Descrição do Imóvel</label>
            <textarea name="description" id="description" cols="30" rows="10">{{$property->description}}</textarea><br>

            <label for="rental_price">Valor de Locação:</label>
            <input type="number" name="rental_price" id="rental_price" decimal="2" value="{{$property->rental_price}}"><br>

            <label for="sale_price">Valor de Venda:</label>
            <input type="number" name="sale_price" id="sale_price" decimal="2" value="{{$property->sale_price}}"><br>
        {{-- @endforeach --}}
    {{-- @endif --}}

    <button type="submit">Atualizar Imóvel</button>
</form>

@endsection
