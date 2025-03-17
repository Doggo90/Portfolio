@extends('app-layout')
@section('content')
    @include('components.navbar', ['title' => 'Index'])
    <div class="min-h-screen mb-0 flex items-center justify-center animate-fade-in">
        <div class="max-w-screen-xl mx-auto text-center">
            <h1 class="text-6xl font-semibold text-gray-800 dark:text-white">Hi there! I'm Martin,
            </h1>
            <p class="text-4xl mt-4 text-gray-600 dark:text-gray-400">Full-stack developer specialized in PHP
                framework Laravel.
            </p>
            <div class="flex justify-center space-x-2 items-center mt-8">
                <a href="https://www.linkedin.com/in/martin-oca-a58b44282/" target="_blank">
                    <img src="../linkedin.png" alt="linkedin"
                        class="w-10 h-10  hover:border-lime-400 hover:text-lime-400 transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                </a>
                <a href="https://github.com/Doggo90" target="_blank">
                    <img src="../github.png" alt="github"
                        class="w-10 h-10  hover:border-lime-400 hover:text-lime-400 transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                </a>
                <a href="https://x.com/MartinOca1009" target="_blank">
                    <img src="../twitter.png" alt="x-logo"
                        class="w-10 h-10  hover:border-lime-400 hover:text-lime-400 transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                </a>
                <a href="https://www.instagram.com/m.oca213/" target="_blank">
                    <img src="../instagram.png" alt="instagram"
                        class="w-10 h-10  hover:border-lime-400 hover:text-lime-400 transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                </a>
                <a href="https://www.facebook.com/Hataraku21301" target="_blank">
                    <img src="../facebook.png" alt="facebook"
                        class="w-10 h-10  hover:border-lime-400 hover:text-lime-400 transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                </a>
            </div>

            <div class="flex justify-center space-x-8 items-center mt-8 sticky top-5">
                <a href="https://drive.usercontent.google.com/download?id=170oOQZX5JbLPvA6hncALS7hCT9NnzIk7&export=download&authuser=0&confirm=t&uuid=f9e91681-ed84-4553-8e39-2c96bc797ef6&at=AEz70l5uYNoVurQaE_GS9uPWUBat:1742180438396"
                    download>
                    <h1
                        class="text-white border-2 border-white-400 hover:border-lime-400 hover:text-lime-400 transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 rounded-full p-3">
                        Resume</h1>
                </a>
                <a href="">
                    <h1
                        class="text-white border-2 border-white-400 hover:border-lime-400 hover:text-lime-400 transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 rounded-full p-3">
                        Contact</h1>
                </a>
            </div>
        </div>

    </div>
    <div class="min-h-screen flex items-center justify-center p-4 animate-fade-in" id="About">
        <div class="flex items-center space-x-8 max-w-4xl">
            <div class="flex-shrink-0 me-5 pe-5">
                <img src="../profile.jpg" alt="Martin" class="rounded-full h-40 w-40">
            </div>
            <div class="flex-grow ms-5 ps-5">
                <p class="text-md flex justify-center align-center mb-5 pb-5">
                    <span class="text-6xl text-white font-semibold">About Me</span>
                </p>
                <h1 class="text-xl text-white text-justify leading-loose">
                    <span class="font-bold">Programming</span> is my passion—a hobby, a challenge, and a tool for growth. I
                    aim to create impactful solutions that benefit others. I enjoy collaborating to solve problems
                    efficiently and innovatively. I seek to grow my expertise with a company that values and leverages my
                    contributions.
                    <span class="flex justify-start mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                        </svg>
                        <p class="text-white text-lg ms-2 font-bold">
                            Interests:
                        </p>
                        <p class="text-white text-lg ms-2">
                            Gaming, Reading, Coding, and Music
                        </p>
                    </span>
                </h1>
            </div>
        </div>
    </div>
    <div class="min-h-screen flex flex-col items-center justify-center bg-lime-100 gap-y-8 p-8">
        <div class="max-w-screen-xl text-center">
            <div class="flex justify-center items-start gap-x-8">
                <h1 class="text-4xl">EDUCATION</h1>
                <div class="text-left">
                    <h1 class="text-2xl">BS in Information Technology</h1>
                    <h1 class="text-2xl">Cavite State University</h1>
                    <h1 class="text-2xl">May 2025</h1>
                </div>
            </div>
        </div>
        <hr>
        <div class="max-w-screen-xl text-center">
            <div class="flex justify-center items-start gap-x-8">
                <h1 class="text-4xl">EXPERIENCE</h1>
                <div class="text-left">
                    <h1 class="text-2xl">Software Developer Intern</h1>
                    <h1 class="text-2xl">ABC Tech Company</h1>
                    <h1 class="text-2xl">June 2024 - Present</h1>
                </div>
            </div>
        </div>
    </div>



    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-screen-xl mx-auto text-center">
            <h1 class="text-6xl text-white">
                PROJECTS SECTION
            </h1>
        </div>
    </div>
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-screen-xl mx-auto text-center">
            <h1 class="text-6xl text-white">
                TECHNOLOGIES SECTION
            </h1>
        </div>
    </div>
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-screen-xl mx-auto text-center">
            <h1 class="text-6xl text-white">
                CONTACT SECTION
            </h1>
        </div>
    </div>
@endsection
