@extends('Layout.master')

@section('title', 'DocLover - Image Compressor')
@section('meta_description', 'Compress your images quickly and easily with DocLover.')
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
                        {{ $i + 1 }}</div>
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
                class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-all">Compress
                & Download</button>
        </div>
    </section>

    <!-- Footer -->
    <section class="py-12 bg-gray-100">
        <div class="bg-white p-6 md:p-12">
            <div class="text-center mb-8">
                <h2 class="text-xl font-semibold text-gray-800">Rate this tool</h2>
                <div class="flex items-center justify-center mt-2 space-x-1 text-yellow-500">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="text-gray-700 ml-2 font-medium">4.9 / 5 - 90,000+ users</span>
                </div>
            </div>
            @include('Components.tools')
        </div>
    </section>

    <!-- Custom JS -->
    <script>
        const imageInput = document.getElementById("imageInput");
        const imagePreview = document.getElementById("imagePreview");
        const compressorContainer = document.getElementById("compressorContainer");
        const qualityRange = document.getElementById("qualityRange");
        const compressButton = document.getElementById("compressButton");

        let originalImage = null;

        imageInput.addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (!file || !file.type.startsWith("image/")) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                compressorContainer.classList.remove("hidden");
                originalImage = e.target.result;
            };
            reader.readAsDataURL(file);
        });

        compressButton.addEventListener("click", function() {
            if (!originalImage) return;

            const img = new Image();
            img.src = originalImage;

            img.onload = function() {
                const canvas = document.createElement("canvas");
                canvas.width = img.width;
                canvas.height = img.height;

                const ctx = canvas.getContext("2d");
                ctx.drawImage(img, 0, 0);

                const targetSizeInput = document.getElementById("targetSize");

                compressButton.addEventListener("click", function() {
                    if (!originalImage) return;

                    const targetSizeKB = parseInt(targetSizeInput.value, 10);
                    if (isNaN(targetSizeKB) || targetSizeKB <= 0) {
                        alert("Please enter a valid target file size in KB.");
                        return;
                    }

                    const img = new Image();
                    img.src = originalImage;

                    img.onload = function() {
                        const canvas = document.createElement("canvas");
                        canvas.width = img.width;
                        canvas.height = img.height;

                        const ctx = canvas.getContext("2d");
                        ctx.drawImage(img, 0, 0);

                        let quality = 0.9;

                        const compressLoop = () => {
                            canvas.toBlob(function(blob) {
                                const sizeKB = blob.size / 1024;

                                if (sizeKB <= targetSizeKB || quality <= 0.1) {
                                    const link = document.createElement("a");
                                    link.href = URL.createObjectURL(blob);
                                    link.download = "compressed_image.jpg";
                                    document.body.appendChild(link);
                                    link.click();
                                    document.body.removeChild(link);
                                    URL.revokeObjectURL(link.href);
                                } else {
                                    quality -= 0.05;
                                    compressLoop();
                                }
                            }, "image/jpeg", quality);
                        };

                        compressLoop();
                    };
                });

            };
        });
    </script>
@endsection
