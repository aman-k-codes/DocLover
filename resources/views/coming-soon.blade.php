@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Coming Soon')
@section('meta_description', 'CraftMyDoc is launching soon! Stay tuned for a smarter, easier way to create professional resumes and documents.')
@section('meta_keywords', 'Coming Soon, Resume Builder, CraftMyDoc Launch, Professional Documents')

@section('content')
    <section class="min-h-screen bg-gradient-to-r from-blue-50 to-white flex flex-col items-center justify-center text-center px-6">
        <div class="max-w-2xl">
            {{-- <img src="{{ asset('public/assets/imgs/coming-soon.svg') }}" alt="Coming Soon" class="mx-auto mb-8 w-3/4 md:w-1/2"> --}}

            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                🚀 CraftMyDoc <span style="color: rgb(165, 126, 42);text-decoration:underline">Resume Maker</span> is Coming Soon!
            </h1>

            <p class="text-lg text-gray-600 mb-6">
                We're working hard to bring you a powerful, easy-to-use document and resume builder.
                Stay tuned for the official launch.
            </p>

            <a href="{{ url('/') }}" class="inline-block mt-4 px-6 py-3 text-white bg-blue-600 hover:bg-blue-700 font-semibold rounded-lg shadow-md transition">
                Back to Home
            </a>
        </div>
    </section>
@endsection
