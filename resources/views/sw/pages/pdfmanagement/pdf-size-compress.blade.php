@extends('sw.layout.master')

@section('title', 'CraftMyDoc - PDF Compressor')
@section('meta_description', 'Compress your PDF files quickly and easily with CraftMyDoc.')
@section('meta_keywords', 'PDF Compressor, Compress PDF, Reduce PDF Size')

@section('content')
    <!-- Hero Section -->
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Compress Your PDF Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your PDF, reduce the file size, and download it instantly!</p>
        </div>
    </section>

    <!-- Upload Section -->
    <section class="py-12 px-4">
    <!-- Steps Section -->
    <div
        class="grid gap-6 sm:flex sm:justify-center bg-indigo-50 rounded-2xl p-6 max-w-4xl mx-auto mb-10 shadow">
        @foreach (['Upload PDF', 'Compress the PDF', 'Download Compressed PDF'] as $i => $step)
            <div class="flex items-center space-x-3">
                <div class="w-9 h-9 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold shadow">
                    {{ $i + 1 }}
                </div>
                <span class="text-gray-800 font-medium text-base sm:text-lg">{{ $step }}</span>
            </div>
        @endforeach
    </div>

    <!-- Upload Section -->
    <div id="uploadSection"
        class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md transition-all">
        <p class="text-lg font-semibold mb-4">Drop your PDF here <span class="text-gray-500">or</span></p>
        <label
            class="inline-flex items-center justify-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800 transition">
            <i class="fas fa-upload mr-2"></i>
            Upload PDF
            <input type="file" id="pdfInput" class="hidden" accept="application/pdf" />
        </label>
        <p class="text-sm text-gray-500 mt-4">Supported format: PDF. Max size: 20MB.</p>
    </div>

    <!-- Compressor Container -->
    <div id="compressorContainer"
        class="hidden mt-10 max-w-3xl mx-auto bg-white shadow-lg rounded-2xl p-8 space-y-6 text-center transition-all">
        <h3 class="text-2xl font-bold text-gray-900">Compress PDF</h3>

        <div class="text-left">
            <label for="targetSize" class="block text-sm font-semibold text-gray-800 mb-2">
                Desired File Size
            </label>
            <div class="relative rounded-md shadow-sm">
                <input type="number" id="targetSize" min="1" placeholder="Enter target size"
                    class="block w-full py-2 pr-16 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 sm:text-base" />
                <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                    <span class="text-gray-500 text-sm">KB</span>
                </div>
            </div>
            <p class="text-xs text-gray-500 mt-1">For example: 300 KB</p>
        </div>

        <button id="compressButton"
            class="w-full sm:w-auto bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition">
            Compress PDF
        </button>

        <div id="actionButtons" class="hidden flex flex-col sm:flex-row sm:justify-center gap-4">
            <button id="downloadButton"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition">
                Download Compressed PDF
            </button>
            <button id="convertAgainButton"
                class="bg-gray-600 hover:bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition">
                Compress Another PDF
            </button>
        </div>
    </div>

    <!-- Loader -->
    <div id="loaderSection"
        class="hidden fixed inset-0 bg-white bg-opacity-75 flex items-center justify-center z-50">
        <div class="text-center">
            <div class="w-16 h-16 border-4 border-blue-500 border-dashed rounded-full animate-spin mx-auto mb-4"></div>
            <p class="text-gray-700 font-semibold text-lg">Compressing your PDF, please wait...</p>
        </div>
    </div>
</section>


    <!-- Features Section (unchanged icons and benefits) -->
    <!-- You can change icons or keep them for consistency -->

    <!-- FAQs and Tools Section -->
    @include('ads.ad1')
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

    <!-- JS to handle PDF compression (you'll need backend API or library for real compression) -->
    <script>
        const pdfInput = document.getElementById("pdfInput");
        const compressorContainer = document.getElementById("compressorContainer");
        const compressButton = document.getElementById("compressButton");
        const downloadButton = document.getElementById("downloadButton");
        const convertAgainButton = document.getElementById("convertAgainButton");
        const actionButtons = document.getElementById("actionButtons");

        let originalPDF = null;
        let compressedPDFUrl = null;

        pdfInput.addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (!file || file.type !== "application/pdf") return;

            originalPDF = file;
            compressorContainer.classList.remove("hidden");
        });

        compressButton.addEventListener("click", function() {
            if (!originalPDF) return;

            const targetSizeKB = parseInt(document.getElementById("targetSize").value);
            if (!targetSizeKB || targetSizeKB <= 0) {
                alert("Please enter a valid target size in KB.");
                return;
            }

            document.getElementById("loaderSection").classList.remove("hidden");

            // Simulated compression (replace with real logic)
            const formData = new FormData();
            formData.append("pdf", originalPDF);
            formData.append("target_size_kb", targetSizeKB);

            setTimeout(() => {
                // Replace this blob with backend-compressed PDF blob
                const blob = originalPDF;
                compressedPDFUrl = URL.createObjectURL(blob);

                compressButton.classList.add("hidden");
                actionButtons.classList.remove("hidden");

                document.getElementById("loaderSection").classList.add("hidden");
            }, 3000);
        });


        downloadButton.addEventListener("click", function() {
            if (!compressedPDFUrl) return;

            const link = document.createElement("a");
            link.href = compressedPDFUrl;
            link.download = "compressed.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });

        convertAgainButton.addEventListener("click", function() {
            document.getElementById("uploadSection").classList.remove("hidden");
            compressorContainer.classList.add("hidden");
            actionButtons.classList.add("hidden");
            compressButton.classList.remove("hidden");

            pdfInput.value = '';
            originalPDF = null;

            if (compressedPDFUrl) {
                URL.revokeObjectURL(compressedPDFUrl);
                compressedPDFUrl = null;
            }
        });
    </script>
@endsection
