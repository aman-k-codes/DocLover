@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Image Quality Enhancer')
@section('meta_description', 'Enhance image quality instantly with CraftMyDoc.')
@section('meta_keywords', 'Image Enhancer, Improve Image Quality, HD Image Converter')

@section('content')
    <!-- Hero Section -->
    <section class="pt-16 px-4 bg-gray-50 text-center">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-4xl font-extrabold text-gray-800 leading-tight">AI-Powered Image Quality Enhancer</h1>
            <p class="text-lg text-gray-600 mt-3">Upload your image and instantly improve clarity, sharpness, and resolution. 100% free and secure.</p>
        </div>
    </section>

    <!-- Upload Section -->
    <section class="py-12 px-4">
        <div id="uploadSection" class="border-2 border-dashed border-gray-300 bg-white rounded-2xl p-10 max-w-3xl mx-auto text-center shadow-sm">
            <p class="text-lg font-medium mb-4">Drop your image here <span class="text-gray-500">or</span></p>
            <label class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i> Choose Image
                <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)" />
            </label>
            <p class="text-sm text-gray-500 mt-4">JPG, PNG | Max size: 25MB</p>
        </div>

        <!-- Preview -->
        <div id="imagePreviewContainer" class="hidden mt-8 max-w-3xl mx-auto bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Image Preview</h3>
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <img id="imagePreview" alt="Image Preview" class="w-full max-h-96 object-contain" />
            </div>
        </div>

        <!-- Enhance Button -->
        <div id="convertSection" class="mt-8 text-center">
            <button id="removeBgBtn"
                class="hidden bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 relative"
                onclick="enhanceImage()">
                <span class="inline-flex items-center justify-center">
                    <i class="fas fa-magic mr-2"></i> <span>Enhance Image</span>
                    <span id="loadingSpinner" class="hidden ml-2 animate-spin h-5 w-5 border-2 border-white border-t-transparent rounded-full"></span>
                </span>
            </button>
        </div>

        <!-- Download Section -->
        <div id="downloadSection" class="hidden mt-10 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Success!</h3>
                <p class="text-gray-600 mt-2">Your enhanced image is ready.</p>
                <div class="flex flex-wrap justify-center mt-6 space-x-4">
                    <a id="downloadLink" class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition" download>
                        <i class="fas fa-download mr-2"></i> Download
                    </a>
                    <button class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition"
                        onclick="location.reload()">
                        <i class="fas fa-sync-alt mr-2"></i> New Image
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const fileURL = URL.createObjectURL(file);
                document.getElementById("imagePreview").src = fileURL;
                document.getElementById("imagePreviewContainer").classList.remove("hidden");
                document.getElementById("removeBgBtn").classList.remove("hidden");
            }
        }

        function enhanceImage() {
            const fileInput = document.getElementById("imageInput");
            if (!fileInput.files.length) {
                alert("Please upload an image first.");
                return;
            }

            document.getElementById("loadingSpinner").classList.remove("hidden");

            const formData = new FormData();
            formData.append("image", fileInput.files[0]);

            fetch("{{ route('enhance.image') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: formData
            })
            .then(response => response.blob())
            .then(blob => {
                const downloadURL = URL.createObjectURL(blob);
                document.getElementById("downloadLink").href = downloadURL;

                document.getElementById("uploadSection").classList.add("hidden");
                document.getElementById("imagePreviewContainer").classList.add("hidden");
                document.getElementById("convertSection").classList.add("hidden");
                document.getElementById("downloadSection").classList.remove("hidden");
            })
            .catch(error => {
                alert("An error occurred. Please try again.");
                console.error(error);
            })
            .finally(() => {
                document.getElementById("loadingSpinner").classList.add("hidden");
            });
        }
    </script>

    <!-- Features -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach ([['🖼️', 'HD Output', 'Get crystal-clear images with better resolution.'], ['🔒', 'Private & Secure', 'Files are encrypted and never stored.'], ['⚡', 'Quick Enhancement', 'Fast image processing in seconds.']] as $feature)
                    <div class="p-6 bg-white rounded-lg shadow-sm">
                        <div class="text-4xl">{{ $feature[0] }}</div>
                        <h3 class="text-lg font-bold text-gray-900 mt-4">{{ $feature[1] }}</h3>
                        <p class="text-gray-600 mt-2">{{ $feature[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How-To Section -->
    <section class="bg-white py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Enhance Image Quality</h2>
            <p class="text-lg text-gray-600 mb-10">Just three simple steps for stunning results.</p>

            <ol class="text-left max-w-2xl mx-auto space-y-6">
                @foreach ([['Upload Image', 'Drag & drop or browse to select your file.'], ['Enhance Image', 'Click "Enhance Image" to start processing.'], ['Download File', 'Save your improved HD image.']] as $index => $step)
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
    </section>

    <!-- Rating Section -->
    <section class="py-12 bg-gray-100">
        <div class="bg-white p-6 md:p-12 text-center">
            <h2 class="text-xl font-semibold text-gray-800">Loved by Our Users</h2>
            <div class="flex justify-center mt-2 space-x-1 text-yellow-500">
                @for ($i = 0; $i < 5; $i++)
                    <i class="fas fa-star"></i>
                @endfor
                <span class="text-gray-700 ml-2 font-medium">4.9 / 5 (100,000+ users)</span>
            </div>

            @include('sw.components.tools')
        </div>
    </section>
@endsection
