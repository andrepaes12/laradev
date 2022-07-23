@extends('property.master')

@section('content')

<div class="container my-3">
    <h1>Detalhes do Imóvel</h1>

    @if (!empty($property))
        @foreach ($property as $prop)
            <p>Título: {{$prop->title}}</p>
            <p>Descrição: {{$prop->description}}</p>
            <p>Valor de Locação: R$ {{number_format($prop->rental_price, 2, ',', '.')}}</p>
            <p>Valor de Venda: R$ {{number_format($prop->sale_price, 2, ',', '.')}}</p>
        @endforeach
    @endif
</div>

@endsection
