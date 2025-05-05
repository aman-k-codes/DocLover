@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Image Compressor')
@section('meta_description', 'Compress your images quickly and easily with CraftMyDoc.')
@section('meta_keywords', 'Image Compressor, Compress Image, Reduce Image Size')

@section('content')
    <!-- Hero Section -->
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Compress Your Images Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your image, reduce the size without losing quality, and download it
                instantly!</p>
        </div>
    </section>

    <!-- Upload Section -->
    <section class="py-10 px-4">
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
            @foreach (['Upload Image', 'Compress the Image', 'Download Compressed Image'] as $i => $step)
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">
                        {{ $i + 1 }}
                    </div>
                    <span class="text-gray-800 font-semibold">{{ $step }}</span>
                </div>
            @endforeach
        </div>

        <div id="uploadSection"
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-medium mb-4">Drop your image here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i>
                Upload Image
                <input type="file" id="imageInput" class="hidden" accept="image/*" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Supported formats: JPG, PNG. Max size: 10MB.</p>
        </div>

        <div id="compressorContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Compress Image</h3>

            <div class="mb-4 text-left">
                <label for="targetSize" class="font-semibold mr-2">Desired File Size (in KB):</label>
                <input type="number" id="targetSize" class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                    placeholder="Enter size e.g. 300 (for 300KB)">
                <p class="text-sm text-gray-600 mt-1">We’ll compress the image to match this size as closely as possible.
                </p>
            </div>


            <div class="overflow-hidden border rounded-lg mb-4">
                <img id="imagePreview" class="mx-auto max-w-full" />
            </div>

            <button id="compressButton"
                class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-all mb-4">
                Compress Image
            </button>

            <div id="actionButtons" class="hidden space-x-4">
                <button id="downloadButton"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-all">
                    Download Compressed Image
                </button>
                <button id="convertAgainButton"
                    class="bg-gray-600 hover:bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-all">
                    Convert Again
                </button>
            </div>
        </div>

        <!-- Loader (hidden by default) -->
        <div id="loaderSection" class="hidden fixed inset-0 bg-white bg-opacity-75 flex items-center justify-center z-50">
            <div class="text-center">
                <div class="w-16 h-16 border-4 border-blue-500 border-dashed rounded-full animate-spin mx-auto mb-4"></div>
                <p class="text-gray-700 font-semibold text-lg">Compressing you photo size, please wait...</p>
            </div>
        </div>

    </section>

    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach([['⚡', 'Fast & Simple', 'Upload your image and compress it instantly without losing quality.'], ['🔒', 'Highly Secure', 'Your images are processed securely and never stored.'], ['💻', 'Cross-Device Access', 'Works perfectly on desktop, tablet, and mobile.']] as $feature)
                    <div class="p-6 rounded-lg">
                        <div class="text-4xl">{{ $feature[0] }}</div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4">{{ $feature[1] }}</h3>
                        <p class="text-gray-600 mt-2">{{ $feature[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How to Compress Your Image -->
    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Compress Your Image</h2>
            <p class="text-lg text-gray-600 mb-8">Follow these simple steps to compress your image quickly and efficiently.
            </p>
            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach([['Upload your image', 'Drag & drop or browse your device to upload an image.'], ['Select compression level', 'Choose the compression level (high, medium, low).'], ['Download your image', 'Click the download button to get your compressed image.']] as $index => $step)
                        <li class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-indigo-600 text-white font-bold rounded-full">
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
                    <span class="text-gray-700 ml-2 font-medium">4.8 / 5 - 150,000+ users</span>
                </div>
            </div>

            @include('sw.components.tools')
        </div>
    </section>


    <!-- Custom JS -->
    <script>
        const imageInput = document.getElementById("imageInput");
        const imagePreview = document.getElementById("imagePreview");
        const compressorContainer = document.getElementById("compressorContainer");
        const compressButton = document.getElementById("compressButton");
        const downloadButton = document.getElementById("downloadButton");
        const convertAgainButton = document.getElementById("convertAgainButton");
        const actionButtons = document.getElementById("actionButtons");

        let originalImage = null;
        let compressedBlobUrl = null;

        imageInput.addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (!file || !file.type.startsWith("image/")) return;

            const reader = new FileReader();
            reader.onload = function (e) {
                originalImage = e.target.result;
                imagePreview.src = originalImage;
                compressorContainer.classList.remove("hidden");
            };
            reader.readAsDataURL(file);
        });

        compressButton.addEventListener("click", function () {
            if (!originalImage) return;

            document.getElementById("loaderSection").classList.remove("hidden");

            const targetSizeInput = document.getElementById("targetSize");
            const targetSizeKB = parseInt(targetSizeInput.value, 10);
            if (isNaN(targetSizeKB) || targetSizeKB <= 0) {
                alert("Please enter a valid target file size in KB.");
                return;
            }

            const img = new Image();
            img.src = originalImage;

            img.onload = function () {
                const canvas = document.createElement("canvas");
                canvas.width = img.width;
                canvas.height = img.height;

                const ctx = canvas.getContext("2d");
                ctx.drawImage(img, 0, 0);

                let quality = 0.9;

                const compressLoop = () => {
                    canvas.toBlob(function (blob) {
                        const sizeKB = blob.size / 1024;

                        if (sizeKB <= targetSizeKB || quality <= 0.1) {
                            if (compressedBlobUrl) {
                                URL.revokeObjectURL(compressedBlobUrl); // revoke previous URL if any
                            }
                            compressedBlobUrl = URL.createObjectURL(blob);

                            // Hide Compress button, show Download & Convert Again buttons
                            compressButton.classList.add("hidden");
                            actionButtons.classList.remove("hidden");

                        } else {
                            quality -= 0.05;
                            compressLoop();
                        }

                        setTimeout(() => {
                            document.getElementById("loaderSection").classList.add("hidden"); // Hide loader
                            document.getElementById("downloadSection").scrollIntoView({ behavior: "smooth" });
                            document.getElementById("downloadSection").classList.remove("hidden"); // Show download
                        }, 2000); // Smooth scroll to download section


                    }, "image/jpeg", quality);
                };

                compressLoop();
            };
        });

        downloadButton.addEventListener("click", function () {
            if (!compressedBlobUrl) return;

            const link = document.createElement("a");
            link.href = compressedBlobUrl;
            link.download = "compressed_image.jpg";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });

        convertAgainButton.addEventListener("click", function () {
            // Reset everything
            document.getElementById("uploadSection").classList.remove("hidden");
            compressorContainer.classList.add("hidden");
            actionButtons.classList.add("hidden");
            compressButton.classList.remove("hidden");

            imageInput.value = '';
            imagePreview.src = '';
            originalImage = null;

            if (compressedBlobUrl) {
                URL.revokeObjectURL(compressedBlobUrl);
                compressedBlobUrl = null;
            }
        });
    </script>

@endsection
