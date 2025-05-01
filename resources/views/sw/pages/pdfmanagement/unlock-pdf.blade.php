@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Unlock PDF')

@section('meta_description', 'Unlock your PDF instantly with CraftMyDoc’s easy-to-use tool.')
@section('meta_keywords', 'Unlock PDF, PDF tools')

@section('content')
<!-- Hero Section -->
<section class="pt-12 px-4 bg-gray-50">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-gray-800">Unlock Your PDF Instantly</h2>
        <p class="text-lg text-gray-600 mt-3">Upload your locked PDF and unlock it with your password.</p>
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
            <span class="text-gray-800 font-semibold">Enter Password</span>
        </div>
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">3</div>
            <span class="text-gray-800 font-semibold">Download Unlocked PDF</span>
        </div>
    </div>

    <!-- Upload Area -->
    <div id="uploadSection"
        class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
        <p class="text-lg font-medium mb-4">Drop your locked PDF here <span class="text-gray-500">or</span></p>
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
        <h3 class="text-xl font-bold text-gray-900 mb-4">Locked PDF Selected</h3>
        <ul id="pdfList" class="text-gray-700 text-left list-disc pl-6"></ul>
        <label for="passwordInput" class="block text-gray-700 mt-4">Enter password to unlock the PDF:</label>
        <input type="password" id="passwordInput" class="border p-2 rounded-md mt-2" placeholder="Enter password">
    </div>

    <!-- Unlock Button -->
    <div id="unlockSection" class="mt-8 max-w-3xl mx-auto text-center">
        <button id="unlockBtn"
            class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 hover:shadow-lg cursor-pointer hidden"
            onclick="unlockPDF()">
            <span class="inline-flex items-center">
                <i class="fas fa-lock-open mr-2"></i>
                Unlock PDF
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
            <h3 class="text-xl font-bold text-gray-900">PDF Unlocked Successfully!</h3>
            <p class="text-gray-600 mt-2">Your unlocked PDF is ready to download.</p>
            <div class="flex flex-wrap justify-center mt-6 space-x-4">
                <button id="downloadBtn"
                    class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200"
                    onclick="downloadUnlockedPDF()">
                    <i class="fas fa-download mr-2"></i>
                    Download PDF
                </button>
                <button id="unlockAgainBtn"
                    class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200"
                    onclick="unlockAgain()">
                    <i class="fas fa-sync-alt mr-2"></i>
                    Unlock Another PDF
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    let unlockedPDFUrl = null;

    function previewPDF(event) {
        const file = event.target.files[0];
        const list = document.getElementById("pdfList");
        list.innerHTML = "";

        if (file) {
            const li = document.createElement("li");
            li.textContent = file.name;
            list.appendChild(li);

            document.getElementById("pdfPreviewContainer").classList.remove("hidden");
            document.getElementById("unlockBtn").classList.remove("hidden");
        }
    }

    function unlockPDF() {
        const fileInput = document.getElementById('pdfInput');
        const file = fileInput.files[0];
        const passwordInput = document.getElementById('passwordInput').value.trim();

        if (!file) {
            alert("Please upload a PDF file to unlock.");
            return;
        }

        if (!passwordInput) {
            alert("Please enter the password to unlock the PDF.");
            return;
        }

        document.getElementById("uploadSection").classList.add("hidden");
        document.getElementById("pdfPreviewContainer").classList.add("hidden");
        document.getElementById("unlockBtn").classList.add("hidden");

        const csrfToken = CSRF;
        const formData = new FormData();
        formData.append("_token", csrfToken);
        formData.append("pdf", file);
        formData.append("password", passwordInput);

        fetch("{{ route('unlock-pdf') }}", { // Replace with actual backend route
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": csrfToken
            },
            body: formData
        })
            .then(response => {
                if (!response.ok) throw new Error("Unlocking failed. Try again.");
                return response.blob();
            })
            .then(blob => {
                unlockedPDFUrl = URL.createObjectURL(blob);
                document.getElementById("downloadSection").classList.remove("hidden");
            })
            .catch(error => {
                console.error("Error:", error);
                alert("An error occurred during unlocking.");
                document.getElementById("uploadSection").classList.remove("hidden");
                document.getElementById("pdfPreviewContainer").classList.remove("hidden");
                document.getElementById("unlockBtn").classList.remove("hidden");
            });
    }

    function downloadUnlockedPDF() {
        if (unlockedPDFUrl) {
            const downloadLink = document.createElement("a");
            downloadLink.href = unlockedPDFUrl;
            downloadLink.download = "unlocked_CraftMyDoc.pdf";
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
            URL.revokeObjectURL(unlockedPDFUrl);
            unlockedPDFUrl = null;
        }
    }

    function unlockAgain() {
        document.getElementById("downloadSection").classList.add("hidden");
        document.getElementById("uploadSection").classList.remove("hidden");
        document.getElementById("pdfPreviewContainer").classList.add("hidden");
        document.getElementById("unlockBtn").classList.add("hidden");
        document.getElementById("pdfList").innerHTML = "";
        document.getElementById("passwordInput").value = "";
        document.getElementById("pdfInput").value = "";
    }
</script>
@endsection
