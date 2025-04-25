@extends('sw.layout.master')

@section('title', 'DocLover - PDF Metadata Editor')

@section('meta_description', 'Edit PDF metadata easily with DocLover.')
@section('meta_keywords', 'PDF Metadata Editor, Edit PDF, Document Conversion, File Metadata')

@section('content')
    <!-- Hero Section -->
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Edit PDF Metadata Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your PDF file and modify its metadata like title, author, and more.</p>
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
                <span class="text-gray-800 font-semibold">Edit Metadata</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">3
                </div>
                <span class="text-gray-800 font-semibold">Download PDF</span>
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
            <h3 class="text-xl font-bold text-gray-900 mb-4">PDF Metadata Editor</h3>
            <div class="border-2 border-gray-300 rounded-lg overflow-hidden">
                <iframe id="pdfPreview" class="w-full h-96"></iframe>
            </div>
            <div class="mt-4">
                <input type="text" id="pdfTitle" class="border p-2 rounded-lg w-full mb-2" placeholder="Title">
                <input type="text" id="pdfAuthor" class="border p-2 rounded-lg w-full mb-2" placeholder="Author">
                <input type="text" id="pdfSubject" class="border p-2 rounded-lg w-full mb-2" placeholder="Subject">
                <textarea id="pdfKeywords" class="border p-2 rounded-lg w-full" placeholder="Keywords"></textarea>
            </div>
        </div>

        <!-- Convert Button -->
        <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="convertBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 hover:shadow-lg cursor-pointer hidden"
                onclick="editPDFMetadata()">
                <span class="inline-flex items-center">
                    <i class="fas fa-edit mr-2"></i>
                    Edit Metadata
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
                <h3 class="text-xl font-bold text-gray-900">Metadata Edited Successfully!</h3>
                <p class="text-gray-600 mt-2">Your PDF with updated metadata is ready for download.</p>

                <!-- Buttons -->
                <div class="flex flex-wrap justify-center mt-6 space-x-4">
                    <button id="downloadBtn"
                        class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200"
                        onclick="downloadEditedPDF()">
                        <i class="fas fa-download mr-2"></i>
                        Download Edited PDF
                    </button>
                    <button id="editAgainBtn"
                        class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200"
                        onclick="editAgain()">
                        <i class="fas fa-sync-alt mr-2"></i>
                        Edit Again
                    </button>
                </div>
            </div>
        </div>

    </section>

    <script>
        let editedPdfBlobUrl = null;

        function previewPDF(event) {
            const file = event.target.files[0];
            if (file && file.type === "application/pdf") {
                const fileURL = URL.createObjectURL(file);
                document.getElementById("pdfPreview").src = fileURL;
                document.getElementById("pdfPreviewContainer").classList.remove("hidden");
                document.getElementById("convertBtn").classList.remove("hidden");
            }
        }

        function editPDFMetadata() {
            const fileInput = document.getElementById('pdfInput');
            if (fileInput.files.length === 0) {
                alert("Please upload a PDF file first.");
                return;
            }

            // Hide upload, preview & convert sections, show loading message
            document.getElementById("uploadSection").classList.add("hidden");
            document.getElementById("pdfPreviewContainer").classList.add("hidden"); // Hide preview section
            document.getElementById("convertBtn").classList.add("hidden");

            const csrfToken = CSRF;
            const formData = new FormData();
            formData.append("_token", csrfToken);
            formData.append("pdf", fileInput.files[0]);
            formData.append("title", document.getElementById("pdfTitle").value);
            formData.append("author", document.getElementById("pdfAuthor").value);
            formData.append("subject", document.getElementById("pdfSubject").value);
            formData.append("keywords", document.getElementById("pdfKeywords").value);

            fetch("#", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken
                },
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Metadata edit failed. Please try again.");
                    }
                    return response.blob();
                })
                .then(blob => {
                    editedPdfBlobUrl = URL.createObjectURL(blob);
                    document.getElementById("downloadSection").classList.remove("hidden"); // Show download section
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("An error occurred while editing the metadata.");
                    document.getElementById("uploadSection").classList.remove("hidden");
                    document.getElementById("pdfPreviewContainer").classList.remove("hidden"); // Restore preview section
                    document.getElementById("convertBtn").classList.remove("hidden");
                });
        }

        function downloadEditedPDF() {
            if (editedPdfBlobUrl) {
                const fileInput = document.getElementById("pdfInput");
                if (fileInput.files.length > 0) {
                    let fileName = fileInput.files[0].name.replace(/\.[^/.]+$/, ""); // Remove file extension
                    fileName = fileName.replace(/\s+/g, "_"); // Replace spaces with underscores
                    const finalFileName = fileName + "_edited_metadata.pdf";

                    const downloadLink = document.createElement("a");
                    downloadLink.href = editedPdfBlobUrl;
                    downloadLink.download = finalFileName;
                    document.body.appendChild(downloadLink);
                    downloadLink.click();
                    document.body.removeChild(downloadLink);
                    URL.revokeObjectURL(editedPdfBlobUrl);
                    editedPdfBlobUrl = null; // Reset after download
                }
            }
        }

        function editAgain() {
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
                @foreach([['🚀', 'Fast & Simple', 'Upload your PDF and edit its metadata instantly.'], ['🔒', 'Highly Secure', 'Your files are encrypted and never stored.'], ['💡', 'User-Friendly', 'An intuitive UI for effortless PDF editing.']] as $feature)
                    <div class="p-6 rounded-lg shadow-xl border border-gray-100">
                        <div class="text-4xl text-indigo-700 mb-4">{{ $feature[0] }}</div>
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">{{ $feature[1] }}</h4>
                        <p class="text-gray-600">{{ $feature[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
