@extends('app-layout')
@section('content')
@include('components.navbar', ['title' => 'Index'])
<div class="max-w-screen-xl mx-auto p-4">
    <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">Welcome to the Index Page</h1>
    <p class="mt-4 text-gray-600 dark:text-gray-400">This is the index page content.</p>

@endsection
