
@extends('layouts.main')
@section('title','HDC Events')

@section('content')
    

       <h1>algum</h1>
        <img src="/img/Pessoas.jpg" alt="Banner"> 
        @if (10 > 5)
            <p>test</p>
        @endif

        <p>{{ $nome }}</p>
        
        @if ($nome == "Pedro")
            <p>O nome é Pedro</p>
        @else
            <p>O nome é {{$nome}}</p>
        @endif

        @for ($i = 0; $i < count($arr)                                                                                   ; $i++)
        <p>{{ $arr[$i] }}</p>
        
        @endfor

        @php
            $name = "NATAN";
            echo $name;
        @endphp

        @foreach ($arrNames as $names)
           <p>{{ $names }}</p> 
        @endforeach
@endsection


