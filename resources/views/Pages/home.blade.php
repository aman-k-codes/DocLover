@extends('Layout.master')
@section('content')
    <!-- Hero Section -->
    <section
        class="bg-gradient-to-r from-blue-50 to-white py-20 px-8 flex flex-col md:flex-row items-center justify-between">
        <!-- Text Content -->
        <div class="md:w-1/2 mb-12 md:mb-0">
            <h1 class=" text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                The Smartest Way to <span class="text-blue-600">Manage PDFs</span>
            </h1>

            <p class="text-md md:text-lg text-gray-600 mt-4">
                Powerful, easy-to-use tools for converting, editing, and securing your PDFs—completely online.
            </p>

            <div class="mt-6 flex flex-wrap gap-4">
                <a href="#" class="bg-blue-600 text-white font-semibold
                                  px-4 py-2 text-sm
                                  sm:px-6 sm:py-2.5 sm:text-base
                                  md:px-8 md:py-3 md:text-lg
                                  rounded-lg shadow-lg
                                  hover:bg-blue-700 transition">
                    Make Resume
                </a>
                <a href="{{ route('home.AllTools') }}" class="border border-blue-600 text-blue-600 font-semibold
                                  px-4 py-2 text-sm
                                  sm:px-6 sm:py-2.5 sm:text-base
                                  md:px-8 md:py-3 md:text-lg
                                  rounded-lg
                                  hover:bg-blue-50 transition">
                    Explore All Tools
                </a>
            </div>

        </div>

        <!-- Image / Graphic Section -->
        <div class="md:w-1/2 flex justify-center">
            <img src="{{ asset('public/assets/imgs/home-hero.svg') }}" alt="PDF Tool Preview"
                class="w-full max-w-lg mx-auto drop-shadow-2xl">
        </div>
    </section>


    <section class="py-20 bg-gray-50 text-center">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Most Popular PDF Tools</h2>
            <p class="text-gray-600 text-lg mb-12">21 powerful tools to convert, compress, and edit PDFs seamlessly.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- PDF to Word -->
                <div
                    class="flex items-start bg-white shadow-lg border border-gray-200 rounded-xl p-6 text-left hover:shadow-xl transition">
                    <div class="bg-blue-100 text-blue-600 rounded-full p-3 mr-4">
                        <i class="fas fa-file-word text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">PDF to Word</h3>
                        <p class="text-gray-600 text-sm">Convert PDFs into editable Word documents effortlessly.</p>
                    </div>
                </div>

                <!-- Merge PDF -->
                <div
                    class="flex items-start bg-white shadow-lg border border-gray-200 rounded-xl p-6 text-left hover:shadow-xl transition">
                    <div class="bg-purple-100 text-purple-600 rounded-full p-3 mr-4">
                        <i class="fas fa-file-pdf text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Merge PDF</h3>
                        <p class="text-gray-600 text-sm">Easily combine multiple PDFs into a single document.</p>
                    </div>
                </div>

                <!-- JPG to PDF -->
                <div
                    class="flex items-start bg-white shadow-lg border border-gray-200 rounded-xl p-6 text-left hover:shadow-xl transition">
                    <div class="bg-yellow-100 text-yellow-600 rounded-full p-3 mr-4">
                        <i class="fas fa-image text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">JPG to PDF</h3>
                        <p class="text-gray-600 text-sm">Convert JPG, PNG, BMP, GIF, and TIFF images into PDF format.</p>
                    </div>
                </div>

                <!-- Sign PDF -->
                <div
                    class="flex items-start bg-white shadow-lg border border-gray-200 rounded-xl p-6 text-left hover:shadow-xl transition">
                    <div class="bg-pink-100 text-pink-600 rounded-full p-3 mr-4">
                        <i class="fas fa-signature text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Sign PDF</h3>
                        <p class="text-gray-600 text-sm">E-sign your documents securely and effortlessly.</p>
                    </div>
                </div>

                <!-- Edit PDF -->
                <div
                    class="flex items-start bg-white shadow-lg border border-gray-200 rounded-xl p-6 text-left hover:shadow-xl transition">
                    <div class="bg-teal-100 text-teal-600 rounded-full p-3 mr-4">
                        <i class="fas fa-edit text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Edit PDF</h3>
                        <p class="text-gray-600 text-sm">Add text, images, and annotations to your PDF with ease.</p>
                    </div>
                </div>

                <!-- Compress PDF -->
                <div
                    class="flex items-start bg-white shadow-lg border border-gray-200 rounded-xl p-6 text-left hover:shadow-xl transition">
                    <div class="bg-red-100 text-red-600 rounded-full p-3 mr-4">
                        <i class="fas fa-compress-alt text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Compress PDF</h3>
                        <p class="text-gray-600 text-sm">Reduce PDF file size while maintaining quality.</p>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <a href="{{route('home.AllTools')}}"
                    class="inline-block underline text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-text-700 transition">
                    Explore All PDF Tools
                </a>
            </div>
        </div>
    </section>


    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Why Choose DocLover?</h2>
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
                    <p class="text-gray-600">Access DocLover tools effortlessly on desktops, tablets, and smartphones.</p>
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

            @include('Components.tools')
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-gray-900 text-center mb-10">Frequently Asked Questions</h2>

            <div class="space-y-6">
                <div class="p-6 border border-gray-300 rounded-lg shadow-sm transition hover:shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Is DocLover free to use?</h3>
                    <p class="text-gray-600 mt-2">Yes! You can access most of our tools for free with limited features.</p>
                </div>

                <div class="p-6 border border-gray-300 rounded-lg shadow-sm transition hover:shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Do I need to install any software?</h3>
                    <p class="text-gray-600 mt-2">No, DocLover works entirely online from your browser.</p>
                </div>

                <div class="p-6 border border-gray-300 rounded-lg shadow-sm transition hover:shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Is my data secure?</h3>
                    <p class="text-gray-600 mt-2">Absolutely. We use advanced encryption to keep your files safe.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
