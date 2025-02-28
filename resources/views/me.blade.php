@extends('layouts.app')

@section('title', 'Me')

@section('css')
    @vite(['./resources/css/me.css'])
@endsection

@section('content')
    <div class="first-title">
        <h1>Young Developper</h1>
        <p> -> Backend & Frontend</p>
        <div class="studyat">
            I study at:
        </div>
    </div>
    
@endsection