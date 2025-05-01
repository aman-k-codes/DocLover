@extends('sw.layout.master')

@section('title', 'CraftMyDoc - PDF Form Filler')

@section('meta_description', 'Fill PDF forms easily with CraftMyDoc.')
@section('meta_keywords', 'PDF Form Filler, Fill PDF, Document Conversion, Fillable PDFs')

@section('content')
    <!-- Hero Section -->
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Fill PDF Forms Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your PDF form and fill its fields with your data.</p>
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
                <span class="text-gray-800 font-semibold">Fill Form</span>
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
            <p class="text-lg font-medium mb-4">Drop your PDF form here <span class="text-gray-500">or</span></p>
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
            <h3 class="text-xl font-bold text-gray-900 mb-4">Fill PDF Form</h3>
            <div class="border-2 border-gray-300 rounded-lg overflow-hidden">
                <iframe id="pdfPreview" class="w-full h-96"></iframe>
            </div>
            <div class="mt-4">
                <div id="formFields" class="space-y-4">
                    <!-- Dynamically loaded form fields will go here -->
                </div>
            </div>
        </div>

        <!-- Fill Form Button -->
        <div id="fillFormSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="fillFormBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 hover:shadow-lg cursor-pointer hidden"
                onclick="fillPDFForm()">
                <span class="inline-flex items-center">
                    <i class="fas fa-edit mr-2"></i>
                    Fill Form
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
                <h3 class="text-xl font-bold text-gray-900">Form Filled Successfully!</h3>
                <p class="text-gray-600 mt-2">Your PDF with filled form is ready for download.</p>

                <!-- Buttons -->
                <div class="flex flex-wrap justify-center mt-6 space-x-4">
                    <button id="downloadBtn"
                        class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200"
                        onclick="downloadFilledPDF()">
                        <i class="fas fa-download mr-2"></i>
                        Download Filled PDF
                    </button>
                    <button id="fillAgainBtn"
                        class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200"
                        onclick="fillAgain()">
                        <i class="fas fa-sync-alt mr-2"></i>
                        Fill Again
                    </button>
                </div>
            </div>
        </div>

    </section>

    <script>
        let filledPdfBlobUrl = null;

        function previewPDF(event) {
            const file = event.target.files[0];
            if (file && file.type === "application/pdf") {
                const fileURL = URL.createObjectURL(file);
                document.getElementById("pdfPreview").src = fileURL;
                document.getElementById("pdfPreviewContainer").classList.remove("hidden");
                document.getElementById("fillFormBtn").classList.remove("hidden");

                // Dynamically load form fields if available in the PDF
                loadFormFields(file);
            }
        }

        function loadFormFields(file) {
            // Example code for extracting form fields from the PDF.
            // You can integrate a library such as `pdf-lib` or similar to extract and fill form fields.
            // For simplicity, here we just create some static fields.
            const fields = [
                { name: "Name", type: "text" },
                { name: "Email", type: "email" },
                { name: "Phone", type: "tel" }
            ];

            const formFieldsContainer = document.getElementById("formFields");
            formFieldsContainer.innerHTML = ''; // Clear previous fields

            fields.forEach(field => {
                const input = document.createElement("input");
                input.type = field.type;
                input.name = field.name;
                input.placeholder = field.name;
                input.classList.add("border", "p-2", "rounded-lg", "w-full", "mb-2");
                formFieldsContainer.appendChild(input);
            });
        }

        function fillPDFForm() {
            const fileInput = document.getElementById('pdfInput');
            if (fileInput.files.length === 0) {
                alert("Please upload a PDF form first.");
                return;
            }

            // Hide upload, preview & fill sections, show loading message
            document.getElementById("uploadSection").classList.add("hidden");
            document.getElementById("pdfPreviewContainer").classList.add("hidden");
            document.getElementById("fillFormBtn").classList.add("hidden");

            const csrfToken = CSRF;
            const formData = new FormData();
            formData.append("_token", csrfToken);
            formData.append("pdf", fileInput.files[0]);

            // Collect data from form fields
            const formFields = document.querySelectorAll("#formFields input");
            formFields.forEach(field => {
                formData.append(field.name, field.value);
            });

            fetch("#", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken
                },
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Form fill failed. Please try again.");
                    }
                    return response.blob();
                })
                .then(blob => {
                    filledPdfBlobUrl = URL.createObjectURL(blob);
                    document.getElementById("downloadSection").classList.remove("hidden"); // Show download section
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("An error occurred while filling the form.");
                    document.getElementById("uploadSection").classList.remove("hidden");
                    document.getElementById("pdfPreviewContainer").classList.remove("hidden");
                    document.getElementById("fillFormBtn").classList.remove("hidden");
                });
        }

        function downloadFilledPDF() {
            if (filledPdfBlobUrl) {
                const fileInput = document.getElementById("pdfInput");
                if (fileInput.files.length > 0) {
                    let fileName = fileInput.files[0].name.replace(/\.[^/.]+$/, "");
                    fileName = fileName.replace(/\s+/g, "_");
                    const finalFileName = fileName + "_filled_form.pdf";

                    const downloadLink = document.createElement("a");
                    downloadLink.href = filledPdfBlobUrl;
                    downloadLink.download = finalFileName;
                    document.body.appendChild(downloadLink);
                    downloadLink.click();
                    document.body.removeChild(downloadLink);
                    URL.revokeObjectURL(filledPdfBlobUrl);
                    filledPdfBlobUrl = null; // Reset after download
                }
            }
        }

        function fillAgain() {
            document.getElementById("downloadSection").classList.add("hidden");
            document.getElementById("uploadSection").classList.remove("hidden");
            document.getElementById("pdfPreviewContainer").classList.add("hidden");
            document.getElementById("fillFormBtn").classList.add("hidden");

            // Reset file input
            const fileInput = document.getElementById("pdfInput");
            fileInput.value = "";
        }
    </script>

    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach([['🚀', 'Fast & Simple', 'Upload your PDF form and fill it instantly.'], ['🔒', 'Highly Secure', 'Your files are encrypted and never stored.'], ['💡', 'User-Friendly', 'An intuitive UI for effortless PDF form filling.']] as $feature)
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
