<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['./resources/css/global.css'])
    @vite(['./resources/css/index.css'])
    @vite(['./resources/js/parallax.js'])
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
    <div class="my-name" id="scene">
        <h1 data-depth="0.15">LEBRUMENT</h1>
        <h1 data-depth="0.1">ALAN</h1>
    </div>
</body>
</html>