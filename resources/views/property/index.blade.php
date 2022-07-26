@extends('property.master')

@section('content')

<div class="container my-3">

    <h1>Listagem de Imóveis</h1>

    <table class="table table-striped table-hover">
        <thead class="bg-primary text-white">
            <tr>
                <td>Título do Imóvel</td>
                <td>Valor de Locação</td>
                <td>Valor de Venda</td>
                <td>Ações de Controle</td>
            </tr>
        </thead>

        @foreach ($properties as $property)
        <tr>
            <td>{{$property->title}}</td>
            <td>R$ <?= number_format($property->rental_price, 2, ",", ".")?></td>
            <td>R$ <?= number_format($property->sale_price, 2, ",", ".")?></td>
            <td><a href="{{url('/imoveis/show/'.$property->url)}}" class="btn btn-secondary">Ver Mais</a> | <a href="{{url('/imoveis/edit/'.$property->url)}}" class="btn btn-warning">Editar</a> | <a href="{{url('/imoveis/remove/'.$property->url)}}" class="btn btn-danger">Remover</a></td>
        </tr>
        @endforeach

    </table>

</div>

@endsection
