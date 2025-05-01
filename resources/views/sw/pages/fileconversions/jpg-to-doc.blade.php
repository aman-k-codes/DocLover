@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Image to Word')

@section('meta_description', 'Convert any image to a Word (.docx) file easily with CraftMyDoc.')
@section('meta_keywords', 'Image to Word, JPG to Word, PNG to Word, Image converter, Word file')

@section('content')
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Convert Image to Word Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your image and download a .docx file with your image embedded.</p>
        </div>
    </section>

    <section class="py-10 px-4">
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">1
                </div>
                <span class="text-gray-800 font-semibold">Upload Image</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">2
                </div>
                <span class="text-gray-800 font-semibold">Convert to Word</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">3
                </div>
                <span class="text-gray-800 font-semibold">Download Word File</span>
            </div>
        </div>

        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md"
            id="uploadSection">
            <p class="text-lg font-medium mb-4">Drop your image file here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i>
                Upload Image
                <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max file size: 25MB. Supports PNG, JPG, JPEG, BMP.</p>
        </div>

        <div id="imagePreviewContainer"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Image Preview</h3>
            <div class="border-2 border-gray-300 rounded-lg overflow-hidden">
                <img id="imagePreview" class="w-full max-h-96 object-contain" />
            </div>
        </div>

        <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="convertBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-green-700 hidden"
                onclick="convertImageToWord()">
                <i class="fas fa-file-word mr-2"></i>
                Convert to Word
            </button>
        </div>

        <div id="downloadSection"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <h3 class="text-xl font-bold text-gray-900">Conversion Successful!</h3>
            <p class="text-gray-600 mt-2">Your Word (.docx) file is ready for download.</p>
            <div class="flex flex-wrap justify-center mt-6 space-x-4">
                <button id="downloadBtn"
                    class="mt-4 bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700"
                    onclick="downloadWord()">
                    <i class="fas fa-download mr-2"></i>
                    Download Word
                </button>
                <button id="convertAgainBtn"
                    class="mt-4 bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800"
                    onclick="convertAgain()">
                    <i class="fas fa-sync-alt mr-2"></i>
                    Convert Again
                </button>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach ([['📝', 'Editable Word Output', 'Extract and convert image content to fully editable Word documents.'], ['🔒', 'Privacy Guaranteed', 'Your images are never stored and processed securely.'], ['⚡', 'Fast & Accurate OCR', 'Powered by advanced OCR for fast and precise text extraction.']] as $feature)
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
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Convert Image to Word</h2>
            <p class="text-lg text-gray-600 mb-8">Follow these simple steps to turn an image into a fully editable Word
                (.doc) file.</p>

            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach ([['Upload your image file', 'Select a JPG, PNG, or BMP file to begin.'], ['Start OCR Conversion', 'Click the convert button to extract text using OCR.'], ['Download Word File', 'Save your converted .doc file with editable content.']] as $index => $step)
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


    <script src="https://cdn.jsdelivr.net/npm/tesseract.js@5.0.3/dist/tesseract.min.js"></script>
    <script>
        let docBlobUrl = null;

        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const fileURL = URL.createObjectURL(file);
                document.getElementById("imagePreview").src = fileURL;
                document.getElementById("imagePreviewContainer").classList.remove("hidden");
                document.getElementById("convertBtn").classList.remove("hidden");
            }
        }

        function convertImageToWord() {
            const fileInput = document.getElementById('imageInput');
            if (fileInput.files.length === 0) {
                alert("Please upload an image file first.");
                return;
            }

            const formData = new FormData();
            formData.append('image', fileInput.files[0]);

            // Show loading
            document.getElementById("convertBtn").innerText = "Processing...";
            document.getElementById("convertBtn").disabled = true;

            // Using fetch to send the request
            fetch("{{ route('convert.imageToWord') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                    } else {
                        // console.log(localUrl+data.file_url);

                        var downloadUrl = localUrl+data.file_url;
                        docBlobUrl = downloadUrl;

                        // Show download section
                        document.getElementById("downloadSection").classList.remove("hidden");
                        document.getElementById("uploadSection").classList.add("hidden");
                        document.getElementById("imagePreviewContainer").classList.add("hidden");
                        document.getElementById("convertBtn").classList.add("hidden");
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("There was an error processing your request. Please try again.");
                })
                .finally(() => {
                    // Restore the convert button
                    document.getElementById("convertBtn").innerText = "Convert to Word";
                    document.getElementById("convertBtn").disabled = false;
                });
        }


        function downloadWord() {
            if (docBlobUrl) {
                const fileInput = document.getElementById("imageInput");
                let fileName = "image-to-word";
                if (fileInput.files.length > 0) {
                    fileName = fileInput.files[0].name.replace(/\.[^/.]+$/, "").replace(/\s+/g, "_");
                }

                const link = document.createElement('a');
                link.href = docBlobUrl;
                link.download = `${fileName}.docx`;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                URL.revokeObjectURL(docBlobUrl);
            }
        }

        function convertAgain() {
            document.getElementById("downloadSection").classList.add("hidden"); // Hide download section
            document.getElementById("uploadSection").classList.remove("hidden"); // Show upload section
            document.getElementById("imagePreviewContainer").classList.add("hidden"); // Hide preview section
            document.getElementById("convertBtn").classList.add("hidden"); // Hide convert button

            // Reset file input
            const fileInput = document.getElementById("imageInput");
            fileInput.value = "";
        }
    </script>

@endsection
