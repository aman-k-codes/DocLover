@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Passport Size Photo Maker')
@section('meta_description', 'Create passport size photos with background removal and printing options.')
@section('meta_keywords', 'Passport Photo Maker, Background Remover, A4 Sheet, Photo Printing')

@section('content')

    <!-- Hero Section -->
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Passport Size Photo Maker</h2>
            <p class="text-lg text-gray-600 mt-3">Upload photo, remove background, choose standard sizes and get printable
                sheet!</p>
        </div>
    </section>

    <!-- Step Progress Bar -->
    <section class="mt-8 max-w-3xl mx-auto px-4">
        <div class="flex justify-between items-center text-sm font-medium text-gray-500">
            <div class="step active">Upload</div>
            <div class="flex-1 border-t-2 border-gray-300 mx-2"></div>
            <div class="step" id="stepEdit">Edit</div>
            <div class="flex-1 border-t-2 border-gray-300 mx-2"></div>
            <div class="step" id="stepSheet">Create</div>
            <div class="flex-1 border-t-2 border-gray-300 mx-2"></div>
            <div class="step" id="stepDownload">Download</div>
        </div>
    </section>

    <style>
        .step {
            background-color: #e5e7eb;
            padding: 6px 12px;
            border-radius: 20px;
            color: #374151;
        }

        .step.active {
            background-color: #4f46e5;
            color: white;
        }
    </style>

    <!-- Upload Section -->
    <section class="py-10 px-4">
        <div id="uploadSection"
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-medium mb-4">Drop your photo here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i> Upload Image
                <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Max file size: 25MB. JPG, PNG supported.</p>
        </div>

        <div id="uploadLoader" class="hidden mt-6 text-center">
            <div class="flex justify-center items-center gap-2 text-indigo-700 font-semibold">
                <svg class="animate-spin h-5 w-5 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                    </circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 00-8 8z">
                    </path>
                </svg>
                Uploading...
            </div>
        </div>

        <!-- Preview Section -->
        <div id="imagePreviewContainer"
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Image Preview</h3>
            <div class="border-2 border-gray-300 rounded-lg overflow-hidden bg-white relative">
                <canvas id="canvasPreview" class="w-full max-h-96"></canvas>
            </div>

            <!-- Background Color Picker -->
            <div class="mt-4">
                <label class="block text-gray-700 mb-2 font-semibold">Choose Background Color:</label>
                <input type="color" id="bgColorPicker" value="#ffffff" onchange="changeBackgroundColor()"
                    class="border-2 rounded px-2 py-1">
            </div>

            <!-- Size Options -->
            <div class="mt-6">
                <label class="block text-gray-700 mb-2 font-semibold">Select Passport Size:</label>
                <div class="flex flex-wrap gap-4 justify-center mt-2">
                    <button class="w-20 h-20 size-button" onclick="selectPassportSize('2x2')">2x2 inch</button>
                    <button class="w-[94px] h-[106px] size-button" onclick="selectPassportSize('35x45')">35x45 mm</button>
                    <button class="w-[120px] h-[120px] size-button" onclick="selectPassportSize('51x51')">51x51 mm</button>
                </div>
            </div>

            <!-- Sheet Size Options -->
            <div class="mt-6">
                <label class="block text-gray-700 mb-2 font-semibold">Select Print Sheet:</label>
                <div class="flex flex-wrap gap-4 justify-center mt-2">
                    <button class="sheet-button" onclick="selectSheetSize('A4')">A4 (8.3x11.7 inch)</button>
                    <button class="sheet-button" onclick="selectSheetSize('4x6')">4x6 inch</button>
                </div>
            </div>

            <!-- Create Sheet Button -->
            <div class="mt-8">
                <button id="createSheetBtn" onclick="createSheet()"
                    class="bg-green-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-green-700 shadow-md transition-all hidden">
                    <i class="fas fa-clone mr-2"></i> Create Printable Sheet
                </button>
            </div>
        </div>

        <!-- Download Section -->
        <div id="downloadSection"
            class="hidden mt-10 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Ready to Download!</h3>
            <a id="downloadLink"
                class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200"
                download="passport_photos_sheet.png">
                <i class="fas fa-download mr-2"></i> Download Sheet
            </a>
        </div>
    </section>

    <!-- Custom Style for Buttons -->
    <style>
        .size-button,
        .sheet-button {
            background-color: #f3f4f6;
            padding: 10px 20px;
            border: 2px solid transparent;
            border-radius: 8px;
            font-weight: 600;
            color: #374151;
            transition: all 0.3s;
        }

        .size-button.active,
        .sheet-button.active {
            background-color: #4f46e5;
            color: white;
            border-color: #4f46e5;
        }

        .size-button:hover,
        .sheet-button:hover {
            background-color: #e0e7ff;
        }
    </style>

    <script>
        let originalImage = null;
        let selectedPassportSize = '2x2';
        let selectedSheetSize = 'A4';
        let canvas = document.getElementById("canvasPreview");
        let ctx = canvas.getContext("2d");

        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                document.getElementById("uploadLoader").classList.remove("hidden"); // Show loader

                const formData = new FormData();
                formData.append("image", file);

                fetch("{{ route('remove.background') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: formData
                    })
                    .then(response => response.blob())
                    .then(blob => {
                        const img = new Image();
                        img.onload = function() {
                            canvas.width = img.width;
                            canvas.height = img.height;
                            ctx.fillStyle = document.getElementById("bgColorPicker").value;
                            ctx.fillRect(0, 0, canvas.width, canvas.height);
                            ctx.drawImage(img, 0, 0);
                            originalImage = img;

                            document.getElementById("imagePreviewContainer").classList.remove("hidden");
                            document.getElementById("createSheetBtn").classList.remove("hidden");
                            document.getElementById("stepEdit").classList.add("active");
                            document.getElementById("uploadLoader").classList.add("hidden"); // Hide loader
                        }
                        img.src = URL.createObjectURL(blob);
                    })
                    .catch(error => {
                        alert("Error removing background.");
                        console.error(error);
                        document.getElementById("uploadLoader").classList.add("hidden"); // Hide loader on error
                    });
            }
        }


        function changeBackgroundColor() {
            if (!originalImage) return;
            ctx.fillStyle = document.getElementById("bgColorPicker").value;
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.drawImage(originalImage, 0, 0);
        }

        function selectPassportSize(size) {
            selectedPassportSize = size;
            document.querySelectorAll('.size-button').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
        }

        function selectSheetSize(size) {
            selectedSheetSize = size;
            document.querySelectorAll('.sheet-button').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
        }

        function createSheet() {
            const sizes = {
                "2x2": [600, 600],
                "35x45": [413, 531],
                "51x51": [600, 600]
            };

            const sheets = {
                "A4": [2480, 3508],
                "4x6": [1200, 1800]
            };

            const [photoWidth, photoHeight] = sizes[selectedPassportSize];
            const [sheetWidth, sheetHeight] = sheets[selectedSheetSize];

            let sheetCanvas = document.createElement("canvas");
            sheetCanvas.width = sheetWidth;
            sheetCanvas.height = sheetHeight;
            let sheetCtx = sheetCanvas.getContext("2d");

            sheetCtx.fillStyle = document.getElementById("bgColorPicker").value;
            sheetCtx.fillRect(0, 0, sheetWidth, sheetHeight);

            const columns = Math.floor(sheetWidth / photoWidth);
            const rows = Math.floor(sheetHeight / photoHeight);

            for (let y = 0; y < rows; y++) {
                for (let x = 0; x < columns; x++) {
                    sheetCtx.drawImage(canvas, 0, 0, canvas.width, canvas.height, x * photoWidth, y * photoHeight,
                        photoWidth, photoHeight);
                }
            }

            const finalImage = sheetCanvas.toDataURL("image/png");
            const downloadLink = document.getElementById("downloadLink");
            downloadLink.href = finalImage;
            document.getElementById("downloadSection").classList.remove("hidden");
            document.getElementById("stepSheet").classList.add("active");
            document.getElementById("stepDownload").classList.add("active");
        }
    </script>

@endsection
