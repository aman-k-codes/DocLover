@extends('Layout.master')

@section('title', 'About Us - DocLover')

@section('meta_description', 'Learn more about DocLover, an all-in-one platform owned by Aman Sahu and developed by Aman Kumar, offering resume building, document editing, compression, conversion, and image tools.')

@section('meta_keywords', 'About DocLover, Aman Sahu, Aman Kumar, Resume Builder, Document Editor, Image Converter, PDF Tools, All-in-One Software')

@section('content')
    <!-- About Section -->
    <section class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-20 px-6 flex flex-col items-center justify-center text-center">
        <h1 class="text-5xl font-bold text-gray-800 mb-6">
            <i class="fas fa-info-circle text-blue-600 mr-2"></i> About <span class="text-blue-600">DocLover</span>
        </h1>
        <p class="text-gray-600 text-lg md:text-xl max-w-3xl mb-10 leading-relaxed">
            <strong>DocLover</strong> is an all-in-one software platform designed to meet your document and image processing needs. From building stunning resumes to editing, compressing, and converting documents and images, DocLover is your go-to digital toolkit — simple, fast, and free.
        </p>

        <div class="bg-white rounded-xl p-8 max-w-4xl w-full text-left space-y-8">
            <div class="flex items-start gap-4">
                <i class="fas fa-user-tie text-3xl text-blue-500"></i>
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800">Owner: Aman Sahu</h2>
                    <p class="text-gray-600 mt-1">
                        I'm <strong>Aman Sahu</strong>, the proud owner of DocLover. My goal is to provide a free, accessible, and feature-rich platform where users can handle all their document and image processing in one place — easily and efficiently.
                    </p>
                </div>
            </div>

            <div class="flex items-start gap-4">
                <i class="fas fa-code text-3xl text-green-500"></i>
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800">Developer: Aman Kumar</h2>
                    <p class="text-gray-600 mt-1">
                        <strong>Aman Kumar</strong> is the talented developer behind DocLover. He has brought this vision to life with clean code, user-focused design, and a deep understanding of what users need in an all-in-one productivity tool.
                    </p>
                </div>
            </div>

            <div class="flex items-start gap-4">
                <i class="fas fa-cogs text-3xl text-indigo-500"></i>
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800">What You Can Do</h2>
                    <ul class="list-disc list-inside text-gray-600 mt-2 space-y-1">
                        <li><i class="fas fa-file-word text-blue-500 mr-2"></i> Build professional resumes</li>
                        <li><i class="fas fa-edit text-green-500 mr-2"></i> Edit Word, PDF, and other documents</li>
                        <li><i class="fas fa-compress-alt text-red-500 mr-2"></i> Compress documents without quality loss</li>
                        <li><i class="fas fa-exchange-alt text-purple-500 mr-2"></i> Convert files (PDF ⇌ Word, Excel, JPG, etc.)</li>
                        <li><i class="fas fa-image text-pink-500 mr-2"></i> Enhance and convert images (JPG ⇌ PNG, etc.)</li>
                    </ul>
                </div>
            </div>

            <div class="flex items-start gap-4">
                <i class="fas fa-bullseye text-3xl text-yellow-500"></i>
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800">Our Mission</h2>
                    <p class="text-gray-600 mt-1">
                        We’re on a mission to simplify digital document and image tasks for everyone. Whether you're a student, job seeker, freelancer, or business professional — DocLover has tools tailored for you, all in one place.
                    </p>
                </div>
            </div>
        </div>

        <a href="{{ url('/resume-templates') }}"
           class="mt-12 bg-blue-600 text-white px-8 py-4 rounded-full hover:bg-blue-700 transition duration-300 text-lg font-medium">
            <i class="fas fa-file-alt mr-2"></i> Explore Resume Templates
        </a>
    </section>
@endsection
