@extends('layouts.app')

@section('title', 'Contact')

@section('css')
    @vite(['resources/css/contact.css'])
@endsection

@section('scripts')
    @vite(['resources/js/app.js'])
@endsection

@section('content')
    <div class="container-contact">
        <div class="vertical contact">
            <a class="link-contact" href="https://www.linkedin.com/in/alandotlbrt/" target="_blank" rel="noreferrer"><span>↗</span> Linkedin</a>
            <a class="link-contact" href="https://github.com/alandotlbrt" target="_blank" rel="noreferrer"><span>↗</span> Github</a>
            <a class="link-contact" href="http://discordapp.com/users/272742732525469706" target="_blank" rel="noreferrer"><span>↗</span> Discord</a>
        </div>            
        <a class="link-contact email" href="mailto:alanlebrument@icloud.com" target="_blank" rel="noreferrer"> <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <rect x="3" y="5" width="18" height="14" rx="2" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></rect> </g></svg>alanlebrument@icloud.com</a>

      
    </div>


@endsection

