@extends('sw.layout.master')

@section('title', 'DocLover - Add Watermark')

@section('meta_description', 'Add watermark to your PDFs with DocLover.')
@section('meta_keywords', 'Watermark, PDF Editing, Document Conversion')

@section('content')
    <!-- Hero Section -->
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Add Watermark to Your PDF</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your PDF file, add a watermark, and download the updated file.</p>
        </div>
    </section>

    <!-- Watermark Upload Area -->
    <section class="py-10 px-4">
        <div id="uploadSection"
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-medium mb-4">Drop your PDF file here <span class="text-gray-500">or</span></p>
            <label class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i>
                Upload PDF
                <input type="file" id="pdfInput" class="hidden" accept="application/pdf" onchange="previewPDF(event)" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max file size: 25MB. Only PDF files supported.</p>
        </div>

        <!-- Watermark Text -->
        <div class="mt-8 max-w-3xl mx-auto text-center">
            <label class="block text-lg font-medium text-gray-900">Watermark Text</label>
            <input type="text" id="watermarkText" class="mt-2 px-4 py-2 rounded-lg border border-gray-300 w-full" placeholder="Enter watermark text">
        </div>

        <!-- Convert Button -->
        <div class="mt-8 max-w-3xl mx-auto text-center">
            <button id="addWatermarkBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 hover:shadow-lg cursor-pointer hidden"
                onclick="addWatermark()">
                <span class="inline-flex items-center">
                    <i class="fas fa-pencil-alt mr-2"></i>
                    Add Watermark
                </span>
            </button>
        </div>

        <!-- Download Section (Hidden Initially) -->
        <div id="downloadSection" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <div class="flex flex-col items-center">
                <!-- Success Icon -->
                <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>

                <!-- Title -->
                <h3 class="text-xl font-bold text-gray-900">Watermark Added Successfully!</h3>
                <p class="text-gray-600 mt-2">Your PDF with watermark is ready for download.</p>

                <!-- Download Button -->
                <button id="downloadBtn"
                    class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200"
                    onclick="downloadWatermarkedPDF()">
                    <i class="fas fa-download mr-2"></i>
                    Download PDF
                </button>
            </div>
        </div>
    </section>

    <script>
        function previewPDF(event) {
            const file = event.target.files[0];
            if (file && file.type === "application/pdf") {
                const fileURL = URL.createObjectURL(file);
                document.getElementById("pdfPreview").src = fileURL;
                document.getElementById("addWatermarkBtn").classList.remove("hidden");
            }
        }

        function addWatermark() {
            const fileInput = document.getElementById('pdfInput');
            const watermarkText = document.getElementById('watermarkText').value;

            if (fileInput.files.length === 0) {
                alert("Please upload a PDF file first.");
                return;
            }

            if (!watermarkText) {
                alert("Please enter watermark text.");
                return;
            }

            // Hide upload & watermark sections, show loading message
            document.getElementById("uploadSection").classList.add("hidden");

            const formData = new FormData();
            formData.append("pdf", fileInput.files[0]);
            formData.append("watermark", watermarkText);

            fetch("#", {
                method: "POST",
                body: formData,
            })
                .then(response => response.blob())
                .then(blob => {
                    const blobUrl = URL.createObjectURL(blob);
                    document.getElementById("downloadSection").classList.remove("hidden");  // Show download section
                    document.getElementById("downloadBtn").onclick = function () {
                        const downloadLink = document.createElement("a");
                        downloadLink.href = blobUrl;
                        downloadLink.download = "watermarked_document.pdf";
                        document.body.appendChild(downloadLink);
                        downloadLink.click();
                        document.body.removeChild(downloadLink);
                        URL.revokeObjectURL(blobUrl);
                    };
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("An error occurred while adding the watermark.");
                    document.getElementById("uploadSection").classList.remove("hidden");
                });
        }
    </script>
@endsection
