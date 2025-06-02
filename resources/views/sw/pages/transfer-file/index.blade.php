@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Secure File Transfer')

@section('meta_description', 'Transfer files securely and easily with CraftMyDoc.')
@section('meta_keywords', 'Secure File Transfer, File Upload, File Download')

@section('content')
    <!-- Hero Section -->
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Securely Transfer Your Files</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your file and share or download it securely through our fast
                platform.</p>
        </div>
    </section>

    <!-- Step Indicator -->
    <section class="py-10 px-4">
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
            @foreach (['Upload File', 'Transfer Securely', 'Download File'] as $i => $step)
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">
                        {{ $i + 1 }}
                    </div>
                    <span class="text-gray-800 font-semibold">{{ $step }}</span>
                </div>
            @endforeach
        </div>

        <!-- Upload Area -->
        @include('ads.ad1')
        <div id="uploadSection"
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-medium mb-4">Drop your file here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i>
                Upload File
                <input type="file" id="fileInput" class="hidden" onchange="previewFile(event)" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max file size: 100MB. All common file types supported.</p>
        </div>

        <!-- File Preview -->
        <div id="filePreviewContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">File Selected</h3>
            <p id="fileName" class="text-gray-700 font-medium"></p>
        </div>

        <!-- Transfer Button -->
        <div id="transferSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="transferBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all hover:bg-green-700 hover:shadow-lg cursor-pointer hidden"
                onclick="transferFile()">
                <span class="inline-flex items-center">
                    <i class="fas fa-share-square mr-2"></i>
                    Transfer File
                </span>
            </button>
        </div>

        <!-- Download Section -->
        <div class="flex flex-col items-center">
            <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                <i class="fas fa-link text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900">Share Link Ready!</h3>
            <p class="text-gray-600 mt-2">Copy and share this link with anyone:</p>

            <div id="shareLinkContainer" class="mt-4 w-full max-w-xl flex items-center">
                <input id="fileLink" type="text" readonly
                    class="flex-grow px-4 py-2 border rounded-l-md text-gray-700 bg-gray-100" />
                <button onclick="copyToClipboard()"
                    class="bg-indigo-700 hover:bg-indigo-800 text-white px-4 py-2 rounded-r-md">
                    Copy Link
                </button>
            </div>

            <button id="transferAgainBtn"
                class="mt-6 bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200"
                onclick="transferAgain()">
                <i class="fas fa-sync-alt mr-2"></i>
                Transfer Another
            </button>
        </div>


        <!-- Loader -->
        <div id="loaderSection" class="hidden fixed inset-0 bg-white bg-opacity-75 flex items-center justify-center z-50">
            <div class="text-center">
                <div class="w-16 h-16 border-4 border-blue-500 border-dashed rounded-full animate-spin mx-auto mb-4"></div>
                <p class="text-gray-700 font-semibold text-lg">Transferring your file, please wait...</p>
            </div>
        </div>
    </section>

    <script>
        let fileBlobUrl = null;

        function previewFile(event) {
            const file = event.target.files[0];
            if (file) {
                document.getElementById("fileName").textContent = file.name;
                document.getElementById("filePreviewContainer").classList.remove("hidden");
                document.getElementById("transferBtn").classList.remove("hidden");
            }
        }

        function transferFile() {
            const fileInput = document.getElementById('fileInput');
            if (fileInput.files.length === 0) {
                alert("Please upload a file first.");
                return;
            }

            document.getElementById("loaderSection").classList.remove("hidden");
            document.getElementById("uploadSection").classList.add("hidden");
            document.getElementById("filePreviewContainer").classList.add("hidden");
            document.getElementById("transferBtn").classList.add("hidden");

            const csrfToken = CSRF;
            const formData = new FormData();
            formData.append("_token", csrfToken);
            formData.append("file", fileInput.files[0]);

            fetch("{{ route('transfer-file.send') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken
                },
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (!data.success) throw new Error("Upload failed.");

                    const linkContainer = document.getElementById("shareLinkContainer");
                    document.getElementById("fileLink").value = data.file_url;

                    setTimeout(() => {
                        document.getElementById("loaderSection").classList.add("hidden");
                        document.getElementById("downloadSection").classList.remove("hidden");
                        document.getElementById("downloadSection").scrollIntoView({ behavior: "smooth" });
                    }, 2000);
                })
                .catch(error => {
                    alert("An error occurred.");
                    document.getElementById("loaderSection").classList.add("hidden");
                    document.getElementById("uploadSection").classList.remove("hidden");
                    document.getElementById("filePreviewContainer").classList.remove("hidden");
                    document.getElementById("transferBtn").classList.remove("hidden");
                });
        }

        function downloadFile() {
            if (fileBlobUrl) {
                const fileInput = document.getElementById("fileInput");
                let fileName = "transferred_file";
                if (fileInput.files.length > 0) {
                    fileName = fileInput.files[0].name;
                }
                const downloadLink = document.createElement("a");
                downloadLink.href = fileBlobUrl;
                downloadLink.download = fileName;
                document.body.appendChild(downloadLink);
                downloadLink.click();
                document.body.removeChild(downloadLink);
                URL.revokeObjectURL(fileBlobUrl);
                fileBlobUrl = null;
            }
        }

        function transferAgain() {
            document.getElementById("downloadSection").classList.add("hidden");
            document.getElementById("uploadSection").classList.remove("hidden");
            document.getElementById("filePreviewContainer").classList.add("hidden");
            document.getElementById("transferBtn").classList.add("hidden");
            document.getElementById("fileInput").value = "";
        }

        function copyToClipboard() {
            const input = document.getElementById("fileLink");
            input.select();
            input.setSelectionRange(0, 99999); // Mobile support
            document.execCommand("copy");
            alert("Link copied to clipboard!");
        }

    </script>

    <!-- Features & Info Sections (Same as before, just change text if needed) -->
    @include('ads.ad1')
    @include('sw.components.tools')
@endsection
