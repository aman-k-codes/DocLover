@extends('sw.layout.master')

@section('title', 'DocLover - Protect PDF')
@section('meta_description', 'Protect your PDF with DocLover’s easy-to-use tool.')
@section('meta_keywords', 'Protect PDF, PDF tools')

@section('content')
<!-- Hero Section -->
<section class="pt-12 px-4 bg-gray-50">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-gray-800">Protect Your PDF Instantly</h2>
        <p class="text-lg text-gray-600 mt-3">Upload your PDF and protect it with a password.</p>
    </div>
</section>

<!-- Upload Area -->
<section class="py-10 px-4">
    <div id="uploadSection" class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
        <p class="text-lg font-medium mb-4">Drop your PDF here <span class="text-gray-500">or</span></p>
        <label class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
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
        <label for="passwordInput" class="block text-gray-700 mt-4">Enter password to protect the PDF:</label>
        <input type="password" id="passwordInput" class="border p-2 rounded-md mt-2" placeholder="Enter a password">
    </div>

    <!-- Protect Button -->
    <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
        <button id="protectBtn" class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 hover:shadow-lg cursor-pointer hidden" onclick="protectPDF()">
            <span class="inline-flex items-center">
                <i class="fas fa-lock mr-2"></i>
                Protect PDF with Password
            </span>
        </button>
    </div>

    <!-- Download Section -->
    <div id="downloadSection" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
        <div class="flex flex-col items-center">
            <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                <i class="fas fa-check-circle text-4xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900">PDF Protected Successfully!</h3>
            <p class="text-gray-600 mt-2">Your protected PDF is ready to download.</p>
            <div class="flex flex-wrap justify-center mt-6 space-x-4">
                <button id="downloadBtn" class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200" onclick="downloadProtectedPDF()">
                    <i class="fas fa-download mr-2"></i>
                    Download PDF
                </button>
                <button id="protectAgainBtn" class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200" onclick="protectAgain()">
                    <i class="fas fa-sync-alt mr-2"></i>
                    Protect Another PDF
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.17.1/pdf-lib.min.js"></script>
<script src="https://unpkg.com/@cantoo/pdf-lib-encrypt@1.0.0/dist/pdf-lib-encrypt.min.js"></script>

<script>
    let protectedPDFUrl = null;

    function previewPDF(event) {
        const file = event.target.files[0];
        const list = document.getElementById("pdfList");
        list.innerHTML = "";

        if (file) {
            const li = document.createElement("li");
            li.textContent = file.name;
            list.appendChild(li);

            document.getElementById("pdfPreviewContainer").classList.remove("hidden");
            document.getElementById("protectBtn").classList.remove("hidden");
        }
    }

    async function protectPDF() {
        const fileInput = document.getElementById('pdfInput');
        const file = fileInput.files[0];
        const passwordInput = document.getElementById('passwordInput').value.trim();

        if (!file) {
            alert("Please upload a PDF file to protect.");
            return;
        }

        if (!passwordInput) {
            alert("Please enter a password to protect the PDF.");
            return;
        }

        document.getElementById("uploadSection").classList.add("hidden");
        document.getElementById("pdfPreviewContainer").classList.add("hidden");
        document.getElementById("protectBtn").classList.add("hidden");

        try {
            const arrayBuffer = await file.arrayBuffer();
            const pdfDoc = await PDFLib.PDFDocument.load(arrayBuffer);

            // Use pdf-lib-encrypt to apply password protection
            const encryptedPdfBytes = await PDFLibEncrypt.encrypt(pdfDoc, {
                userPassword: passwordInput,
                ownerPassword: passwordInput,
                permissions: {
                    printing: 'highResolution',
                    modifying: false,
                    copying: false,
                    annotating: false,
                    fillingForms: false,
                    contentAccessibility: false,
                    documentAssembly: false,
                },
            });

            // Create an object URL for the encrypted PDF
            protectedPDFUrl = URL.createObjectURL(new Blob([encryptedPdfBytes], { type: 'application/pdf' }));

            document.getElementById("downloadSection").classList.remove("hidden");
        } catch (error) {
            console.error("Error:", error);
            alert("An error occurred during protection.");
            document.getElementById("uploadSection").classList.remove("hidden");
            document.getElementById("pdfPreviewContainer").classList.remove("hidden");
            document.getElementById("protectBtn").classList.remove("hidden");
        }
    }

    function downloadProtectedPDF() {
        if (protectedPDFUrl) {
            const downloadLink = document.createElement("a");
            downloadLink.href = protectedPDFUrl;
            downloadLink.download = "protected_doclover.pdf";
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
            URL.revokeObjectURL(protectedPDFUrl);
            protectedPDFUrl = null;
        }
    }

    function protectAgain() {
        document.getElementById("downloadSection").classList.add("hidden");
        document.getElementById("uploadSection").classList.remove("hidden");
        document.getElementById("pdfPreviewContainer").classList.add("hidden");
        document.getElementById("protectBtn").classList.add("hidden");
        document.getElementById("pdfList").innerHTML = "";
        document.getElementById("passwordInput").value = "";
        document.getElementById("pdfInput").value = "";
    }
</script>

@endsection
