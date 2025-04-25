@extends('sw.layout.master')

@section('title', 'DocLover - Extract PDF Pages')

@section('meta_description', 'Extract pages from your PDF with DocLover’s easy-to-use tool.')
@section('meta_keywords', 'Extract PDF pages, PDF tools')

@section('content')
<!-- Hero Section -->
<section class="pt-12 px-4 bg-gray-50">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-gray-800">Extract Pages from Your PDF Instantly</h2>
        <p class="text-lg text-gray-600 mt-3">Upload your PDF and extract any pages you need.</p>
    </div>
</section>

<!-- Step indicator -->
<section class="py-10 px-4">
    <div
        class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">1</div>
            <span class="text-gray-800 font-semibold">Upload PDF</span>
        </div>
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">2</div>
            <span class="text-gray-800 font-semibold">Select Pages to Extract</span>
        </div>
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">3</div>
            <span class="text-gray-800 font-semibold">Download Extracted PDF</span>
        </div>
    </div>

    <!-- Upload Area -->
    <div id="uploadSection"
        class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
        <p class="text-lg font-medium mb-4">Drop your PDF here <span class="text-gray-500">or</span></p>
        <label
            class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
            <i class="fas fa-upload mr-2"></i>
            Upload PDF
            <input type="file" id="pdfInput" class="hidden" accept="application/pdf" onchange="previewPDF(event)" />
        </label>
        <p class="text-sm text-gray-500 mt-4">Max size: 25MB. Only one PDF file supported.</p>
    </div>

    <!-- PDF Preview -->
    <div id="pdfPreviewContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
        <h3 class="text-xl font-bold text-gray-900 mb-4">PDF File Selected</h3>
        <ul id="pdfList" class="text-gray-700 text-left list-disc pl-6"></ul>
        <label for="pagesToExtract" class="block text-gray-700 mt-4">Enter page numbers to extract (comma-separated):</label>
        <input type="text" id="pagesToExtract" class="border p-2 rounded-md mt-2" placeholder="e.g., 1,3,5">
    </div>

    <!-- Extract Button -->
    <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
        <button id="convertBtn"
            class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 hover:shadow-lg cursor-pointer hidden"
            onclick="extractPDFPages()">
            <span class="inline-flex items-center">
                <i class="fas fa-extract mr-2"></i>
                Extract Pages from PDF
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
            <h3 class="text-xl font-bold text-gray-900">Pages Extracted Successfully!</h3>
            <p class="text-gray-600 mt-2">Your extracted PDF is ready to download.</p>
            <div class="flex flex-wrap justify-center mt-6 space-x-4">
                <button id="downloadBtn"
                    class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200"
                    onclick="downloadExtractedPDF()">
                    <i class="fas fa-download mr-2"></i>
                    Download PDF
                </button>
                <button id="convertAgainBtn"
                    class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200"
                    onclick="extractAgain()">
                    <i class="fas fa-sync-alt mr-2"></i>
                    Extract More Pages
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    let extractedPDFUrl = null;

    function previewPDF(event) {
        const file = event.target.files[0];
        const list = document.getElementById("pdfList");
        list.innerHTML = "";

        if (file) {
            const li = document.createElement("li");
            li.textContent = file.name;
            list.appendChild(li);

            document.getElementById("pdfPreviewContainer").classList.remove("hidden");
            document.getElementById("convertBtn").classList.remove("hidden");
        }
    }

    function extractPDFPages() {
        const fileInput = document.getElementById('pdfInput');
        const file = fileInput.files[0];
        const pagesToExtractInput = document.getElementById('pagesToExtract').value.trim();

        if (!file) {
            alert("Please upload a PDF file to extract pages.");
            return;
        }

        if (!pagesToExtractInput) {
            alert("Please specify pages to extract.");
            return;
        }

        const pagesToExtract = pagesToExtractInput.split(',').map(page => parseInt(page.trim(), 10)).filter(page => !isNaN(page));

        if (pagesToExtract.length === 0) {
            alert("Please enter valid page numbers to extract.");
            return;
        }

        document.getElementById("uploadSection").classList.add("hidden");
        document.getElementById("pdfPreviewContainer").classList.add("hidden");
        document.getElementById("convertBtn").classList.add("hidden");

        const csrfToken = CSRF;
        const formData = new FormData();
        formData.append("_token", csrfToken);
        formData.append("pdf", file);
        formData.append("pagesToExtract", JSON.stringify(pagesToExtract));

        fetch("{{ route('extract-pdf-pages') }}", { // Replace with actual backend route
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": csrfToken
            },
            body: formData
        })
            .then(response => {
                if (!response.ok) throw new Error("Extraction failed. Try again.");
                return response.blob();
            })
            .then(blob => {
                extractedPDFUrl = URL.createObjectURL(blob);
                document.getElementById("downloadSection").classList.remove("hidden");
            })
            .catch(error => {
                console.error("Error:", error);
                alert("An error occurred during extraction.");
                document.getElementById("uploadSection").classList.remove("hidden");
                document.getElementById("pdfPreviewContainer").classList.remove("hidden");
                document.getElementById("convertBtn").classList.remove("hidden");
            });
    }

    function downloadExtractedPDF() {
        if (extractedPDFUrl) {
            const downloadLink = document.createElement("a");
            downloadLink.href = extractedPDFUrl;
            downloadLink.download = "extracted_doclover.pdf";
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
            URL.revokeObjectURL(extractedPDFUrl);
            extractedPDFUrl = null;
        }
    }

    function extractAgain() {
        document.getElementById("downloadSection").classList.add("hidden");
        document.getElementById("uploadSection").classList.remove("hidden");
        document.getElementById("pdfPreviewContainer").classList.add("hidden");
        document.getElementById("convertBtn").classList.add("hidden");
        document.getElementById("pdfList").innerHTML = "";
        document.getElementById("pagesToExtract").value = "";
        document.getElementById("pdfInput").value = "";
    }
</script>
@endsection
