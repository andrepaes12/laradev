@extends('property.master')

@section('content')
<div class="container my-3">
    <h1>Formulário de Cadastro :: Imóveis</h1>

    {{-- action = rota do controlador que fará o registro --}}
    <form action="{{route('property.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Título do Imóvel</label>
            <input type="text" name="title" id="title" class="form-control"><br>
        </div>

        <div class="form-group">
            <label for="description">Descrição do Imóvel</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea><br>
        </div>

        <div class="form-group">
            <label for="rental_price">Valor de Locação:</label>
            <input type="number" name="rental_price" id="rental_price" decimal="2" class="form-control"><br>
        </div>

        <div class="form-group">
            <label for="sale_price">Valor de Venda:</label>
            <input type="number" name="sale_price" id="sale_price" decimal="2" class="form-control"><br>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Imóvel</button>

    </form>

</div>

@endsection
