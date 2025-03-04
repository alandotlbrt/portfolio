<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'global')</title>
    @vite(['resources/css/global.css'])
    @vite(['resources/css/header.css'])
    @vite(['resources/js/carousel.js'])
    @vite(['resources/js/parallax.js'])
   
    @yield('scripts')
    @yield('css')
</head>
<body>
    <header>
        
        <div class="header-left">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 8L3 11.6923L7 16M17 8L21 11.6923L17 16M14 4L10 20" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <h1 id="name-header">Alan<span id="carousel"></span><span class="input-cursor"></span></h1> 
        </div>

        <div class="header-right">
            <a href="/">Home</a>
            <a href="/me">About me</a>
            <a href="/projects">Projects</a>
            <a href="/contact">Contact</a>
        </div>
        
        </div>
    </header> 

    <main>
        @yield('content')
    </main>

   
    
</body>
</html>