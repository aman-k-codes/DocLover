@extends('sw.layout.master')

@section('title', 'DocLover - Free Resume Templates')

@section('meta_description',
    'Build a standout resume in minutes with DocLover. Choose from modern, professional resume
    templates and download your resume instantly.')

@section('meta_keywords',
    'Professional Resume Templates, Resume Builder, CV Maker, Free Resume Download, Online Resume
    Editor, ATS Friendly Resumes')

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

    <!-- Resume Templates -->
    <section id="resumeSection" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-briefcase text-blue-600 mr-2"></i>Choose Your Resume Design
            </h2>
            <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
                Explore our curated selection of resume templates that blend creativity and professionalism to help you
                stand out.
            </p>

            <!-- Category Buttons -->
            <div class="flex flex-wrap justify-center gap-4 px-4 mb-5">
                <button
                    class="category-btn active text-blue-600 border-b-2 border-blue-600 font-semibold px-4 py-2 transition duration-300"
                    data-category="all">
                    <i class="fas fa-file-alt"></i> All Templates
                </button>
                {{-- <button class="category-btn text-gray-700 hover:text-blue-600 px-4 py-2 transition duration-300"
                    data-category="picture">
                    <i class="fas fa-image"></i> Picture
                </button> --}}
                <button class="category-btn text-gray-700 hover:text-blue-600 px-4 py-2 transition duration-300"
                    data-category="simple">
                    <i class="fas fa-magic"></i> Simple
                </button>
                <button class="category-btn text-gray-700 hover:text-blue-600 px-4 py-2 transition duration-300"
                    data-category="ats">
                    <i class="fas fa-cogs"></i> ATS
                </button>
                <button class="category-btn text-gray-700 hover:text-blue-600 px-4 py-2 transition duration-300"
                    data-category="two-column">
                    <i class="fas fa-columns"></i> Two-column
                </button>
                {{-- <button class="category-btn text-gray-700 hover:text-blue-600 px-4 py-2 transition duration-300"
                    data-category="google-docs">
                    <i class="fab fa-google-drive"></i> Google Docs
                </button> --}}
            </div>

            <!-- Templates -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 border-t pt-5" id="templateContainer">
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (1).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (1).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (1).jpg') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (1).jpg') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="simple">
                    <img src="{{ asset('public/assets/temp-imgs/simple/smpl (1).jpg') }}" alt="Simple Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/simple/smpl (1).jpg') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="google-docs">
                    <img src="{{ asset('public/assets/temp-imgs/google-docs/gd (2).png') }}" alt="Google Docs Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/google-docs/gd (2).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (3).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (3).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (1).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (1).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (4).jpg') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (4).jpg') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="google-docs">
                    <img src="{{ asset('public/assets/temp-imgs/google-docs/gd (2).jpg') }}" alt="Google Docs Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/google-docs/gd (2).jpg') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (4).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (4).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="picture">
                    <!-- Image -->
                    <img src="{{ asset('public/assets/temp-imgs/pitcher/ptr (2).jpg') }}" alt="Picture Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/pitcher/ptr (2).jpg') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (5).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (5).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="google-docs">
                    <img src="{{ asset('public/assets/temp-imgs/google-docs/gd (3).png') }}" alt="Google Docs Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/google-docs/gd (3).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (2).jpg') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (2).jpg') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (7).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (7).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="google-docs">
                    <img src="{{ asset('public/assets/temp-imgs/google-docs/gd (4).png') }}" alt="Google Docs Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/google-docs/gd (4).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (8).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (8).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="simple">
                    <img src="{{ asset('public/assets/temp-imgs/simple/smpl (1).png') }}" alt="Simple Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/simple/smpl (1).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="google-docs">
                    <img src="{{ asset('public/assets/temp-imgs/google-docs/gd (5).png') }}" alt="Google Docs Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/google-docs/gd (5).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (10).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (10).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (2).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (2).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (11).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (11).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (12).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (12).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="picture">
                    <!-- Image -->
                    <img src="{{ asset('public/assets/temp-imgs/pitcher/ptr (3).jpg') }}" alt="Picture Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/pitcher/ptr (3).jpg') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (13).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (13).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (14).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (14).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (3).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (3).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (15).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (15).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="simple">
                    <img src="{{ asset('public/assets/temp-imgs/simple/smpl (2).png') }}" alt="Simple Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/simple/smpl (2).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (18).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (18).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (4).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (4).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (19).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (19).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="picture">
                    <!-- Image -->
                    <img src="{{ asset('public/assets/temp-imgs/pitcher/ptr (4).jpg') }}" alt="Picture Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/pitcher/ptr (4).jpg') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (20).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (20).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="google-docs">
                    <img src="{{ asset('public/assets/temp-imgs/google-docs/gd (11).png') }}" alt="Google Docs Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/google-docs/gd (11).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (22).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (22).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (5).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (5).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (23).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (23).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="google-docs">
                    <img src="{{ asset('public/assets/temp-imgs/google-docs/gd (13).png') }}" alt="Google Docs Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/google-docs/gd (13).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (24).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (24).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="simple">
                    <img src="{{ asset('public/assets/temp-imgs/simple/smpl (3).png') }}" alt="Simple Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/simple/smpl (3).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="google-docs">
                    <img src="{{ asset('public/assets/temp-imgs/google-docs/gd (14).png') }}" alt="Google Docs Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/google-docs/gd (14).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (25).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (25).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (6).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (6).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (26).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (26).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="google-docs">
                    <img src="{{ asset('public/assets/temp-imgs/google-docs/gd (15).png') }}" alt="Google Docs Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/google-docs/gd (15).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="two-column">
                    <img src="{{ asset('public/assets/temp-imgs/two-column/tclm (27).png') }}" alt="Two-column Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/two-column/tclm (27).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="picture">
                    <!-- Image -->
                    <img src="{{ asset('public/assets/temp-imgs/pitcher/ptr (5).jpg') }}" alt="Picture Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/pitcher/ptr (5).jpg') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="google-docs">
                    <img src="{{ asset('public/assets/temp-imgs/google-docs/gd (16).png') }}" alt="Google Docs Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/google-docs/gd (16).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (7).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (7).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="google-docs">
                    <img src="{{ asset('public/assets/temp-imgs/google-docs/gd (17).png') }}" alt="Google Docs Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/google-docs/gd (17).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>


                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (8).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (8).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="picture">
                    <!-- Image -->
                    <img src="{{ asset('public/assets/temp-imgs/pitcher/ptr (6).jpg') }}" alt="Picture Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/pitcher/ptr (6).jpg') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (9).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (9).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="simple">
                    <img src="{{ asset('public/assets/temp-imgs/simple/smpl (5).png') }}" alt="Simple Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/simple/smpl (5).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (10).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (10).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="simple">
                    <img src="{{ asset('public/assets/temp-imgs/simple/smpl (6).png') }}" alt="Simple Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/simple/smpl (6).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (11).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (11).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="ats">
                    <img src="{{ asset('public/assets/temp-imgs/ats/ats (12).png') }}" alt="ATS Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/ats/ats (12).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="simple">
                    <img src="{{ asset('public/assets/temp-imgs/simple/smpl (8).png') }}" alt="Simple Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/simple/smpl (8).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>

                <div class="template-item relative group border rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                    data-category="simple">
                    <img src="{{ asset('public/assets/temp-imgs/simple/smpl (10).png') }}" alt="Simple Template"
                        class="p-3  w-full h-full object-cover transition duration-300 group-hover:blur-sm" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="gotoFillData(base64encoded('.{{ asset('public/assets/temp-imgs/simple/smpl (10).png') }}.'));"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Use
                            Template</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function scrollToResume() {
            document.getElementById("resumeSection").scrollIntoView({
                behavior: "smooth"
            });
        }
    </script>
    <script>
        function gotoFillData(id) {
            const url = "{{ url('/resume/template') }}/" + id;
            window.location.href = url;
        }

        function base64encoded(text) {
            return btoa(text);
        }
    </script>
@endsection

@section('script')
    <script>
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', () => {
                const selectedCategory = button.getAttribute('data-category');

                // Update button styles
                document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove(
                    'text-blue-600', 'border-b-2', 'border-blue-600', 'font-semibold'));
                button.classList.add('text-blue-600', 'border-b-2', 'border-blue-600', 'font-semibold');

                // Show/hide templates
                document.querySelectorAll('.template-item').forEach(template => {
                    const category = template.getAttribute('data-category');

                    if (selectedCategory === 'all' || category === selectedCategory) {
                        template.style.display = 'block';
                    } else {
                        template.style.display = 'none';
                    }
                });
            });
        });
    </script>

@endsection
