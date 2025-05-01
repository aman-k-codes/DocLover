@extends('sw.layout.master')

@section('title', 'CraftMyDoc - PNG to JPG')

@section('meta_description', 'Convert PNG to JPG images quickly and securely with CraftMyDoc.')
@section('meta_keywords', 'PNG to JPG, Image Converter, File Conversion, JPG Converter')

@section('content')
    <!-- Hero Section -->
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Convert PNG to JPG Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your PNG image and get a high-quality JPG file in seconds with our
                fast and secure converter.</p>
        </div>
    </section>


    <!-- Step indicator -->
    <section class="py-10 px-4">
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">1</div>
                <span class="text-gray-800 font-semibold">Upload PNG</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">2
                </div>
                <span class="text-gray-800 font-semibold">Convert to JPG</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">3
                </div>
                <span class="text-gray-800 font-semibold">Download JPG File</span>
            </div>
        </div>

        <!-- Upload Area -->
        <div id="uploadSection"
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-medium mb-4">Drop your PNG file here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i>
                Upload PNG
                <input type="file" id="pngInput" class="hidden" accept="image/png" onchange="previewPNG(event)" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max file size: 25MB. Only PNG files supported.</p>
        </div>

        <!-- PNG Preview -->
        <div id="pngPreviewContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">PNG Preview</h3>
            <div class="border-2 border-gray-300 rounded-lg overflow-hidden">
                <img id="pngPreview" class="w-full max-h-96 object-contain" />
            </div>
        </div>

        <!-- Convert Button -->
        <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="convertBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 hover:shadow-lg cursor-pointer hidden"
                onclick="convertPNG()">
                <span class="inline-flex items-center">
                    <i class="fas fa-file-image mr-2"></i>
                    Convert to JPG
                </span>
            </button>
        </div>

        <!-- Download Section -->
        <div id="downloadSection"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Conversion Successful!</h3>
                <p class="text-gray-600 mt-2">Your JPG file is ready for download.</p>
                <div class="flex flex-wrap justify-center mt-6 space-x-4">
                    <button id="downloadBtn"
                        class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200"
                        onclick="downloadJPG()">
                        <i class="fas fa-download mr-2"></i>
                        Download JPG
                    </button>
                    <button id="convertAgainBtn"
                        class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200"
                        onclick="convertAgain()">
                        <i class="fas fa-sync-alt mr-2"></i>
                        Convert Again
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach ([['🖼️', 'High Quality JPG Output', 'Preserve image quality during conversion.'], ['🔒', 'Privacy Guaranteed', 'Your images are encrypted and never stored.'], ['📱', 'Platform Independent', 'Works on desktop, tablet, or mobile.']] as $feature)
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
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Convert PNG to JPG</h2>
            <p class="text-lg text-gray-600 mb-8">Just a few simple steps to get your JPG file from PNG.</p>

            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach ([['Upload your PNG file', 'Drag & drop or browse to select your image.'], ['Start conversion', 'Click the convert button to process the image.'], ['Download JPG file', 'Download the JPG version of your image.']] as $index => $step)
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

    <script>
        let jpgBlobUrl = null;

        function previewPNG(event) {
            const file = event.target.files[0];
            if (file && file.type === "image/png") {
                const fileURL = URL.createObjectURL(file);
                document.getElementById("pngPreview").src = fileURL;
                document.getElementById("pngPreviewContainer").classList.remove("hidden");
                document.getElementById("convertBtn").classList.remove("hidden");
            }
        }

        function convertPNG() {
            const fileInput = document.getElementById('pngInput');
            if (fileInput.files.length === 0) {
                alert("Please upload a PNG file first.");
                return;
            }

            const file = fileInput.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = new Image();
                img.onload = function() {
                    const canvas = document.createElement('canvas');
                    canvas.width = img.width;
                    canvas.height = img.height;
                    const ctx = canvas.getContext('2d');
                    ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

                    canvas.toBlob(function(blob) {
                        jpgBlobUrl = URL.createObjectURL(blob);
                        document.getElementById("downloadSection").classList.remove("hidden");
                    }, 'image/jpeg', 0.92);
                };
                img.src = e.target.result;
            };

            reader.readAsDataURL(file);

            document.getElementById("uploadSection").classList.add("hidden");
            document.getElementById("pngPreviewContainer").classList.add("hidden");
            document.getElementById("convertBtn").classList.add("hidden");
        }

        function downloadJPG() {
            if (jpgBlobUrl) {
                const fileInput = document.getElementById("pngInput");
                if (fileInput.files.length > 0) {
                    let fileName = fileInput.files[0].name.replace(/\.[^/.]+$/, "");
                    fileName = fileName.replace(/\s+/g, "_");
                    const finalFileName = fileName + "_converted.jpg";

                    const downloadLink = document.createElement("a");
                    downloadLink.href = jpgBlobUrl;
                    downloadLink.download = finalFileName;
                    document.body.appendChild(downloadLink);
                    downloadLink.click();
                    document.body.removeChild(downloadLink);
                    URL.revokeObjectURL(jpgBlobUrl);
                    jpgBlobUrl = null;
                }
            }
        }

        function convertAgain() {
            document.getElementById("downloadSection").classList.add("hidden");
            document.getElementById("uploadSection").classList.remove("hidden");
            document.getElementById("pngPreviewContainer").classList.add("hidden");
            document.getElementById("convertBtn").classList.add("hidden");
            document.getElementById("pngInput").value = "";
        }
    </script>
@endsection
