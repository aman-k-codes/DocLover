@extends('sw.layout.master')

@section('title', 'DocLover - Split PDF')

@section('meta_description', 'Split a single PDF into multiple pages or ranges with DocLover.')
@section('meta_keywords', 'Split PDF, Extract PDF pages, PDF Tools')

@section('content')
<!-- Hero Section -->
<section class="pt-12 px-4 bg-gray-50">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-gray-800">Split Your PDF in Seconds</h2>
        <p class="text-lg text-gray-600 mt-3">Upload a PDF and extract specific pages or ranges with our fast and secure tool.</p>
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
            <span class="text-gray-800 font-semibold">Split File</span>
        </div>
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">3</div>
            <span class="text-gray-800 font-semibold">Download Split Files</span>
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
    </div>

    <!-- Convert Button -->
    <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
        <button id="convertBtn"
            class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 hover:shadow-lg cursor-pointer hidden"
            onclick="splitPDF()">
            <span class="inline-flex items-center">
                <i class="fas fa-cut mr-2"></i>
                Split PDF
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
            <h3 class="text-xl font-bold text-gray-900">Split Successful!</h3>
            <p class="text-gray-600 mt-2">Your split PDF files are ready to download.</p>
            <div class="flex flex-wrap justify-center mt-6 space-x-4">
                <button id="downloadBtn"
                    class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200"
                    onclick="downloadSplitPDF()">
                    <i class="fas fa-download mr-2"></i>
                    Download ZIP
                </button>
                <button id="convertAgainBtn"
                    class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200"
                    onclick="convertAgain()">
                    <i class="fas fa-sync-alt mr-2"></i>
                    Split Another
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    let splitPDFZipUrl = null;

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

    function splitPDF() {
        const fileInput = document.getElementById('pdfInput');
        const file = fileInput.files[0];

        if (!file) {
            alert("Please upload a PDF file to split.");
            return;
        }

        document.getElementById("uploadSection").classList.add("hidden");
        document.getElementById("pdfPreviewContainer").classList.add("hidden");
        document.getElementById("convertBtn").classList.add("hidden");

        const csrfToken = CSRF;
        const formData = new FormData();
        formData.append("_token", csrfToken);
        formData.append("pdf", file);

        fetch("#", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": csrfToken
            },
            body: formData
        })
            .then(response => {
                if (!response.ok) throw new Error("Split failed. Try again.");
                return response.blob();
            })
            .then(blob => {
                splitPDFZipUrl = URL.createObjectURL(blob);
                document.getElementById("downloadSection").classList.remove("hidden");
            })
            .catch(error => {
                console.error("Error:", error);
                alert("An error occurred during split.");
                document.getElementById("uploadSection").classList.remove("hidden");
                document.getElementById("pdfPreviewContainer").classList.remove("hidden");
                document.getElementById("convertBtn").classList.remove("hidden");
            });
    }

    function downloadSplitPDF() {
        if (splitPDFZipUrl) {
            const downloadLink = document.createElement("a");
            downloadLink.href = splitPDFZipUrl;
            downloadLink.download = "split_pages_doclover.zip";
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
            URL.revokeObjectURL(splitPDFZipUrl);
            splitPDFZipUrl = null;
        }
    }

    function convertAgain() {
        document.getElementById("downloadSection").classList.add("hidden");
        document.getElementById("uploadSection").classList.remove("hidden");
        document.getElementById("pdfPreviewContainer").classList.add("hidden");
        document.getElementById("convertBtn").classList.add("hidden");
        document.getElementById("pdfList").innerHTML = "";
        document.getElementById("pdfInput").value = "";
    }
</script>
@endsection
