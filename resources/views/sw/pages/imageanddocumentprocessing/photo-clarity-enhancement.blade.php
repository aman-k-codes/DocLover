@extends('sw.layout.master')

@section('title', 'DocLover - Enhance Image Clarity')

@section('meta_description', 'Enhance image quality and sharpness instantly with DocLover. Free, fast, and easy to use.')
@section('meta_keywords', 'Image enhancer, enhance photo, AI photo enhancer, image clarity, upscale image')

@section('content')
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl font-extrabold text-gray-800">Enhance Image Quality</h1>
            <p class="text-lg text-gray-600 mt-3">Upload your image to enhance its clarity using AI-powered upscaling.</p>
        </div>
    </section>

    <section class="py-10 px-4">
        {{-- Steps Bar --}}
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow-md">
            @foreach (['Upload Image', 'Enhance Image', 'Download Image'] as $i => $step)
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">
                        {{ $i + 1 }}
                    </div>
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

        {{-- Enhance Button --}}
        <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="enhanceBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-green-700 hidden"
                onclick="enhanceImage()">
                <i class="fas fa-magic mr-2"></i> Enhance Image
            </button>
        </div>

        {{-- Download Section --}}
        <div id="downloadSection"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-bold text-gray-900">Image Enhanced!</h2>
            <p class="text-gray-600 mt-2">Your enhanced image is ready for download.</p>
            <div class="flex flex-wrap justify-center mt-6 space-x-4">
                <button id="downloadBtn"
                    class="mt-4 bg-green-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-700"
                    onclick="downloadEnhancedImage()">
                    <i class="fas fa-download mr-2"></i> Download Image
                </button>
                <button id="convertAgainBtn"
                    class="mt-4 bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800"
                    onclick="convertAgain()">
                    <i class="fas fa-sync-alt mr-2"></i> Enhance Another
                </button>
            </div>
        </div>
    </section>

    <script>
        let enhancedImageUrl = null;

        function previewImage(event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith("image/")) {
                const fileURL = URL.createObjectURL(file);
                document.getElementById("imagePreview").src = fileURL;
                document.getElementById("imagePreviewContainer").classList.remove("hidden");
                document.getElementById("enhanceBtn").classList.remove("hidden");
            } else {
                alert("Please upload a valid image file (PNG, JPG, JPEG).");
                event.target.value = '';
            }
        }

        async function enhanceImage() {
            const fileInput = document.getElementById('imageInput');
            const enhanceBtn = document.getElementById("enhanceBtn");

            if (fileInput.files.length === 0) {
                alert("Please upload an image file first.");
                return;
            }

            const file = fileInput.files[0];
            const formData = new FormData();
            formData.append('file', file);

            enhanceBtn.disabled = true;
            enhanceBtn.innerText = "Enhancing...";

            try {
                // Convert file to base64
                const base64Image = await toBase64(file);

                // Prepare replicate API payload
                const response = await fetch('https://api.replicate.com/v1/predictions', {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Token YOUR_REPLICATE_API_TOKEN',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        version: "9280c2c835527fdfb1d1bfaebd4775ff2a365252e02f9c052b1c2a26084d360e", // GFPGAN version
                        input: {
                            img: base64Image
                        }
                    })
                });

                const prediction = await response.json();

                // Poll until image is ready
                let finalOutput = null;
                while (!finalOutput) {
                    const pollResponse = await fetch(`https://api.replicate.com/v1/predictions/${prediction.id}`, {
                        headers: {
                            'Authorization': 'Token YOUR_REPLICATE_API_TOKEN'
                        }
                    });
                    const pollData = await pollResponse.json();
                    if (pollData.status === "succeeded") {
                        finalOutput = pollData.output;
                    } else if (pollData.status === "failed") {
                        throw new Error("Enhancement failed.");
                    }
                    await new Promise(res => setTimeout(res, 1000)); // wait 1 second
                }

                enhancedImageUrl = finalOutput;

                document.getElementById("uploadSection").classList.add("hidden");
                document.getElementById("imagePreviewContainer").classList.add("hidden");
                document.getElementById("downloadSection").classList.remove("hidden");
                enhanceBtn.classList.add("hidden");

            } catch (error) {
                alert("Image enhancement failed. Please try again.");
                console.error("Error:", error);
            } finally {
                enhanceBtn.disabled = false;
                enhanceBtn.innerText = "Enhance Image";
            }
        }

        function toBase64(file) {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => resolve(reader.result);
                reader.onerror = error => reject(error);
            });
        }

        function downloadEnhancedImage() {
            if (enhancedImageUrl) {
                const link = document.createElement('a');
                link.href = enhancedImageUrl;
                link.download = 'enhanced_image.jpg';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            } else {
                alert("No image available to download.");
            }
        }

        function convertAgain() {
            enhancedImageUrl = null;
            location.reload();
        }
    </script>

@endsection
