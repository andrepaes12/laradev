<h1>Listagem de Imóveis</h1>

<p><a href="{{route('property.create')}}">Cadastrar novo imóvel</a></p>

<table>
    <tr>
        <td>Título do Imóvel</td>
        <td>Valor de Locação</td>
        <td>Valor de Venda</td>
        <td>Ações de Controle</td>
    </tr>

    @foreach ($properties as $property)
    <tr>
        <td>{{$property->title}}</td>
        <td>R$ <?= number_format($property->rental_price, 2, ",", ".")?></td>
        <td>R$ <?= number_format($property->sale_price, 2, ",", ".")?></td>
        <td><a href="{{url('/imoveis/show/'.$property->url)}}">Ver Mais</a> | <a href="{{url('/imoveis/edit/'.$property->url)}}">Editar</a> | <a href="{{url('/imoveis/remove/'.$property->url)}}">Remover</a></td>
    </tr>
    @endforeach

</table>
