@extends('layouts.app')

@section('title', 'Me')

@section('css')
    @vite(['resources/css/me.css'])
@endsection

@section('content')
    <div class="container-about">

        <div class="title-about left-title">
        <div style="gap:10px" class="horizontal">
                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="System / Terminal"> <path id="Vector" d="M17 15H12M7 10L10 12.5L7 15M3 15.8002V8.2002C3 7.08009 3 6.51962 3.21799 6.0918C3.40973 5.71547 3.71547 5.40973 4.0918 5.21799C4.51962 5 5.08009 5 6.2002 5H17.8002C18.9203 5 19.4796 5 19.9074 5.21799C20.2837 5.40973 20.5905 5.71547 20.7822 6.0918C21 6.5192 21 7.07899 21 8.19691V15.8031C21 16.921 21 17.48 20.7822 17.9074C20.5905 18.2837 20.2837 18.5905 19.9074 18.7822C19.48 19 18.921 19 17.8031 19H6.19691C5.07899 19 4.5192 19 4.0918 18.7822C3.71547 18.5905 3.40973 18.2837 3.21799 17.9074C3 17.4796 3 16.9203 3 15.8002Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                <h1>Apprentice Developer</h1>
            </div>
            <p> -> Backend & Frontend</p>
            <div class="Apprentice-dev">
                Hi, My name is Alan Lebrument, I am currently learning development! I am as attracted to the <strong>frontend </strong>as to the<strong> backend</strong>! Which makes me a <strong>versatile developer</strong>, in addition to that I have a very strong desire to learn.
            </div>
        </div>

        <div class="title-about right-title">
            <div style="gap:10px" class="horizontal">
            <svg width="64px" height="64px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ffffff" fill-rule="evenodd" d="M8.316 2.07a.75.75 0 00-.632 0l-7 3.25a.75.75 0 000 1.36l1.434.666A.746.746 0 002 7.75V11a.75.75 0 00.158.46L2.75 11l-.592.46.001.002.001.001.003.004.008.01a1.882 1.882 0 00.103.12c.068.076.165.178.292.299.254.24.63.555 1.132.866C4.706 13.388 6.217 14 8.25 14c2.037 0 3.44-.615 4.345-1.266a5.32 5.32 0 00.977-.902 3.916 3.916 0 00.322-.448l.007-.012.003-.004v-.002h.001c0-.001 0-.002-.655-.366l.655.365A.754.754 0 0014 11V7.75a.747.747 0 00-.118-.404l1.434-.666a.75.75 0 000-1.36l-7-3.25zM12.5 7.988L8.316 9.93a.75.75 0 01-.632 0L3.5 7.988v2.723a5.585 5.585 0 00.99.776c.804.5 2.043 1.013 3.76 1.013 1.713 0 2.81-.51 3.468-.984a3.812 3.812 0 00.782-.745V7.988zM8 8.423L2.781 6 8 3.577 13.219 6 8 8.423z" clip-rule="evenodd"></path></g></svg>
                <h1>School</h1>
            </div>
            <p>-> Zone01</p>
            <div class="school">
            I am currently studying at zone01, it is a new French school that advocates learning with peers, we do not have teachers, we only have internet and our classmates. <strong>Only 4% are accepted during the recruitment phase</strong>. Soon we will have to choose a specialization, I think I will go to mobile app.
            </div>
        </div>

        <div class="title-about left-title ">
        <div style="gap:10px" class="horizontal">
             <svg fill="#ffffff" width="64px" height="64px" viewBox="0 0 32 32" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M25.62,9.3A4.44,4.44,0,0,0,26,7.5,4.51,4.51,0,0,0,21.5,3a4.23,4.23,0,0,0-.94.1,10.17,10.17,0,0,0-6.67-.88A4.35,4.35,0,0,0,12.5,2,4.47,4.47,0,0,0,8,6a9.93,9.93,0,0,0-2,6s0,.08,0,.12H6a10.22,10.22,0,0,0,.25,2.12L8,29.12A1,1,0,0,0,9,30H23a1,1,0,0,0,1-.88l1.75-14.89v0A10.53,10.53,0,0,0,26,12.12h0S26,12,26,12A9.89,9.89,0,0,0,25.62,9.3ZM9.78,7A1,1,0,0,0,10,6.38a2.5,2.5,0,0,1,3.43-2.2.94.94,0,0,0,.62.05A8.1,8.1,0,0,1,19.93,5a1,1,0,0,0,.81.08A2.46,2.46,0,0,1,21.5,5a2.5,2.5,0,0,1,2.18,3.72,1,1,0,0,0-.08.8A8.56,8.56,0,0,1,23.94,11H8.06A8,8,0,0,1,9.78,7Zm9.16,6-.88,15H13.94l-.88-15ZM8.25,14.09a.49.49,0,0,0,0-.12l-.11-1h2.93l.88,15h-2ZM22.11,28H20.06l.88-15h2.93l-.11,1a.13.13,0,0,0,0,.06ZM14,7a1,1,0,1,1-1-1h0A1,1,0,0,1,14,7Zm5,1a1,1,0,1,1-1-1h0A1,1,0,0,1,19,8Z"></path></g></svg>
            <h1>Hobbies</h1>
        </div>
        <p> -> Learning</p>
        <div class="Apprentice-dev">
        I like a lot of things, I think the main one would be learning, I'm very<strong> curious</strong> and I like to <strong>discover new things</strong>, but more specifically I'm a fan of <strong>cinema, music, literature, and coding</strong>! I love talking about it, so don't hesitate to talk to me about them.
            </div>
        </div>

        <div class="title-about right-title end">
            <div style="gap:10px" class="horizontal">
                <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 444.792 444.792" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M269.383,386.938c-18.445,0-36.202-4.397-52.08-12.682H107.22c-10.099,0-18.315-8.219-18.315-18.315v-56.576 c0-10.099,8.217-18.314,18.315-18.314h49.748c-0.13-2.231-0.204-4.479-0.204-6.731c0-8.453,0.922-16.763,2.719-24.813H56.516 v-30.832h101.802c8.71,0,15.772-7.061,15.772-15.771s-7.063-15.771-15.772-15.771H56.516v-30.832h50.704h185.134 c8.184,0,15.131,5.398,17.471,12.818c11.723,4.491,22.652,10.962,32.389,19.231v-13.735c0-6.465-1.25-12.641-3.5-18.314h40.303 c8.709,0,15.771-7.063,15.771-15.773s-7.062-15.771-15.771-15.771h-4.411v-93.21h4.411c8.709,0,15.771-7.063,15.771-15.773 S387.726,0,379.017,0H107.22C79.728,0,57.362,22.367,57.362,49.859v56.576c0,6.467,1.25,12.643,3.5,18.316H20.56 c-8.71,0-15.772,7.061-15.772,15.771s7.063,15.773,15.772,15.773h4.412v93.207H20.56c-8.71,0-15.772,7.062-15.772,15.771 c0,8.709,7.063,15.771,15.772,15.771h40.302c-2.25,5.675-3.5,11.852-3.5,18.313v56.575c0,27.494,22.366,49.861,49.858,49.861 H332.7l-25.398-25.4C295.136,384.74,282.411,386.938,269.383,386.938z M88.905,49.859c0-10.098,8.217-18.314,18.315-18.314 H343.06v30.83H241.256c-8.709,0-15.771,7.063-15.771,15.773s7.062,15.771,15.771,15.771H343.06v30.832H107.22 c-10.099,0-18.315-8.217-18.315-18.316V49.859z"></path> <path d="M432.407,400.461l-79.035-79.034c21.303-37.448,16.01-86.032-15.896-117.937c-38.263-38.262-100.517-38.262-138.775,0 c-38.261,38.26-38.262,100.518,0,138.775c31.904,31.906,80.488,37.199,117.938,15.896l79.035,79.033 c10.129,10.129,26.607,10.129,36.734,0C442.536,427.07,442.536,410.592,432.407,400.461z M317.931,322.721 c-27.481,27.483-72.202,27.483-99.688,0c-27.481-27.481-27.481-72.201,0-99.686c27.484-27.482,72.203-27.482,99.688,0 C345.413,250.52,345.413,295.238,317.931,322.721z"></path> </g> </g> </g> </g></svg>
                <h1>Techs</h1>
            </div>
            <p>-> Languages..</p>
            <div class="school">
            I am proficient in <strong>Golang, JavaScript, Python, Numpy, Matplotlib, C, HTML, CSS, Swift, SwiftUI, Node.js, Laravel, Vue.js, Angular, PHP, SQLite, Java, and Rust.</strong> I also have experience with <strong>GitHub Actions</strong>, creating and using APIs, working with databases, and utilizing various frameworks.
            As for tools, I am comfortable using VS Code, Xcode, Docker, Figma, and GitHub.
            However, <strong>don't limit me to what I already know, I adapt to new languages ​​and tools</strong>.
            </div>
        </div>
    
        
    
    </div>
    
@endsection