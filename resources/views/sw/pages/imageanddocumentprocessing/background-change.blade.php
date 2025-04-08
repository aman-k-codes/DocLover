@extends('sw.layout.master')

@section('title', 'DocLover - Remove Image Background')

@section('meta_description', 'Remove the background from any image instantly with DocLover. Free, fast, and easy to use.')
@section('meta_keywords', 'Image background remover, remove background, transparent background, JPG PNG background remover')

@section('content')
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl font-extrabold text-gray-800">Remove Background from Image</h1>
            <p class="text-lg text-gray-600 mt-3">Upload your image and get a transparent version instantly. Free & fast
                background remover tool.</p>
        </div>
    </section>

    <section class="py-10 px-4">
        {{-- Steps Bar --}}
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow-md">
            @foreach (['Upload Image', 'Remove Background', 'Download Image'] as $i => $step)
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">
                        {{ $i + 1 }}</div>
                    <span class="text-gray-800 font-medium">{{ $step }}</span>
                </div>
            @endforeach
        </div>

        {{-- Upload Section --}}
        <div id="uploadSection"
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-semibold mb-4">Drop your image here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i> Upload Image
                <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max file size: 25MB. Supported: PNG, JPG, JPEG.</p>
        </div>

        {{-- Preview Section --}}
        <div id="imagePreviewContainer"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Image Preview</h2>
            <div class="border-2 border-gray-300 rounded-lg overflow-hidden">
                <img id="imagePreview" class="w-full max-h-96 object-contain" alt="Preview" />
            </div>
        </div>

        {{-- Convert Button --}}
        <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="removeBgBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-green-700 hidden"
                onclick="removeBackground()">
                <i class="fas fa-magic mr-2"></i> Remove Background
            </button>
        </div>

        {{-- Download Section --}}
        <div id="downloadSection"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-bold text-gray-900">Background Removed!</h2>
            <p class="text-gray-600 mt-2">Your transparent image is ready for download.</p>
            <div class="flex flex-wrap justify-center mt-6 space-x-4">
                <button id="downloadBtn"
                    class="mt-4 bg-green-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-700"
                    onclick="downloadTransparentImage()">
                    <i class="fas fa-download mr-2"></i> Download Image
                </button>
                <button id="convertAgainBtn"
                    class="mt-4 bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800"
                    onclick="convertAgain()">
                    <i class="fas fa-sync-alt mr-2"></i> Remove Another
                </button>
            </div>
        </div>
    </section>

    <script>
        let transparentImageUrl = null;

        function previewImage(event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith("image/")) {
                const fileURL = URL.createObjectURL(file);
                document.getElementById("imagePreview").src = fileURL;
                document.getElementById("imagePreviewContainer").classList.remove("hidden");
                document.getElementById("removeBgBtn").classList.remove("hidden");
            } else {
                alert("Please upload a valid image file (PNG, JPG, JPEG).");
                event.target.value = '';
            }
        }

        async function removeBackground() {
            const fileInput = document.getElementById('imageInput');
            const removeBtn = document.getElementById("removeBgBtn");

            if (fileInput.files.length === 0) {
                alert("Please upload an image file first.");
                return;
            }

            const file = fileInput.files[0];
            const formData = new FormData();
            formData.append('image', file);

            removeBtn.disabled = true;
            removeBtn.innerText = "Processing...";

            try {
                const response = await fetch("{{ route('background.remove') }}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                });

                if (!response.ok) throw new Error("Failed to process image.");

                const blob = await response.blob();
                transparentImageUrl = URL.createObjectURL(blob);

                document.getElementById("uploadSection").classList.add("hidden");
                document.getElementById("imagePreviewContainer").classList.add("hidden");
                document.getElementById("downloadSection").classList.remove("hidden");
                removeBtn.classList.add("hidden");

            } catch (error) {
                alert("Background removal failed. Please try again.");
                console.error("Error:", error);
            } finally {
                removeBtn.disabled = false;
                removeBtn.innerText = "Remove Background";
            }
        }

        function downloadTransparentImage() {
            if (transparentImageUrl) {
                const link = document.createElement('a');
                link.href = transparentImageUrl;
                link.download = 'transparent_image.png';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                URL.revokeObjectURL(transparentImageUrl);
            } else {
                alert("No image available to download.");
            }
        }

        function convertAgain() {
            transparentImageUrl = null;
            location.reload();
        }
    </script>
@endsection

