@extends('layouts.app')

@section('title', 'Home')

@section('css')
    @vite(['./resources/css/projects.css'])
@endsection

@section('content')
    <div id="projects-page">
        <div class="project-div">
            <div class="horizontal" style="gap:10px">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 200 200" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"><path fill="rgba(51, 99, 162, 1)" d="M165.963 134.037c-5.467 5.467-14.332 5.467-19.799 0l-24.137-24.138c-5.468-5.467-5.468-14.331 0-19.799l24.137-24.137c5.467-5.467 14.332-5.467 19.799 0L190.101 90.1c5.467 5.468 5.467 14.332 0 19.799l-24.138 24.138Zm-112.127 0c-5.467 5.467-14.332 5.467-19.8 0L9.9 109.899c-5.468-5.467-5.468-14.331 0-19.799l24.137-24.137c5.467-5.467 14.332-5.467 19.799 0L77.973 90.1c5.468 5.468 5.468 14.332 0 19.799l-24.137 24.138ZM109.9 190.1c-5.468 5.468-14.332 5.468-19.8 0l-24.137-24.137c-5.467-5.467-5.467-14.332 0-19.799l24.138-24.137c5.467-5.468 14.331-5.468 19.799 0l24.137 24.137c5.467 5.467 5.467 14.332 0 19.799L109.9 190.1Zm0-112.127c-5.468 5.468-14.332 5.468-19.8 0L65.963 53.836c-5.467-5.468-5.467-14.332 0-19.8L90.101 9.9c5.467-5.467 14.331-5.467 19.799 0l24.137 24.138c5.467 5.467 5.467 14.331 0 19.799L109.9 77.973Z"></path></svg>
                <h1 class="title-projects">SOCIAL NETWORK</h1>
                <a href="https://github.com/alandotlbrt/social-network" class="clicable github">
                    <img src="{{ asset('img/git.png') }} "alt="Github">
                </a>
            </div>
            <p class="text">
                It's a school project where my team and I created a social network from scratch. 
                Inspired by Pinterest, we added the ability to include text. We developed it using 
                <a href="https://vuejs.org" class="clicable">
                    <img src="{{ asset('img/vue.png') }}" alt="Vue.js"> Vue.js
                </a> 
                and 
                <a href="https://go.dev" class="clicable">
                    <img src="{{ asset('img/go.png') }}" alt="Golang"> Golang
                </a>.
            </p>
            <iframe class="video-projects"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        </div>
        <div class="project-div">
            <div class="horizontal" style="gap:10px">
            <svg xmlns="http://www.w3.org/2000/svg" id="SvgjsSvg1083" x="0" y="0" version="1.1" viewBox="0 0 512 512" width="40" height="40" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"><path d="M369.214 159.814c-91.389-55.601-48.533-134.078-46.693-137.34A14.999 14.999 0 0 0 309.515 0c-47.043 0-83.881 13.366-109.49 39.729-43.759 45.044-41.729 115.151-40.862 145.088.097 3.317.179 6.182.179 8.311 0 22.228 3.566 42.748 6.713 60.854 2.028 11.668 3.779 21.744 4.091 29.664.333 8.482-1.216 10.424-1.281 10.503-.221.263-2.062 1.241-7.036 1.241-5.674 0-9.856-1.854-13.563-6.009-14.476-16.233-15.477-60.554-12.709-84.667a14.999 14.999 0 0 0-14.898-16.732c-38.945 0-68.047 63.688-68.047 120.632 0 26.769 5.385 52.991 16.004 77.94 10.266 24.119 24.904 45.885 43.512 64.696C150.877 490.425 201.97 512 255.993 512c54.242 0 105.321-21.27 143.831-59.889 38.41-38.521 59.564-89.482 59.564-143.499 0-68.921-53.927-126.746-90.174-148.798z" fill="rgba(51, 99, 162, 1)"></path></svg>
                <h1 class="title-projects">GET HOURS</h1>
                <a href="https://github.com/alandotlbrt/GetHours" class="clicable github">
                    <img src="{{ asset('img/git.png') }} "alt="Github">
                </a>
            </div>
            <p class="text">
                 it's a project, in the terminal, which allows you to know your remaining hours of a quota, I used 
                <a href="https://go.dev" class="clicable">
                    <img src="{{ asset('img/go.png') }}" alt="Golang"> Golang
                </a>.
            </p>
            <iframe class="video-projects" src="https://www.youtube.com/embed/M4JPMvEHS8E?si=TbtPsRgUg4b-Z_wY"></iframe>
        <div>
        <div class="project-div">
            <div class="horizontal" style="gap:10px">
            <svg xmlns="http://www.w3.org/2000/svg" id="SvgjsSvg1086" width="40" height="40" viewBox="0 0 512 512" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"><path d="m256.002 242.913 210.412-121.43L256.002 0 45.586 121.483zm-15.053 26.073L30.534 147.557v242.96L240.949 512zm30.107 0V512l210.41-121.483v-242.96z" fill="rgba(51, 99, 162, 1)"></path></svg>
                <h1 class="title-projects">Figma</h1>
        
            </div>
            <p class="text">
                here is a figma model made with my team, for the social network by the way, I used 
                <a href="https://go.dev" class="clicable">
                    <img src="{{ asset('img/figma.png') }}" alt="Golang"> Figma
                </a>.
            </p>
            <div class="figma-project">
                <img style="width=40%" src="{{ asset('img/figma2.png') }}" alt="Figma"> 
                <img src="{{ asset('img/figma1.png') }}" alt="Figma"> 
            </div>
        </div>

@endsection