@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Split PDFs')
@section('meta_description', 'Easily split PDF files into multiple pages with CraftMyDoc.')
@section('meta_keywords', 'Split PDF, PDF Splitter, Split PDF files, CraftMyDoc')

@section('content')
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Split PDFs Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload a PDF and split it into individual pages or specific ranges.</p>
        </div>
    </section>

    <section class="py-10 px-4">
        <div class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
            @foreach (['Upload PDF', 'Choose Pages', 'Split & Download'] as $i => $step)
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">
                        {{ $i + 1 }}
                    </div>
                    <span class="text-gray-800 font-semibold">{{ $step }}</span>
                </div>
            @endforeach
        </div>

        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md" id="uploadSection">
            <p class="text-lg font-medium mb-4">Drop your PDF here <span class="text-gray-500">or</span></p>
            <label class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i>
                Upload PDF
                <input type="file" id="pdfInput" class="hidden" accept="application/pdf" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max size: 100MB. Only PDF files supported.</p>
        </div>

        <div id="previewContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">PDF to Split</h3>
            <p id="pdfPages" class="text-sm text-gray-700 mb-4"></p>
            <label for="pageRange" class="text-sm text-gray-700">Enter the page range to split (e.g., 1-3, 5):</label>
            <input type="text" id="pageRange" class="mt-2 p-2 border rounded" placeholder="Page range..." />
        </div>

        <div id="splitSection" class="mt-8 max-w-3xl mx-auto text-center">
            <button id="splitBtn" class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-green-700 hidden">
                <i class="fas fa-compress-arrows-alt mr-2"></i>
                Split PDF
            </button>
        </div>

        <div id="downloadSection" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Split Successful!</h3>
                <p class="text-gray-600 mt-2">Your split PDF is ready for download.</p>

                <a id="downloadSplitBtn" href="#" class="mt-6 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-3 rounded-lg shadow-md">
                    <i class="fas fa-download mr-2"></i>
                    Download Split PDF
                </a>

                <div class="flex flex-wrap justify-center mt-6 space-x-4">
                    <button id="splitAgainBtn" onclick="splitAgain()" class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200">
                        <i class="fas fa-sync-alt mr-2"></i>
                        Split Another PDF
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Features -->
<section class="py-18 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            @foreach ([['✂️', 'Split PDFs Easily', 'Separate pages from any PDF in seconds.'], ['🔐', 'Secure & Private', 'Your files are encrypted and automatically deleted.'], ['⚡', 'Quick Processing', 'Extract PDF pages without installing software.']] as $feature)
                <div class="p-6 rounded-lg">
                    <div class="text-4xl">{{ $feature[0] }}</div>
                    <h3 class="text-xl font-bold text-gray-900 mt-4">{{ $feature[1] }}</h3>
                    <p class="text-gray-600 mt-2">{{ $feature[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- How to Split -->
<section class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Split a PDF</h2>
        <p class="text-lg text-gray-600 mb-8">Extract specific pages from a PDF document quickly and easily.</p>
        <div class="text-left max-w-2xl mx-auto">
            <ol class="space-y-6 list-none">
                @foreach ([['Upload your PDF', 'Select the PDF file you want to split.'], ['Choose pages', 'Pick the pages you want to extract.'], ['Split and download', 'Click "Split" and save your extracted PDF.']] as $index => $step)
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

        pdfInput.addEventListener("change", function() {
            file = this.files[0];
            if (!file) return alert("Please select a PDF file.");

            const reader = new FileReader();
            reader.onload = function(event) {
                const pdfBytes = new Uint8Array(event.target.result);
                const pdf = PDFLib.PDFDocument.load(pdfBytes);

                pdf.then(function(pdfDoc) {
                    pdfPages.innerHTML = `This PDF has ${pdfDoc.getPageCount()} pages.`;
                    previewContainer.classList.remove("hidden");
                    splitBtn.classList.remove("hidden");
                });
            };
            reader.readAsArrayBuffer(file);
        });

        splitBtn.addEventListener("click", async function() {
            const pageRange = document.getElementById("pageRange").value.trim();
            if (!pageRange) return alert("Please enter a page range.");

            const rangeArray = pageRange.split(",").map(r => r.split("-").map(Number));
            const pdfBytes = await file.arrayBuffer();
            const pdf = await PDFLib.PDFDocument.load(pdfBytes);
            const splitPdf = await PDFLib.PDFDocument.create();

            for (let range of rangeArray) {
                let [start, end] = range;
                start = start - 1; // zero-based index
                end = end ? end - 1 : start; // if no end, just split that page

                const copiedPages = await splitPdf.copyPages(pdf, Array.from({ length: end - start + 1 }, (_, i) => i + start));
                copiedPages.forEach(page => splitPdf.addPage(page));
            }

            const splitBytes = await splitPdf.save();
            const blob = new Blob([splitBytes], { type: 'application/pdf' });
            const url = URL.createObjectURL(blob);

            downloadSplitBtn.href = url;
            downloadSection.classList.remove("hidden");
            splitBtn.classList.add("hidden");
        });
    </script>
@endsection
