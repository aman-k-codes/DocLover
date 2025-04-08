@extends('sw.layout.master')

@section('title', 'DocLover - Free Resume Templates')

@section('meta_description', 'Build a standout resume in minutes with DocLover. Choose from modern, professional resume templates and download your resume instantly.')

@section('meta_keywords', 'Professional Resume Templates, Resume Builder, CV Maker, Free Resume Download, Online Resume Editor, ATS Friendly Resumes')

@section('content')
    <!-- Hero Section -->
    <section
        class="min-h-screen bg-gradient-to-r from-blue-50 to-white py-16 px-6 flex flex-col items-center justify-center text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
            <i class="fas fa-file-alt text-blue-600 mr-2"></i>
            Professional Resume Templates
        </h1>
        <p class="text-gray-600 text-lg md:text-xl max-w-2xl mb-6">
            Choose from a range of recruiter-approved resume templates designed to help you land your dream job faster.
            <br class="hidden sm:block">
            Start building your resume today – it’s fast, free, and easy.
        </p>
        <button onclick="scrollToResume()"
            class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
            <i class="fas fa-pencil-alt mr-2"></i>
            Create My Resume
        </button>
    </section>
@endsection

