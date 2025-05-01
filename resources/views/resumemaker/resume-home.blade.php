@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Free Resume Builder Online')
@section('meta_description', 'Create professional resumes effortlessly with CraftMyDoc. Use our free resume builder to design, customize, and download your resume in minutes.')
@section('meta_keywords', 'Resume Builder, Free Resume Maker, Online Resume Creator, CV Builder, Create Resume, Download Resume')

@section('content')
    <!-- Hero Section -->
    <section
        class="bg-gradient-to-r from-blue-50 to-white py-5 px-8 flex flex-col md:flex-row items-center justify-between">
        <!-- Text Content -->
        <div class="md:w-1/2 mb-12 md:mb-0">
            <h1 class=" text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                Build Your <span class="text-blue-600">Professional Resume</span> Instantly
            </h1>

            <p class="text-md md:text-lg text-gray-600 mt-4">
                Create polished, job-ready resumes with ease using our smart and intuitive resume builder—100% free.
            </p>

            <div class="mt-6 flex flex-wrap gap-4">
                <a href="{{ route('resume.index') }}" class="bg-blue-600 text-white font-semibold
                    px-4 py-2 text-sm
                    sm:px-6 sm:py-2.5 sm:text-base
                    md:px-8 md:py-3 md:text-lg
                    rounded-lg shadow-lg
                    hover:bg-blue-700 transition">
                    Document Editor
                </a>
                <a href="{{ route('resume.ResumeTemplate') }}" class="border border-blue-600 text-blue-600 font-semibold
                    px-4 py-2 text-sm
                    sm:px-6 sm:py-2.5 sm:text-base
                    md:px-8 md:py-3 md:text-lg
                    rounded-lg
                    hover:bg-blue-50 transition">
                    Build Resume
                </a>
            </div>

        </div>

        <!-- Image / Graphic Section -->
        <div class="md:w-1/2 flex justify-center">
            <img src="{{ asset('public/assets/imgs/resume-hero.svg') }}" alt="PDF Tool Preview"
                class="w-full max-w-lg mx-auto drop-shadow-2xl">
        </div>
    </section>


    <section class="py-20 bg-gray-50 text-center">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Key Resume Features</h2>
            <p class="text-gray-600 text-lg mb-12">Design and customize your resume to stand out in the job market.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Templates -->
                <div
                    class="flex items-start bg-white shadow-lg border border-gray-200 rounded-xl p-6 text-left hover:shadow-xl transition">
                    <div class="bg-blue-100 text-blue-600 rounded-full p-3 mr-4">
                        <i class="fas fa-file-alt text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Modern Templates</h3>
                        <p class="text-gray-600 text-sm">Choose from a wide variety of professionally designed resume
                            templates.</p>
                    </div>
                </div>

                <!-- Auto Formatting -->
                <div
                    class="flex items-start bg-white shadow-lg border border-gray-200 rounded-xl p-6 text-left hover:shadow-xl transition">
                    <div class="bg-purple-100 text-purple-600 rounded-full p-3 mr-4">
                        <i class="fas fa-magic text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Auto Formatting</h3>
                        <p class="text-gray-600 text-sm">Focus on your content, we'll handle the sw.layout and formatting
                            for
                            you.</p>
                    </div>
                </div>

                <!-- Download Options -->
                <div
                    class="flex items-start bg-white shadow-lg border border-gray-200 rounded-xl p-6 text-left hover:shadow-xl transition">
                    <div class="bg-green-100 text-green-600 rounded-full p-3 mr-4">
                        <i class="fas fa-download text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Download PDF</h3>
                        <p class="text-gray-600 text-sm">Instantly download your resume in high-quality PDF format.</p>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <a href="{{ route('resume.ResumeTemplate') }}"
                    class="inline-block underline text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-text-700 transition">
                    Try Resume Builder Now
                </a>
            </div>
        </div>
    </section>


    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Why Choose CraftMyDoc?</h2>
            <p class="text-lg text-gray-600 mb-12">
                Experience seamless PDF editing, conversion, and management with our industry-leading tools.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Fast & Secure -->
                <div
                    class="p-8 bg-white shadow-lg border border-gray-200 rounded-xl transition transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="mb-4 text-blue-600 text-4xl">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Fast & Secure</h3>
                    <p class="text-gray-600">All file conversions take place in a safe, encrypted environment.</p>
                </div>

                <!-- Works on Any Device -->
                <div
                    class="p-8 bg-white shadow-lg border border-gray-200 rounded-xl transition transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="mb-4 text-green-600 text-4xl">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Works on Any Device</h3>
                    <p class="text-gray-600">Access CraftMyDoc tools effortlessly on desktops, tablets, and smartphones.</p>
                </div>

                <!-- Free to Use -->
                <div
                    class="p-8 bg-white shadow-lg border border-gray-200 rounded-xl transition transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="mb-4 text-yellow-600 text-4xl">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Free to Use</h3>
                    <p class="text-gray-600">Enjoy powerful features at no cost, with premium upgrades available anytime.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-100">
        <div class="bg-white p-6 md:p-12">
            <div class="text-center mb-8">
                <h2 class="text-xl font-semibold text-gray-800">Rate this tool</h2>
                <div class="flex items-center justify-center mt-2 space-x-1 text-yellow-500">
                    <i class="fas fa-star text-yellow-500"></i>
                    <i class="fas fa-star text-yellow-500"></i>
                    <i class="fas fa-star text-yellow-500"></i>
                    <i class="fas fa-star text-yellow-500"></i>
                    <i class="fas fa-star text-yellow-500"></i>
                    <span class="text-gray-700 ml-2 font-medium">4.6 / 5 - 320,528 votes</span>
                </div>
            </div>

            @include('sw.components.tools')
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-gray-900 text-center mb-10">Frequently Asked Questions</h2>

            <div class="space-y-6">
                <div class="p-6 border border-gray-300 rounded-lg shadow-sm transition hover:shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Is CraftMyDoc free to use?</h3>
                    <p class="text-gray-600 mt-2">Yes! You can access most of our tools for free with limited features.</p>
                </div>

                <div class="p-6 border border-gray-300 rounded-lg shadow-sm transition hover:shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Do I need to install any software?</h3>
                    <p class="text-gray-600 mt-2">No, CraftMyDoc works entirely online from your browser.</p>
                </div>

                <div class="p-6 border border-gray-300 rounded-lg shadow-sm transition hover:shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Is my data secure?</h3>
                    <p class="text-gray-600 mt-2">Absolutely. We use advanced encryption to keep your files safe.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
