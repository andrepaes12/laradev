<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDev</title>
</head>
<body>
    <p><a href="{{route('property.index')}}">Listar imóveis</a> | <a href="{{route('property.create')}}">Cadastrar novo imóvel</a></p>

    @yield('content')
</body>
</html>
