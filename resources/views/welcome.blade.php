<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
</head>

<body>
    <h1>HELLO WORLD LARAVEL</h1>
    <img src="/img/banner-exemplo.avif" alt="Banner">
    @if(10 > 15)
    <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if($nome == "Gilberto")
    <p>O nome é Gilberto</p>
    @elseif($nome == "Gil")
    <p>O nome é {{$nome}} e ele tem {{$idade}} anos e trabalha como {{$profissão}}</p>
    @else
    <p>O nome não é Gilberto</p>
    @endif

    @for($i = 0; $i < count($arr); $i++) <p>{{$arr[$i]}} - {{$i}}</p>
        @if($i == 2)
        <p>O índice é 2</p>
        @endif
        @endfor

        @foreach($nomes as $nome)
        <p>{{$loop->index}}</p>
        <p>{{$nome}}</p>
        @endforeach

        @php
        $name = "Gil";
        echo "Meu nome é " . $name;
        @endphp

        <!-- Comentário do HTML aparece no inspecionar -->
        {{-- Já o comentário do Blade não aparece --}}
</body>

</html>