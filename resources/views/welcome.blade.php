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
    @vite(['./resources/js/app.js'])
</head>
<body>
    <header>
    
        <!-- <img class="logo-header" src="{{ asset('img/macinc.png') }}"> -->
        <div class="header-left">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 8L3 11.6923L7 16M17 8L21 11.6923L17 16M14 4L10 20" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <h1 id="name" >Alan<span id="carousel"></span><span class="input-cursor"></span></h1> 
        </div>
        
        <div class="header-right">
            <a href="#home">Home</a>
            <a href="#about">About me</a>
            <a href="#projects">Projects</a>
            <a href="#social">Social</a>
        </div>
        </div>
         
    </header>   

    <div id="galaxie">
        <img data-depth="0.5" class="planet lune" src="{{ asset('img/lune.png') }}"> 
        <img data-depth="1.5" class="planet mars" src="{{ asset('img/planete_mars.png') }}"> 
        <img data-depth="4.5" class="planet mars" src="{{ asset('img/planete_rouge.png') }}"> 
        <img data-depth="3.5" class="planet saturne" src="{{ asset('img/planete_saturne.png') }}"> 
        <img data-depth="2.5" class="planet venus" src="{{ asset('img/planete_venus.png') }}"> 
        <img data-depth="1.5" class="planet terre" src="{{ asset('img/planete_terre.png') }}"> 
        
    </div>
  

  <!--   <section id="about" class="section-about">
        <h2>About Me</h2>
        <p>This is the about section.</p>
    </section>

    <section id="projects" class="section-projects">
        <h2>Projects</h2>
        <p>Here are my projects.</p>
    </section>

    <section id="social" class="section-social">
        <h2>Social</h2>
        <p>Find me on social media.</p>
    </section>

    <footer>
        <p>Author: Hege Refsnes</p>
        <p><a href="mailto:hege@example.com">hege@example.com</a></p>
    </footer>
     -->

</body>
</html>