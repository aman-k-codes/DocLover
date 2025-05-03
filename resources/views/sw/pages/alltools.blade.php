@extends('sw.layout.master')
@section('title', 'CraftMyDoc - All Tools')
@section('content')
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto text-center px-4">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-3">All <span class="text-blue-600">PDF Tools</span></h2>
            <p class="text-lg text-gray-600 mb-10">
                Explore our comprehensive set of PDF tools to enhance your workflow.
            </p>

            <div class="grid grid-cols-1 gap-10 text-[15px] text-gray-800">

                <!-- File Conversions -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mt-12 mb-5">PDF Conversions</h3>
                    <ul class="flex flex-wrap justify-center gap-4">
                        <li class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-archive text-red-500"></i>
                            <a href="{{ route('pdf-to-zip') }}">
                                <span class="font-bold">PDF to ZIP</span>
                            </a>
                        </li>
                        <li class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-word text-blue-500"></i>
                            <a href="{{ route('pdf-to-doc') }}">
                                <span class="font-bold">PDF to DOC</span>
                            </a>
                        </li>
                        <li class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-image text-yellow-500"></i>
                            <a href="{{ route('pdf-to-jpg') }}">
                                <span class="font-bold">PDF to JPG</span>
                            </a>
                        </li>
                        <li class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-code text-green-600"></i>
                            <a href="{{ route('pdf-to-html') }}">
                                <span class="font-bold">PDF to HTML</span>
                            </a>
                        </li>
                        <li class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-excel text-blue-600"></i>
                            <a href="{{ route('pdf-to-xl') }}">
                                <span class="font-bold">PDF to XL</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mt-12 mb-5">Image Conversions</h3>
                    <ul class="flex flex-wrap justify-center gap-4">
                        <li class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-image text-purple-500"></i>
                            <a href="{{ route('jpg-to-png') }}">
                                <span class="font-bold">JPG to PNG</span>
                            </a>
                        </li>
                        <li class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-image text-indigo-500"></i>
                            <a href="{{ route('png-to-jpg') }}">
                                <span class="font-bold">PNG to JPG</span>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="space-y-6">
                    <!-- Image and Document Processing -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mt-12 mb-5">Image & Document Processing</h3>
                        <ul class="flex flex-wrap justify-center gap-4">
                            <li
                                class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-crop text-orange-500"></i>
                                <a href="{{ route('crop') }}">
                                    <span class="font-bold">Crop</span>
                                </a>
                            </li>

                            <li
                                class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-magic text-purple-500"></i>
                                <a href="{{ route('photo-clarity-enhancement') }}">
                                    <span class="font-bold">Photo Clarity Enhancement</span>
                                </a>
                            </li>
                            <li
                                class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-image text-indigo-600"></i>
                                <a href="{{ route('background-change') }}">
                                    <span class="font-bold">Background Remover</span>
                                </a>
                            </li>
                            <li
                                class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-file-alt text-gray-600"></i>
                                <a href="{{ route('resume.index') }}">
                                    <span class="font-bold">Resume Maker</span>
                                </a>
                            </li>
                            <li
                                class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-compress text-red-500"></i>
                                <a href="{{ route('photo-size-compression') }}">
                                    <span class="font-bold">Photo Size Compression</span>
                                </a>
                            </li>
                            <li
                                class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-text-height text-blue-600"></i>
                                <a href="{{ route('image-to-text-conversion') }}">
                                    <span class="font-bold">Image to Text Conversion</span>
                                </a>
                            </li>
                            <li
                                class="cursor-pointer py-2 px-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-signature text-green-600"></i>
                                <a href="{{ route('sign-picker') }}">
                                    <span class="font-bold">Sign Picker</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
