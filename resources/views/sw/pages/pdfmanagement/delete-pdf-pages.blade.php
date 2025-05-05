@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Delete Pages from PDF')
@section('meta_description', 'Easily delete pages from your PDF files with CraftMyDoc.')
@section('meta_keywords', 'Delete PDF Pages, Remove PDF Pages, Edit PDF Files, CraftMyDoc')

@section('content')
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Delete Pages from PDFs Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your PDF and easily remove unwanted pages in seconds.</p>
        </div>
    </section>

    <section class="py-10 px-4">
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
            @foreach (['Upload PDF', 'Select Pages to Delete', 'Download Updated PDF'] as $i => $step)
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
            <p class="text-lg font-medium mb-4">Drop your PDF here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i>
                Upload PDF
                <input type="file" id="pdfInput" class="hidden" accept="application/pdf" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max size: 100MB. Only PDF files supported.</p>
        </div>

        <div id="previewContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">PDF Loaded</h3>
            <p id="pdfPages" class="text-sm text-gray-700 mb-4"></p>
            <label for="pageRange" class="text-sm text-gray-700">Enter page numbers to delete (e.g., 2, 5-7):</label>
            <input type="text" id="pageRange" class="mt-2 p-2 border rounded" placeholder="Pages to delete..." />
        </div>

        <div id="splitSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="splitBtn"
                class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-red-700 hidden">
                <i class="fas fa-trash-alt mr-2"></i>
                Delete Pages
            </button>
        </div>

        <div id="downloadSection"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Pages Deleted Successfully!</h3>
                <p class="text-gray-600 mt-2">Your updated PDF is ready for download.</p>

                <a id="downloadSplitBtn" href="#"
                    class="mt-6 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-3 rounded-lg shadow-md">
                    <i class="fas fa-download mr-2"></i>
                    Download PDF
                </a>

                <div class="flex flex-wrap justify-center mt-6 space-x-4">
                    <button id="splitAgainBtn" onclick="splitAgain()"
                        class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200">
                        <i class="fas fa-sync-alt mr-2"></i>
                        Delete Pages from Another PDF
                    </button>
                </div>
            </div>
        </div>

        <!-- Loader (hidden by default) -->
        <div id="loaderSection" class="hidden fixed inset-0 bg-white bg-opacity-75 flex items-center justify-center z-50">
            <div class="text-center">
                <div class="w-16 h-16 border-4 border-blue-500 border-dashed rounded-full animate-spin mx-auto mb-4"></div>
                <p class="text-gray-700 font-semibold text-lg">Deleting pages from your PDF, please wait...</p>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach ([['🗑️', 'Delete Pages Easily', 'Remove any page from your PDF effortlessly.'], ['🔐', 'Private & Secure', 'Files are encrypted and automatically deleted.'], ['⚡', 'Fast & Simple', 'Edit your PDF online without installing software.']] as $feature)
                    <div class="p-6 rounded-lg">
                        <div class="text-4xl">{{ $feature[0] }}</div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4">{{ $feature[1] }}</h3>
                        <p class="text-gray-600 mt-2">{{ $feature[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How to Delete Pages -->
    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Delete Pages from a PDF</h2>
            <p class="text-lg text-gray-600 mb-8">Easily remove unwanted pages from your PDF document in three simple steps.
            </p>
            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach ([['Upload your PDF', 'Select the PDF you want to edit.'], ['Choose pages to delete', 'Enter page numbers you want to remove.'], ['Download the updated PDF', 'Save your clean PDF without the deleted pages.']] as $index => $step)
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
        let file;
        const pdfInput = document.getElementById("pdfInput");
        const previewContainer = document.getElementById("previewContainer");
        const pdfPages = document.getElementById("pdfPages");
        const splitBtn = document.getElementById("splitBtn");
        const downloadSection = document.getElementById("downloadSection");
        const downloadSplitBtn = document.getElementById("downloadSplitBtn");

        pdfInput.addEventListener("change", function () {
            file = this.files[0];
            if (!file) return alert("Please select a PDF file.");

            const reader = new FileReader();
            reader.onload = function (event) {
                const pdfBytes = new Uint8Array(event.target.result);
                PDFLib.PDFDocument.load(pdfBytes).then(function (pdfDoc) {
                    pdfPages.innerHTML = `This PDF has ${pdfDoc.getPageCount()} pages.`;
                    previewContainer.classList.remove("hidden");
                    splitBtn.classList.remove("hidden");
                });
            };
            reader.readAsArrayBuffer(file);
        });

        splitBtn.addEventListener("click", async function () {
            const pageRange = document.getElementById("pageRange").value.trim();
            if (!pageRange) return alert("Please enter pages to delete.");

            // Show loader
            document.getElementById("loaderSection").classList.remove("hidden");

            const deleteRanges = pageRange.split(",").map(r => r.split("-").map(Number));
            const deletePages = new Set();
            deleteRanges.forEach(range => {
                if (range.length === 1) {
                    deletePages.add(range[0] - 1);
                } else {
                    for (let i = range[0] - 1; i <= range[1] - 1; i++) {
                        deletePages.add(i);
                    }
                }
            });

            const pdfBytes = await file.arrayBuffer();
            const pdf = await PDFLib.PDFDocument.load(pdfBytes);
            const updatedPdf = await PDFLib.PDFDocument.create();

            const totalPages = pdf.getPageCount();
            for (let i = 0; i < totalPages; i++) {
                if (!deletePages.has(i)) {
                    const [copiedPage] = await updatedPdf.copyPages(pdf, [i]);
                    updatedPdf.addPage(copiedPage);
                }
            }

            const newPdfBytes = await updatedPdf.save();
            const blob = new Blob([newPdfBytes], { type: 'application/pdf' });
            const url = URL.createObjectURL(blob);

            downloadSplitBtn.href = url;
            downloadSection.classList.remove("hidden");
            splitBtn.classList.add("hidden");

            setTimeout(() => {
                previewContainer.classList.add("hidden");
                splitBtn.classList.add("hidden");
                downloadSection.classList.remove("hidden");
                document.getElementById("loaderSection").classList.add("hidden"); // Hide loader
            }, 2000); // Smooth scroll to download section
        });

        function splitAgain() {
            window.location.reload();
        }
    </script>
@endsection
