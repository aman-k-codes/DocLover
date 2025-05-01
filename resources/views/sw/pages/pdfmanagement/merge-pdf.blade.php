@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Merge PDFs')
@section('meta_description', 'Easily combine multiple PDF files into a single document with CraftMyDoc.')
@section('meta_keywords', 'Merge PDF, Combine PDFs, PDF Merger, Join PDF files, CraftMyDoc')

@section('content')
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Merge PDFs Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload multiple PDF files and combine them into one seamless document.</p>
        </div>
    </section>

    <section class="py-10 px-4">
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
            @foreach (['Upload PDFs', 'Arrange Order', 'Merge & Download'] as $i => $step)
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
            <p class="text-lg font-medium mb-4">Drop your PDF files here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i>
                Upload PDFs
                <input type="file" id="pdfInput" class="hidden" accept="application/pdf" multiple />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max total size: 100MB. Only PDF files supported.</p>
        </div>

        <div id="previewContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Files to Merge</h3>
            <div id="fileList" class="flex flex-col gap-2 items-center"></div>
            <div class="text-left mt-4 text-sm text-gray-700">Drag to arrange the order of merging.</div>
        </div>

        <div id="mergeSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="mergeBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-green-700 hidden">
                <i class="fas fa-compress-arrows-alt mr-2"></i>
                Merge PDFs
            </button>
        </div>

        <div id="downloadSection"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Merge Successful!</h3>
                <p class="text-gray-600 mt-2">Your merged PDF is ready for download.</p>

                <a id="downloadMergedBtn" href="#"
                    class="mt-6 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-3 rounded-lg shadow-md">
                    <i class="fas fa-download mr-2"></i>
                    Download Merged PDF
                </a>

                <div class="flex flex-wrap justify-center mt-6 space-x-4">
                    <button id="mergeAgainBtn" onclick="mergeAgain()"
                        class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200">
                        <i class="fas fa-sync-alt mr-2"></i>
                        Merge More PDFs
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach ([['📄', 'Combine Files', 'Upload multiple PDFs and merge them in seconds.'], ['🔐', 'Safe & Secure', 'Files are encrypted and automatically deleted.'], ['⚡', 'Fast & Easy', 'Merge PDFs online without software installation.']] as $feature)
                    <div class="p-6 rounded-lg">
                        <div class="text-4xl">{{ $feature[0] }}</div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4">{{ $feature[1] }}</h3>
                        <p class="text-gray-600 mt-2">{{ $feature[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How to Merge -->
    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Merge PDFs</h2>
            <p class="text-lg text-gray-600 mb-8">Combine multiple PDF documents into one with just a few clicks.</p>
            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach ([['Upload your PDFs', 'Select multiple PDF files from your device.'], ['Arrange your files', 'Drag & drop to reorder them as needed.'], ['Merge and download', 'Click "Merge" and save your combined PDF.']] as $index => $step)
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
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="text-gray-700 ml-2 font-medium">4.8 / 5 - 120,000+ users</span>
                </div>
            </div>

            @include('sw.components.tools')
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.17.1/pdf-lib.min.js"></script>

    <script>
        let files = [];
const pdfInput = document.getElementById("pdfInput");
const previewContainer = document.getElementById("previewContainer");
const fileList = document.getElementById("fileList");
const mergeBtn = document.getElementById("mergeBtn");
const downloadSection = document.getElementById("downloadSection");
const downloadMergedBtn = document.getElementById("downloadMergedBtn");

pdfInput.addEventListener("change", function() {
    files = Array.from(this.files);
    if (files.length === 0) return alert("Please select at least one PDF file.");

    fileList.innerHTML = '';
    files.forEach((file, index) => {
        const div = document.createElement("div");
        div.className = "p-2 bg-gray-100 rounded w-full flex items-center justify-between";
        div.draggable = true;
        div.dataset.index = index;
        div.innerHTML =
            `<span>${file.name}</span> <span class="text-xs text-gray-500">Drag to reorder</span>`;
        fileList.appendChild(div);
    });

    previewContainer.classList.remove("hidden");
    mergeBtn.classList.remove("hidden");
});

mergeBtn.addEventListener("click", async function() {
    if (files.length < 2) return alert("Please select at least two PDF files to merge.");

    const mergedPdf = await PDFLib.PDFDocument.create();

    for (let file of files) {
        const bytes = await file.arrayBuffer();

        let pdf;
        try {
            pdf = await PDFLib.PDFDocument.load(bytes);
        } catch (e) {
            if (e.message.includes('encrypted')) {
                const password = prompt("This PDF is encrypted. Please enter the password:");
                try {
                    pdf = await PDFLib.PDFDocument.load(bytes, { password });
                } catch (e) {
                    alert("Failed to decrypt the PDF. Please check the password.");
                    return;
                }
            } else {
                alert("An error occurred while loading the PDF.");
                return;
            }
        }

        const copiedPages = await mergedPdf.copyPages(pdf, pdf.getPageIndices());
        copiedPages.forEach((page) => mergedPdf.addPage(page));
    }

    const mergedBytes = await mergedPdf.save();
    const blob = new Blob([mergedBytes], { type: 'application/pdf' });
    const url = URL.createObjectURL(blob);

    downloadMergedBtn.href = url;
    downloadSection.classList.remove("hidden");
    mergeBtn.classList.add("hidden");
});

    </script>
@endsection
