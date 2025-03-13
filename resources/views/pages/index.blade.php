@extends('app-layout')
@section('content')
    @include('components.navbar', ['title' => 'Index'])
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-screen-xl mx-auto text-center">
            <h1 class="text-6xl font-semibold text-gray-800 dark:text-white">Hi there! I'm Martin,
            </h1>
            <p class="text-4xl mt-4 text-gray-600 dark:text-gray-400">Full-stack developer specialized in PHP
                framework like Laravel.</p>
        </div>
    </div>
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-screen-xl mx-auto text-center">
            <h1 class="text-6xl text-white">
                ABOUT ME SECTION
            </h1>
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
