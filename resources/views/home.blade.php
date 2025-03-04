@extends('layouts.app')

@section('title', 'Home')

@section('css')
    @vite(['resources/css/home.css'])
@endsection


@section('content')
   
    <div id="galaxie">
        <img data-depth="0.5" class="planet lune" src="{{ asset('img/lune.png') }}"> 
        <img data-depth="1.5" class="planet mars" src="{{ asset('img/planete_mars.png') }}"> 
        <img data-depth="3.5" class="planet mars" src="{{ asset('img/planete_rouge.png') }}"> 
        <img data-depth="3.5" class="planet saturne" src="{{ asset('img/planete_saturne.png') }}"> 
        <img data-depth="2.5" class="planet venus" src="{{ asset('img/planete_venus.png') }}"> 
        <img data-depth="1.5" class="planet terre" src="{{ asset('img/planete_terre.png') }}"> 
    </div>
    
@endsection