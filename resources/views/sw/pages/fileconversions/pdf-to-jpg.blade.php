@extends('sw.layout.master')

@section('title', 'CraftMyDoc - PDF to JPG')
@section('meta_description', 'Convert any PDF file to high-quality JPG images instantly with CraftMyDoc.')
@section('meta_keywords', 'PDF to JPG, Convert PDF, Image from PDF, PDF converter, JPG extractor')

@section('content')
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Convert PDF to JPG Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your PDF and download high-quality JPG images of each page.</p>
        </div>
    </section>

    <section class="py-10 px-4">
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
            @foreach (['Upload PDF', 'Convert to JPG', 'Download Images'] as $i => $step)
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">
                        {{ $i + 1 }}
                    </div>
                    <span class="text-gray-800 font-semibold">{{ $step }}</span>
                </div>
            @endforeach
        </div>

        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md"
            id="uploadSection">
            <p class="text-lg font-medium mb-4">Drop your PDF file here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i>
                Upload PDF
                <input type="file" id="pdfInput" class="hidden" accept="application/pdf" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max file size: 50MB. Only PDF files supported.</p>
        </div>

        <div id="previewContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Preview</h3>
            <div id="previewContent" class="flex flex-wrap justify-center gap-4"></div>
            <div class="text-left mt-4 text-sm text-gray-700">Select pages to download individually, or use the "Download
                All" option below.</div>
        </div>

        <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="convertBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-green-700 hidden">
                <i class="fas fa-image mr-2"></i>
                Convert to JPG
            </button>
        </div>

        <div id="downloadSection"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Conversion Successful!</h3>
                <p class="text-gray-600 mt-2">Your JPG images are ready for download.</p>

                <div class="mt-6 text-center w-full max-w-2xl mx-auto">
                    <label class="block mb-2 font-semibold text-gray-700">Select specific pages:</label>
                    <div id="selectPagesContainer" class="flex flex-wrap gap-2 justify-center mb-4"></div>
                    <button id="downloadSelectedBtn"
                        class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800 shadow hidden">
                        <i class="fas fa-download mr-1"></i> Download Selected Pages (ZIP)
                    </button>
                </div>

                <div id="imageDownloads" class="flex flex-wrap justify-center gap-4 mt-4"></div>

                <button id="downloadAllBtn"
                    class="mt-6 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-3 rounded-lg shadow-md hidden">
                    <i class="fas fa-file-archive mr-2"></i>
                    Download All Pages (ZIP)
                </button>

                <div class="flex flex-wrap justify-center mt-6 space-x-4">
                    <button id="convertAgainBtn"
                        class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200"
                        onclick="convertAgain()">
                        <i class="fas fa-sync-alt mr-2"></i>
                        Convert Again
                    </button>
                </div>
            </div>
        </div>

        <!-- Loader (hidden by default) -->
        <div id="loaderSection" class="hidden fixed inset-0 bg-white bg-opacity-75 flex items-center justify-center z-50">
            <div class="text-center">
                <div class="w-16 h-16 border-4 border-blue-500 border-dashed rounded-full animate-spin mx-auto mb-4"></div>
                <p class="text-gray-700 font-semibold text-lg">Converting PDF to JPGE, please wait...</p>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach ([['🖼️', 'Image Conversion', 'Upload your PDF and get high-quality JPG images.'], ['🔐', 'Safe & Private', 'Your files are encrypted and automatically deleted.'], ['📱', 'Works Everywhere', 'Use it on desktop, tablet, or smartphone with ease.']] as $feature)
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
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Convert PDF to JPG</h2>
            <p class="text-lg text-gray-600 mb-8">Convert your PDF pages into clear, high-resolution JPG images in just a
                few steps.</p>
            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach ([['Upload your PDF file', 'Drag & drop or click to browse your PDF document.'], ['Start conversion', 'Click the convert button to turn PDF pages into JPG images.'], ['Download your images', 'Download each JPG or get them all in a ZIP archive.']] as $index => $step)
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

            @include('sw.components.tools')
        </div>
    </section>


    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script>
        let pdfDoc = null;
        let fileNameBase = "converted";
        const pdfInput = document.getElementById("pdfInput");
        const previewContainer = document.getElementById("previewContainer");
        const previewContent = document.getElementById("previewContent");
        const convertBtn = document.getElementById("convertBtn");
        const downloadSection = document.getElementById("downloadSection");
        const downloadAllBtn = document.getElementById("downloadAllBtn");
        const downloadSelectedBtn = document.getElementById("downloadSelectedBtn");
        const imageDownloads = document.getElementById("imageDownloads");
        const selectPagesContainer = document.getElementById("selectPagesContainer");
        const zip = new JSZip();
        let allImages = [];

        pdfInput.addEventListener("change", async function () {
            const file = this.files[0];
            if (!file || file.type !== "application/pdf") return alert("Please upload a valid PDF.");
            fileNameBase = file.name.replace(/\.[^/.]+$/, "").replace(/\s+/g, "_");

            const reader = new FileReader();
            reader.onload = function () {
                const typedarray = new Uint8Array(this.result);
                pdfjsLib.getDocument(typedarray).promise.then(async pdf => {
                    pdfDoc = pdf;
                    previewContent.innerHTML = "";
                    selectPagesContainer.innerHTML = "";
                    for (let i = 1; i <= pdf.numPages; i++) {
                        const page = await pdf.getPage(i);
                        const scale = 3;
                        const viewport = page.getViewport({
                            scale
                        });
                        const canvas = document.createElement("canvas");
                        const context = canvas.getContext("2d");
                        canvas.width = viewport.width;
                        canvas.height = viewport.height;
                        await page.render({
                            canvasContext: context,
                            viewport
                        }).promise;
                        const imgURL = canvas.toDataURL("image/jpeg");

                        const img = document.createElement("img");
                        img.src = imgURL;
                        img.className = "rounded shadow max-w-xs";

                        previewContent.appendChild(img);

                        // Add checkbox for page selection
                        const checkbox = document.createElement("input");
                        checkbox.type = "checkbox";
                        checkbox.value = i;
                        checkbox.className = "form-checkbox h-4 w-4 text-indigo-600";
                        checkbox.checked = true;
                        selectPagesContainer.appendChild(checkbox);
                        const label = document.createElement("label");
                        label.className = "mr-3 text-sm";
                        label.innerHTML = `Page ${i}`;
                        selectPagesContainer.appendChild(label);

                        allImages.push({
                            page: i,
                            dataURL: imgURL
                        });
                    }
                    previewContainer.classList.remove("hidden");
                    convertBtn.classList.remove("hidden");
                });
            };
            reader.readAsArrayBuffer(file);
        });

        convertBtn.addEventListener("click", async function () {
            imageDownloads.innerHTML = "";
            zip.remove("images");
            const folder = zip.folder("images");
            document.getElementById("loaderSection").classList.remove("hidden");

            for (let img of allImages) {
                const imgBlob = await (await fetch(img.dataURL)).blob();
                const fileName = `${fileNameBase}_page_${img.page}.jpg`;

                // Individual download
                const link = document.createElement("a");
                link.href = img.dataURL;
                link.download = fileName;
                link.className =
                    "bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 shadow text-sm";
                link.textContent = `Download Page ${img.page}`;
                imageDownloads.appendChild(link);

                // Add to ZIP
                folder.file(fileName, imgBlob);
            }



            setTimeout(() => {
                previewContainer.classList.add("hidden");
                convertBtn.classList.add("hidden");
                downloadAllBtn.classList.remove("hidden");
                downloadSelectedBtn.classList.remove("hidden");
                downloadSection.classList.remove("hidden");
                convertBtn.classList.add("hidden");
                document.getElementById("loaderSection").classList.add("hidden"); // Hide loader
            }, 2000); // Smooth scroll to download section
        });

        downloadAllBtn.addEventListener("click", function () {
            zip.generateAsync({
                type: "blob"
            }).then(blob => {
                const zipName = `${fileNameBase}_images.zip`;
                const link = document.createElement("a");
                link.href = URL.createObjectURL(blob);
                link.download = zipName;
                link.click();
            });
        });

        downloadSelectedBtn.addEventListener("click", async function () {
            const selectedPages = Array.from(selectPagesContainer.querySelectorAll(
                "input[type=checkbox]:checked")).map(c => parseInt(c.value));
            if (selectedPages.length === 0) return alert("Please select at least one page.");

            const selectedZip = new JSZip();
            const folder = selectedZip.folder("selected_images");

            for (let img of allImages.filter(img => selectedPages.includes(img.page))) {
                const imgBlob = await (await fetch(img.dataURL)).blob();
                folder.file(`${fileNameBase}_page_${img.page}.jpg`, imgBlob);
            }

            selectedZip.generateAsync({
                type: "blob"
            }).then(blob => {
                const zipName = `${fileNameBase}_selected_pages.zip`;
                const link = document.createElement("a");
                link.href = URL.createObjectURL(blob);
                link.download = zipName;
                link.click();
            });
        });

        function convertAgain() {
            window.location.reload();
        }
    </script>
@endsection
