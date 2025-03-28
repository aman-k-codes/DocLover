@extends('Layout.master')

@section('title', 'DocLover - Free Resume Templates')

@section('meta_description', 'Build a standout resume in minutes with DocLover. Choose from modern, professional resume templates and download your resume instantly.')

@section('meta_keywords', 'Professional Resume Templates, Resume Builder, CV Maker, Free Resume Download, Online Resume Editor, ATS Friendly Resumes')

@section('content')
    <!-- Hero Section -->
    <section
        class="bg-gradient-to-r from-blue-50 to-white py-16 px-6 flex flex-col items-center justify-center text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
            <i class="fas fa-file-alt text-blue-600 mr-2"></i>
            Professional Resume Templates
        </h1>
        <p class="text-gray-600 text-lg md:text-xl max-w-2xl mb-6">
            Choose from a range of recruiter-approved resume templates designed to help you land your dream job faster.
            <br class="hidden sm:block">
            Start building your resume today – it’s fast, free, and easy.
        </p>
        <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
            <i class="fas fa-pencil-alt mr-2"></i>
            Create My Resume
        </button>
    </section>


    <!-- Resume Templates -->
    <section class="py-20 bg-white">
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
                <button class="category-btn active text-blue-600 border-b-2 border-blue-600 font-semibold" data-category="all">
                    <i class="fas fa-file-alt"></i> All Templates
                </button>
                <button class="category-btn" data-category="picture">
                    <i class="fas fa-image"></i> Picture
                </button>
                <button class="category-btn" data-category="word">
                    <i class="fas fa-file-word"></i> Word
                </button>
                <button class="category-btn" data-category="simple">
                    <i class="fas fa-magic"></i> Simple
                </button>
                <button class="category-btn" data-category="ats">
                    <i class="fas fa-cogs"></i> ATS
                </button>
                <button class="category-btn" data-category="two-column">
                    <i class="fas fa-columns"></i> Two-column
                </button>
                <button class="category-btn" data-category="google-docs">
                    <i class="fab fa-google-drive"></i> Google Docs
                </button>
            </div>

            <!-- Templates -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 border-t pt-5" id="templateContainer">
                <div class="template-item border rounded-2xl overflow-hidden shadow transition duration-300"
                    data-category="picture">
                    <img src="https://via.placeholder.com/300x400?text=Picture+Template" alt="Picture Template"
                        class="w-full" />
                </div>
                <div class="template-item border rounded-2xl overflow-hidden shadow transition duration-300"
                    data-category="word">
                    <img src="https://via.placeholder.com/300x400?text=Word+Template" alt="Word Template" class="w-full" />
                </div>
                <div class="template-item border rounded-2xl overflow-hidden shadow transition duration-300"
                    data-category="simple">
                    <img src="https://via.placeholder.com/300x400?text=Simple+Template" alt="Simple Template"
                        class="w-full" />
                </div>
                <div class="template-item border rounded-2xl overflow-hidden shadow transition duration-300"
                    data-category="ats">
                    <img src="https://via.placeholder.com/300x400?text=ATS+Template" alt="ATS Template" class="w-full" />
                </div>
                <div class="template-item border rounded-2xl overflow-hidden shadow transition duration-300"
                    data-category="two-column">
                    <img src="https://via.placeholder.com/300x400?text=Two+Column+Template" alt="Two-column Template"
                        class="w-full" />
                </div>
                <div class="template-item border rounded-2xl overflow-hidden shadow transition duration-300"
                    data-category="google-docs">
                    <img src="https://via.placeholder.com/300x400?text=Google+Docs+Template" alt="Google Docs Template"
                        class="w-full" />
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', () => {
                const selectedCategory = button.getAttribute('data-category');

                // Update button styles
                document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600', 'font-semibold'));
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
