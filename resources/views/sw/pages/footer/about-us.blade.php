@extends('sw.layout.master')

@section('title', 'About Us - DocLover')

@section('meta_description', 'Learn about DocLover, owned by Aman Sahu and developed by Aman Kumar. Discover powerful tools for resumes, document editing, image conversion, and more — all in one place.')

@section('meta_keywords', 'DocLover, Aman Sahu, Aman Kumar, Resume Builder, PDF Tools, Image Converter, Online Document Editor, All-in-One Software')

@section('content')
<section class="bg-white py-24 px-6">
    <div class="max-w-6xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
            <i class="fas fa-info-circle text-blue-600 mr-2"></i> About <span class="text-blue-600">DocLover</span>
        </h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
            <strong>DocLover</strong> is your ultimate digital productivity platform — resume building, document conversion, image editing, compression, and more — all in one place, accessible and user-friendly.
        </p>
    </div>

    <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-12 max-w-6xl mx-auto">
        <!-- Owner -->
        <div class="bg-gray-50 rounded-2xl shadow p-8">
            <div class="flex items-center gap-4 mb-4">
                <i class="fas fa-user-tie text-3xl text-blue-500"></i>
                <h2 class="text-2xl font-semibold text-gray-800">Aman Sahu</h2>
            </div>
            <p class="text-gray-600">
                As the owner of DocLover, I’m passionate about providing a free, powerful, and distraction-free platform for digital productivity. Everyone deserves access to essential tools without barriers.
            </p>
        </div>

        <!-- Developer -->
        <div class="bg-gray-50 rounded-2xl shadow p-8">
            <div class="flex items-center gap-4 mb-4">
                <i class="fas fa-code text-3xl text-green-500"></i>
                <h2 class="text-2xl font-semibold text-gray-800">Aman Kumar</h2>
            </div>
            <p class="text-gray-600">
                I'm the developer behind DocLover. From smooth user experience to clean, responsive code — I’ve ensured this platform is fast, intuitive, and built to solve real-world file handling problems.
            </p>
        </div>

        <!-- Features -->
        <div class="bg-gray-50 rounded-2xl shadow p-8 md:col-span-2">
            <div class="flex items-center gap-4 mb-4">
                <i class="fas fa-cogs text-3xl text-indigo-500"></i>
                <h2 class="text-2xl font-semibold text-gray-800">What You Can Do</h2>
            </div>
            <ul class="text-gray-600 grid sm:grid-cols-2 gap-4 mt-4 text-base leading-6">
                <li><i class="fas fa-file-word text-blue-500 mr-2"></i> Build job-ready resumes</li>
                <li><i class="fas fa-edit text-green-500 mr-2"></i> Edit Word, PDF, and other documents</li>
                <li><i class="fas fa-compress-alt text-red-500 mr-2"></i> Compress files without quality loss</li>
                <li><i class="fas fa-exchange-alt text-purple-500 mr-2"></i> Convert between PDF, Word, Excel, JPG, etc.</li>
                <li><i class="fas fa-image text-pink-500 mr-2"></i> Convert and enhance images (JPG ⇌ PNG)</li>
                <li><i class="fas fa-lock text-yellow-500 mr-2"></i> Protect and unlock PDFs</li>
            </ul>
        </div>

        <!-- Mission -->
        <div class="bg-gray-50 rounded-2xl shadow p-8 md:col-span-2">
            <div class="flex items-center gap-4 mb-4">
                <i class="fas fa-bullseye text-3xl text-yellow-500"></i>
                <h2 class="text-2xl font-semibold text-gray-800">Our Mission</h2>
            </div>
            <p class="text-gray-600">
                At DocLover, we aim to streamline document and image tasks for students, freelancers, and professionals alike. No ads, no complexity — just efficient tools to get things done, fast.
            </p>
        </div>
    </div>

    <div class="text-center mt-16">
        <a href="{{ url('/resume-templates') }}"
           class="bg-blue-600 text-white px-8 py-4 rounded-full hover:bg-blue-700 transition-all duration-300 font-medium text-lg shadow-lg inline-flex items-center gap-2">
            <i class="fas fa-file-alt"></i> Explore Resume Templates
        </a>
    </div>
</section>
@endsection
