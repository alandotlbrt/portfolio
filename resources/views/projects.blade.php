@extends('layouts.app')

@section('title', 'Home')

@section('css')
    @vite(['./resources/css/projects.css'])
@endsection

@section('scripts')
    @vite(['./resources/js/app.js'])
@endsection

@section('content')
    <div id="app"></div>
@endsection

