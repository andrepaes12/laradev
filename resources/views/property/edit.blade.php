@extends('property.master')

@section('content')

<div class="container my-3">
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
                <div class="form-group">
                    <label for="title">Título do Imóvel</label>
                    <input type="text" name="title" id="title" value="{{$property->title}}" class="form-control"><br>
                </div>
                <div class="form-group">
                    <label for="description">Descrição do Imóvel</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$property->description}}</textarea><br>
                </div>
                <div class="form-group">
                    <label for="rental_price">Valor de Locação:</label>
                    <input type="number" name="rental_price" id="rental_price" decimal="2" value="{{$property->rental_price}}" class="form-control"><br>
                </div>
                <div class="form-group">
                    <label for="sale_price">Valor de Venda:</label>
                    <input type="number" name="sale_price" id="sale_price" decimal="2" value="{{$property->sale_price}}" class="form-control"><br>
                </div>
                            {{-- @endforeach --}}
        {{-- @endif --}}

        <button type="submit" class="btn btn-success">Atualizar Imóvel</button>
    </form>

</div>

@endsection
