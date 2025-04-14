@extends('sw.layout.master')

@section('title', 'DocLover - Signature Picker')

@section('meta_description', 'Extract signatures from documents using AI with DocLover.')
@section('meta_keywords', 'Signature picker, signature extractor, Docsumo API, extract signature, AI document tools')

@section('content')
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl font-extrabold text-gray-800">Extract Signature from Image</h1>
            <p class="text-lg text-gray-600 mt-3">Upload your document or image, and our AI will extract the signature.</p>
        </div>
    </section>

    <section class="py-10 px-4">
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow-md">
            @foreach (['Upload Document', 'Extract Signature', 'Download Signature'] as $i => $step)
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">
                        {{ $i + 1 }}
                    </div>
                    <span class="text-gray-800 font-medium">{{ $step }}</span>
                </div>
            @endforeach
        </div>

        <div id="uploadSection"
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-semibold mb-4">Drop your file here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i> Upload File
                <input type="file" id="imageInput" class="hidden" accept="image/*,application/pdf"
                    onchange="previewImage(event)" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max file size: 25MB. Supported: PNG, JPG, JPEG, PDF.</p>
        </div>

        <div id="imagePreviewContainer"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4">File Preview</h2>
            <div class="border-2 border-gray-300 rounded-lg overflow-hidden">
                <img id="imagePreview" class="w-full max-h-96 object-contain" alt="Preview" />
            </div>
        </div>

        <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="enhanceBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-green-700 hidden"
                onclick="extractSignature()">
                <i class="fas fa-pen-nib mr-2"></i> Extract Signature
            </button>
        </div>

        <div id="downloadSection"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-bold text-gray-900">Signature Extracted!</h2>
            <p class="text-gray-600 mt-2">Your extracted signature is ready for download.</p>
            <div class="flex flex-wrap justify-center mt-6 space-x-4">
                <button id="downloadBtn"
                    class="mt-4 bg-green-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-700"
                    onclick="downloadEnhancedImage()">
                    <i class="fas fa-download mr-2"></i> Download Signature
                </button>
                <button id="convertAgainBtn"
                    class="mt-4 bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800"
                    onclick="convertAgain()">
                    <i class="fas fa-sync-alt mr-2"></i> Extract Another
                </button>
            </div>
        </div>
    </section>


    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach ([['✍️', 'Signature Extraction', 'Upload an image to extract the signature cleanly.'], ['🔐', 'Secure & Confidential', 'Your data is encrypted and automatically deleted after processing.'], ['📱', 'Cross-Device Support', 'Works on desktops, tablets, and smartphones.']] as $feature)
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
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Extract Signature from Image</h2>
            <p class="text-lg text-gray-600 mb-8">Easily extract a clean digital signature from any image using our smart
                tool.</p>
            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach ([['Upload Image File', 'Drag & drop or browse an image (JPG, PNG, etc.).'], ['Extract Signature', 'Click the extract button and wait for the signature to be processed.'], ['Download Result', 'Download the isolated signature as a transparent PNG.']] as $index => $step)
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
                    <span class="text-gray-700 ml-2 font-medium">4.9 / 5 - 120,000+ users</span>
                </div>
            </div>

            @include('sw.components.tools')
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
            } else {
                document.getElementById("imagePreviewContainer").classList.add("hidden");
            }
            document.getElementById("enhanceBtn").classList.remove("hidden");
        }

        async function extractSignature() {
            const fileInput = document.getElementById('imageInput');
            const enhanceBtn = document.getElementById("enhanceBtn");

            if (fileInput.files.length === 0) {
                alert("Please upload a file first.");
                return;
            }

            const file = fileInput.files[0];
            const formData = new FormData();
            formData.append('file', file);

            enhanceBtn.disabled = true;
            enhanceBtn.innerText = "Extracting...";

            try {
                const response = await fetch('https://api.docsumo.com/api/v1/eevee/signature-extraction/', {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer YOUR_DOCSUMO_API_KEY'
                    },
                    body: formData
                });

                const data = await response.json();
                if (!data || !data.signature || !data.signature.signature_image) {
                    throw new Error("No signature found.");
                }

                enhancedImageUrl = data.signature.signature_image;

                document.getElementById("uploadSection").classList.add("hidden");
                document.getElementById("imagePreviewContainer").classList.add("hidden");
                document.getElementById("downloadSection").classList.remove("hidden");
                enhanceBtn.classList.add("hidden");

            } catch (error) {
                alert("Signature extraction failed.");
                console.error("Error:", error);
            } finally {
                enhanceBtn.disabled = false;
                enhanceBtn.innerText = "Extract Signature";
            }
        }

        function downloadEnhancedImage() {
            if (enhancedImageUrl) {
                const link = document.createElement('a');
                link.href = enhancedImageUrl;
                link.download = 'signature.png';
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
