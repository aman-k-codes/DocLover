@extends('sw.layout.master')

@section('title', 'CraftMyDoc - PDF to ZIP')

@section('meta_description', 'Convert PDF to ZIP easily with CraftMyDoc.')
@section('meta_keywords', 'PDF to ZIP, Document Conversion, File Conversion')

@section('content')
    <!-- Hero Section -->
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Convert PDF to ZIP Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your PDF file and get a ZIP archive in seconds with our fast and
                secure converter.</p>
        </div>
    </section>

    <!-- Step indicator -->
    <section class="py-10 px-4">
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">1
                </div>
                <span class="text-gray-800 font-semibold">Upload PDF</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">2
                </div>
                <span class="text-gray-800 font-semibold">Convert to ZIP</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">3
                </div>
                <span class="text-gray-800 font-semibold">Download ZIP File</span>
            </div>
        </div>

        <!-- Upload Area -->
        <div id="uploadSection"
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-medium mb-4">Drop your PDF file here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i>
                Upload PDF
                <input type="file" id="pdfInput" class="hidden" accept="application/pdf" onchange="previewPDF(event)" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max file size: 25MB. Only PDF files supported.</p>
        </div>

        <!-- PDF Preview -->
        <div id="pdfPreviewContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">PDF Preview</h3>
            <div class="border-2 border-gray-300 rounded-lg overflow-hidden">
                <iframe id="pdfPreview" class="w-full h-96"></iframe>
            </div>
        </div>

        <!-- Convert Button -->
        <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="convertBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 hover:shadow-lg cursor-pointer hidden"
                onclick="convertPDF()">
                <span class="inline-flex items-center">
                    <i class="fas fa-file-archive mr-2"></i>
                    Convert to ZIP
                </span>
            </button>
        </div>

        <!-- Download Section (Hidden Initially) -->
        <div id="downloadSection"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <div class="flex flex-col items-center">
                <!-- Success Icon -->
                <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>

                <!-- Title -->
                <h3 class="text-xl font-bold text-gray-900">Conversion Successful!</h3>
                <p class="text-gray-600 mt-2">Your ZIP file is ready for download.</p>

                <!-- Buttons -->
                <div class="flex flex-wrap justify-center mt-6 space-x-4">
                    <button id="downloadBtn"
                        class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200"
                        onclick="downloadZIP()">
                        <i class="fas fa-download mr-2"></i>
                        Download ZIP
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

        <!-- Loader (hidden by default) -->
        <div id="loaderSection" class="hidden fixed inset-0 bg-white bg-opacity-75 flex items-center justify-center z-50">
            <div class="text-center">
                <div class="w-16 h-16 border-4 border-blue-500 border-dashed rounded-full animate-spin mx-auto mb-4"></div>
                <p class="text-gray-700 font-semibold text-lg">Converting PDF to ZIP, please wait...</p>
            </div>
        </div>


    </section>

    <script>
        let zipBlobUrl = null;

        function previewPDF(event) {
            const file = event.target.files[0];
            if (file && file.type === "application/pdf") {
                const fileURL = URL.createObjectURL(file);
                document.getElementById("pdfPreview").src = fileURL;
                document.getElementById("pdfPreviewContainer").classList.remove("hidden");
                document.getElementById("convertBtn").classList.remove("hidden");
            }
        }

        function convertPDF() {
            const fileInput = document.getElementById('pdfInput');
            if (fileInput.files.length === 0) {
                alert("Please upload a PDF file first.");
                return;
            }

            // Show loader
            document.getElementById("loaderSection").classList.remove("hidden");

            // Hide other sections
            document.getElementById("uploadSection").classList.add("hidden");
            document.getElementById("pdfPreviewContainer").classList.add("hidden");
            document.getElementById("convertBtn").classList.add("hidden");

            const csrfToken = CSRF;
            const formData = new FormData();
            formData.append("_token", csrfToken);
            formData.append("pdf", fileInput.files[0]);

            fetch("{{ route('convert.PDFtoZIP') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken
                },
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Conversion failed. Please try again.");
                    }
                    return response.blob();
                })
                .then(blob => {
                    zipBlobUrl = URL.createObjectURL(blob);
                    setTimeout(() => {
                        document.getElementById("loaderSection").classList.add("hidden"); // Hide loader
                        document.getElementById("downloadSection").scrollIntoView({ behavior: "smooth" });
                        document.getElementById("downloadSection").classList.remove("hidden"); // Show download
                    }, 2000); // Smooth scroll to download section
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("An error occurred while converting the file.");

                    // Restore previous UI
                    document.getElementById("loaderSection").classList.add("hidden");
                    document.getElementById("uploadSection").classList.remove("hidden");
                    document.getElementById("pdfPreviewContainer").classList.remove("hidden");
                    document.getElementById("convertBtn").classList.remove("hidden");
                });
        }



        function downloadZIP() {
            if (zipBlobUrl) {
                const fileInput = document.getElementById("pdfInput");
                if (fileInput.files.length > 0) {
                    let fileName = fileInput.files[0].name.replace(/\.[^/.]+$/, ""); // Remove file extension
                    fileName = fileName.replace(/\s+/g, "_"); // Replace spaces with underscores
                    const finalFileName = fileName + "_doc_lover.zip";

                    const downloadLink = document.createElement("a");
                    downloadLink.href = zipBlobUrl;
                    downloadLink.download = finalFileName;
                    document.body.appendChild(downloadLink);
                    downloadLink.click();
                    document.body.removeChild(downloadLink);
                    URL.revokeObjectURL(zipBlobUrl);
                    zipBlobUrl = null; // Reset after download
                }
            }
        }


        function convertAgain() {
            document.getElementById("downloadSection").classList.add("hidden"); // Hide download section
            document.getElementById("uploadSection").classList.remove("hidden"); // Show upload section
            document.getElementById("pdfPreviewContainer").classList.add("hidden"); // Hide preview section
            document.getElementById("convertBtn").classList.add("hidden"); // Hide convert button

            // Reset file input
            const fileInput = document.getElementById("pdfInput");
            fileInput.value = "";
        }

    </script>



    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach([['🚀', 'Fast & Simple', 'Upload your PDF and get a ZIP file instantly.'], ['🔒', 'Highly Secure', 'Your files are encrypted and never stored.'], ['💻', 'Cross-Device Access', 'Works perfectly on desktop, tablet, and mobile.']] as $feature)
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
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Convert PDF to ZIP</h2>
            <p class="text-lg text-gray-600 mb-8">Follow these easy steps to compress your PDF into a ZIP archive.</p>
            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach([['Upload your PDF file', 'Drag & drop or browse your device to upload.'], ['Start conversion', 'Click the convert button to zip your file.'], ['Download the ZIP', 'Get your compressed ZIP file instantly.']] as $index => $step)
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
@endsection
