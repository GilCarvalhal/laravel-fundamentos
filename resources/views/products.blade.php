@extends("layouts.main")

@section("title", "produtos")

@section("content")
<h1>Tela de produtos</h1>
@if($busca != "")
<p>O usuário está buscando por: {{$busca}}</p>
@endif
<a href="/">Voltar para o home</a>
@endsection