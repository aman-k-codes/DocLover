@extends('Layout.master')

@section('content')
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto text-center px-4">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-3">All <span class="text-blue-600" >PDF Tools</span></h2>
            <p class="text-lg text-gray-600 mb-10">
                Explore our comprehensive set of PDF tools to enhance your workflow.
            </p>

            <div class="grid grid-cols-1 gap-10 text-[15px] text-gray-800">

                <!-- File Conversions -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mt-12 mb-5">File Conversions</h3>
                    <ul class="flex flex-wrap justify-center gap-4">
                        <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-archive text-red-500"></i>
                            <span class="font-bold">PDF to ZIP</span>
                        </li>
                        <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-word text-blue-500"></i>
                            <span class="font-bold">PDF to DOC</span>
                        </li>
                        <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-image text-yellow-500"></i>
                            <span class="font-bold">PDF to JPG</span>
                        </li>
                        <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-code text-green-600"></i>
                            <span class="font-bold">PDF to HTML</span>
                        </li>
                        <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-excel text-blue-600"></i>
                            <span class="font-bold">PDF to XL</span>
                        </li>
                        <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-image text-purple-500"></i>
                            <span class="font-bold">JPG to PNG</span>
                        </li>
                        <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-image text-indigo-500"></i>
                            <span class="font-bold">PNG to JPG</span>
                        </li>
                        <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-word text-red-500"></i>
                            <span class="font-bold">JPG to DOC</span>
                        </li>
                        <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                            <i class="fas fa-file-excel text-green-500"></i>
                            <span class="font-bold">JPG to XL</span>
                        </li>
                    </ul>
                </div>


                <div class="space-y-6">
                    <!-- Image and Document Processing -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mt-12 mb-5">Image & Document Processing</h3>
                        <ul class="flex flex-wrap justify-center gap-4">
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-crop text-orange-500"></i>
                                <span class="font-bold">Crop</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-th text-pink-500"></i>
                                <span class="font-bold">Collage</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-expand-arrows-alt text-blue-600"></i>
                                <span class="font-bold">Resize</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-id-card text-green-600"></i>
                                <span class="font-bold">Passport-size Photo</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-magic text-purple-500"></i>
                                <span class="font-bold">Photo Clarity Enhancement</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-image text-indigo-600"></i>
                                <span class="font-bold">Background Change</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-file-alt text-gray-600"></i>
                                <span class="font-bold">Resume Maker</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-compress text-red-500"></i>
                                <span class="font-bold">Photo Size Compression</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-text-height text-blue-600"></i>
                                <span class="font-bold">Image to Text Conversion</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-signature text-green-600"></i>
                                <span class="font-bold">Sign Picker</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Organize PDF -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mt-12 mb-5">Organize PDF</h3>
                        <ul class="flex flex-wrap justify-center gap-4">
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-paperclip text-orange-500"></i>
                                <span class="font-bold">Merge PDF</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-cut text-pink-500"></i>
                                <span class="font-bold">Split PDF</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-sync-alt text-yellow-600"></i>
                                <span class="font-bold">Rotate PDF</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-trash-alt text-red-600"></i>
                                <span class="font-bold">Delete PDF Pages</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Convert PDF -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mt-12 mb-5">Convert PDF</h3>
                        <ul class="flex flex-wrap justify-center gap-4">
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-file-word text-blue-600"></i>
                                <span class="font-bold">PDF to Word</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-file-excel text-green-600"></i>
                                <span class="font-bold">PDF to Excel</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-file-powerpoint text-red-500"></i>
                                <span class="font-bold">PDF to PPT</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-file-alt text-gray-600"></i>
                                <span class="font-bold">Word to PDF</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-chart-line text-blue-600"></i>
                                <span class="font-bold">Excel to PDF</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-file-powerpoint text-orange-600"></i>
                                <span class="font-bold">PPT to PDF</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Sign & Secure -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mt-12 mb-5">Sign & Secure</h3>
                        <ul class="flex flex-wrap justify-center gap-4">
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-signature text-indigo-700"></i>
                                <span class="font-bold">Sign PDF</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-lock text-red-600"></i>
                                <span class="font-bold">Protect PDF</span>
                            </li>
                            <li class="cursor-pointer p-4 bg-gray-100 rounded-lg shadow-md flex items-center space-x-2">
                                <i class="fas fa-lock-open text-green-600"></i>
                                <span class="font-bold">Unlock PDF</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
