@extends('Layout.master')

@section('title', 'DocLover - PDF to ZIP')

@section('meta_description', 'Convert PDF to ZIP easily with DocLover.')
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

        <!-- Upload area -->
        <div
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-medium mb-4">Drop your PDF file here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M3 3a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V3zm2 0v14h10V3H5zm4 4h2v5h2l-3 3-3-3h2V7z" />
                </svg>
                Upload PDF
                <input type="file" id="pdfInput" class="hidden" accept="application/pdf" onchange="previewPDF(event)" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max file size: 25MB. Only PDF files supported.</p>
        </div>

        <!-- PDF Preview -->
        <div id="pdfPreviewContainer" class="hidden mt-6 max-w-3xl mx-auto text-center">
            <h3 class="text-lg font-semibold text-gray-800">PDF Preview</h3>
            <iframe id="pdfPreview" class="w-full h-96 border mt-4"></iframe>
        </div>

        <!-- Convert Button -->
        <div class="mt-6 max-w-3xl mx-auto text-center">
            <button id="convertBtn"
                class="bg-green-600 text-white font-semibold px-6 py-3 rounded-md hover:bg-green-700 cursor-pointer hidden"
                onclick="convertPDF()">
                Convert to ZIP
            </button>
        </div>
    </section>

    <script>
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
                    return response.blob(); // Get ZIP file as a blob
                })
                .then(blob => {
                    const downloadLink = document.createElement("a");
                    downloadLink.href = URL.createObjectURL(blob);
                    downloadLink.download = "converted.zip";

                    document.body.appendChild(downloadLink);
                    downloadLink.click();
                    document.body.removeChild(downloadLink);
                    URL.revokeObjectURL(downloadLink.href);
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("An error occurred while converting the file.");
                });
        }



    </script>


    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach([
                ['🚀', 'Fast & Simple', 'Upload your PDF and get a ZIP file instantly.'],
                ['🔒', 'Highly Secure', 'Your files are encrypted and never stored.'],
                ['💻', 'Cross-Device Access', 'Works perfectly on desktop, tablet, and mobile.']
                ] as $feature)
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
                    @foreach([
                    ['Upload your PDF file', 'Drag & drop or browse your device to upload.'],
                    ['Start conversion', 'Click the convert button to zip your file.'],
                    ['Download the ZIP', 'Get your compressed ZIP file instantly.']
                    ] as $index => $step)
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

            @include('Components.tools')
        </div>
    </section>
@endsection