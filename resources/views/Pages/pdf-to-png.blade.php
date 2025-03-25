@extends('Layout.master')
@section('content')
    <!-- Hero Section -->

    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Convert Your Files Easily</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your file and get instant results with our fast, secure, and reliable tool.</p>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="py-10 px-4">
        <!-- Step indicator -->
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">1
                </div>
                <span class="text-gray-800 font-semibold">Choose a file</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">2
                </div>
                <span class="text-gray-800 font-semibold">Convert in a click</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">3
                </div>
                <span class="text-gray-800 font-semibold">Download your PDF</span>
            </div>
        </div>


        <!-- Upload area -->
        <div
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-medium mb-4">Drop your file here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M3 3a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V3zm2 0v14h10V3H5zm4 4h2v5h2l-3 3-3-3h2V7z" />
                </svg>
                Upload a file
                <input type="file" class="hidden" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Maximum size allowed is 25MB. Supported formats are: pdf</p>
        </div>
    </section>


    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach([
                    ['🚀', 'Quick, Easy & Free', 'Upload and convert in seconds. No signup needed.'],
                    ['🔒', 'Secure Conversion', 'All files are encrypted with end-to-end security. Your privacy is guaranteed.'],
                    ['🌍', 'Access Anywhere', 'Use our tool seamlessly from any device—mobile, desktop, or tablet.']
                ] as $feature)
                <div class="p-6 rounded-lg">
                    <div class="text-4xl">{{ $feature[0] }}</div>
                    <h3 class="text-xl font-bold text-gray-900 mt-4">{{ $feature[1] }}</h3>
                    <p class="text-gray-600 mt-2">{{ $feature[2] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- How to Convert -->
    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Convert PDF to JPG</h2>
            <p class="text-lg text-gray-600 mb-8">Follow these simple steps to quickly convert your PDF files into high-quality JPG images.</p>

            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach([
                        ['Upload your PDF file', 'Drag and drop or select a file from your device.'],
                        ['Select conversion type', 'Choose to extract images or convert entire pages.'],
                        ['Click "Convert"', 'Our system will process your file instantly.'],
                        ['Download your JPGs', 'Save high-quality images with a single click.']
                    ] as $index => $step)
                    <li class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-indigo-600 text-white font-bold rounded-full">
                            {{ $index + 1 }}
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">{{ $step[0] }}</h3>
                            <p class="text-gray-600">{{ $step[1] }}</p>
                        </div>
                    </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>


    <!-- FAQs -->
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
@endsection
