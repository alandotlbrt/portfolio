<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['./resources/css/global.css'])
    @vite(['./resources/css/index.css'])
    @vite(['./resources/js/parallax.js'])
    @vite(['./resources/js/carousel.js'])
</head>
<body>
    <header>
    
        <!-- <img class="logo-header" src="{{ asset('img/macinc.png') }}"> -->
        <h1> < / > PORTFOLIO</h1>
        <div class="header-right">
            <a href="/">Home</a>
            <a href="/">About me</a>
            <a href="/">Projects</a>
            <a href="/">Social</a>
        </div>
         

    </header>
    <div id="scene">
        <h1 id="name" data-depth="0.1">Alan<span id="carousel"></span><span class="input-cursor"></span></h1> 
    </div>

</body>
</html>