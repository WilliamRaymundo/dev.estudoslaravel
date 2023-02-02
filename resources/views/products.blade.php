@extends('layouts.main')
@section('title','Produto')

@section('content')
<h1>Página produto</h1>

@if($busca != '')
<p>o usuarios está buscando por {{$busca}}</p>
@endif
@endfunction