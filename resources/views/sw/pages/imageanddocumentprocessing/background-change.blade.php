@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Background Remover')

@section('meta_description', 'Remove image background quickly and securely with CraftMyDoc.')
@section('meta_keywords', 'Background Remover, Image Background Removal, File Conversion')

@section('content')
    <!-- Hero Section -->
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Remove Image Background Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your image and remove its background in seconds with our fast and
                secure tool.</p>
        </div>
    </section>

    <!-- Upload Section -->
    <section class="py-10 px-4">
        <div id="uploadSection"
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-medium mb-4">Drop your image here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i> Upload Image
                <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max file size: 25MB. JPG, PNG supported.</p>
        </div>

        <!-- Preview -->
        <div id="imagePreviewContainer"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Image Preview</h3>
            <div class="border-2 border-gray-300 rounded-lg overflow-hidden">
                <img id="imagePreview" class="w-full max-h-96 object-contain" />
            </div>
        </div>

        <!-- Convert Button -->
        <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="removeBgBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 hover:shadow-lg cursor-pointer hidden"
                onclick="removeBackground()">
                <span class="inline-flex items-center">
                    <i class="fas fa-magic mr-2"></i> Remove Background
                </span>
            </button>
        </div>

        <div id="loader" class="fixed inset-0 bg-white bg-opacity-75 z-50 hidden flex items-center justify-center">
            <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-indigo-600 border-opacity-50"></div>
        </div>


        <!-- Download Section -->
        <div id="downloadSection"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Background Removed!</h3>
                <p class="text-gray-600 mt-2">Your image is ready for download.</p>
                <div class="flex flex-wrap justify-center mt-6 space-x-4">
                    <a id="downloadLink"
                        class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200"
                        download>
                        <i class="fas fa-download mr-2"></i> Download Image
                    </a>
                    <button
                        class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200"
                        onclick="location.reload()">
                        <i class="fas fa-sync-alt mr-2"></i> Try Another
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

        function removeBackground() {
            const fileInput = document.getElementById("imageInput");
            if (fileInput.files.length === 0) {
                alert("Please upload an image first.");
                return;
            }

            // Show loader
            document.getElementById("loader").classList.remove("hidden");

            const formData = new FormData();
            formData.append("image", fileInput.files[0]);

            fetch("{{ route('remove.background') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Server returned " + response.status);
                    }
                    return response.blob();
                })
                .then(blob => {
                    const downloadURL = URL.createObjectURL(blob);
                    const link = document.getElementById("downloadLink");
                    link.href = downloadURL;
                    link.download = "background_removed.png";

                    document.getElementById("uploadSection").classList.add("hidden");
                    document.getElementById("imagePreviewContainer").classList.add("hidden");
                    document.getElementById("convertSection").classList.add("hidden");
                    document.getElementById("downloadSection").classList.remove("hidden");
                })
                .catch(error => {
                    alert("Error removing background. Please try again.");
                    console.error(error);
                })
                .finally(() => {
                    // Hide loader
                    document.getElementById("loader").classList.add("hidden");
                });
        }
    </script>

    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach ([['🖼️', 'Transparent Background Output', 'Remove background and get a clean PNG image.'], ['🔒', 'Secure & Private', 'Your images are never stored and processed securely.'], ['⚡', 'Fast & Easy', 'Quick background removal in just seconds.']] as $feature)
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
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Remove Background from an Image</h2>
            <p class="text-lg text-gray-600 mb-8">Remove image background in 3 easy steps.</p>

            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach ([['Upload your image', 'Drag & drop or browse to select your image file.'], ['Remove Background', 'Click the remove button to process the image.'], ['Download PNG file', 'Download your image with background removed.']] as $index => $step)
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
                    <span class="text-gray-700 ml-2 font-medium">4.9 / 5 - 90,000+ users</span>
                </div>
            </div>

            @include('sw.components.tools')
        </div>
    </section>
@endsection
