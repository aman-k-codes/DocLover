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

    <section class="py-10 px-4">
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
            @foreach (['Upload Image', 'Crop the Image', 'Download Cropped Image'] as $i => $step)
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">
                        {{ $i + 1 }}
                    </div>
                    <span class="text-gray-800 font-semibold">{{ $step }}</span>
                </div>
            @endforeach
        </div>

        <div id="uploadSection"
            class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
            <p class="text-lg font-medium mb-4">Drop your image here <span class="text-gray-500">or</span></p>
            <label
                class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
                <i class="fas fa-upload mr-2"></i>
                Upload Image
                <input type="file" id="imageCropInput" class="hidden" accept="image/*" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Supported formats: JPG, PNG, GIF. Max size: 10MB.</p>
        </div>

        <div id="cropperContainer"
            class=" hidden mt-8 max-w-6xl mx-auto bg-white shadow-lg rounded-2xl p-4 sm:p-6 flex flex-col lg:flex-row gap-6">

            <!-- Left Panel (Crop Sizes) -->
            <div class="w-full lg:w-1/4 space-y-3">
                <h3 class="text-lg font-semibold mb-2">Crop Sizes</h3>
                <!-- Standard Sizes -->
                <button data-size="free" class="aspect-btn bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">Free</button>
                <button data-size="1" class="aspect-btn bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">1:1
                    (Square)</button>
                <button data-size="4:3" class="aspect-btn bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">4:3</button>
                <button data-size="16:9" class="aspect-btn bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">16:9</button>
                <button data-size="3:2" class="aspect-btn bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">3:2</button>
                <button data-size="2:3" class="aspect-btn bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">2:3</button>
                <button data-size="21:9" class="aspect-btn bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">21:9</button>

                <!-- Custom Sizes -->
                <h4 class="text-md font-semibold pt-4 border-t border-gray-200">Custom Sizes</h4>
                <button data-px="413x531"
                    class="px-btn w-full bg-indigo-100 hover:bg-indigo-200 px-4 py-2 rounded-md">Passport (413x531)</button>
                <button data-px="826x1062"
                    class="px-btn w-full bg-indigo-100 hover:bg-indigo-200 px-4 py-2 rounded-md">Aadhar (826x1062)</button>
                <button data-px="1010x630" class="px-btn w-full bg-indigo-100 hover:bg-indigo-200 px-4 py-2 rounded-md">PAN
                    (1010x630)</button>
                <button data-px="150x150"
                    class="px-btn w-full bg-indigo-100 hover:bg-indigo-200 px-4 py-2 rounded-md">Thumbnail
                    (150x150)</button>
            </div>

            <!-- Right Panel (Preview + Transform) -->
            <div class="w-full lg:w-3/4">
                <!-- Transform Buttons -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 mb-4">
                    <button id="rotateLeft" class="w-full bg-yellow-100 hover:bg-yellow-200 px-4 py-2 rounded-md">
                        <i class="fas fa-undo-alt mr-2"></i>Rotate Left
                    </button>
                    <button id="rotateRight" class="w-full bg-yellow-100 hover:bg-yellow-200 px-4 py-2 rounded-md">
                        <i class="fas fa-redo-alt mr-2"></i>Rotate Right
                    </button>
                    <button id="flipHorizontal" class="w-full bg-pink-100 hover:bg-pink-200 px-4 py-2 rounded-md">
                        <i class="fas fa-arrows-alt-h mr-2"></i>Flip Horizontal
                    </button>
                    <button id="flipVertical" class="w-full bg-pink-100 hover:bg-pink-200 px-4 py-2 rounded-md">
                        <i class="fas fa-arrows-alt-v mr-2"></i>Flip Vertical
                    </button>
                </div>

                <!-- Image Preview -->
                <div class="overflow-hidden border rounded-lg w-full max-h-[500px]">
                    <img id="imagePreview" src="{{ asset('public/assets/imgs/resume-hero.svg') }}"
                        class="mx-auto max-w-full h-auto" />
                </div>

                <!-- Action Buttons -->
                <div class="mt-6 flex flex-col sm:flex-row justify-center gap-4">
                    <button id="cropButton"
                        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-all">
                        Crop & Proceed
                    </button>
                    <button id="convertAgainBtn"
                        class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200"
                        onclick="location.reload();">
                        <i class="fas fa-sync-alt mr-2"></i>Upload Again
                    </button>
                </div>
            </div>
        </div>

    </section>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

    <script>
        let cropper;
        const uploadSection = document.getElementById("uploadSection");
        const imageCropInput = document.getElementById("imageCropInput");
        const imagePreview = document.getElementById("imagePreview");
        const cropperContainer = document.getElementById("cropperContainer");
        const cropButton = document.getElementById("cropButton");
        const aspectButtons = document.querySelectorAll(".aspect-btn");
        const pxButtons = document.querySelectorAll(".px-btn");

        imageCropInput.addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (!file || !file.type.startsWith("image/")) return;

            const reader = new FileReader();
            reader.onload = function (e) {
                uploadSection.classList.add("hidden");
                cropperContainer.classList.remove("hidden");
                imagePreview.src = e.target.result;

                imagePreview.onload = () => {
                    if (cropper) cropper.destroy();
                    cropper = new Cropper(imagePreview, {
                        aspectRatio: NaN,
                        viewMode: 1,
                        autoCropArea: 1,
                        responsive: true
                    });
                };
            };
            reader.readAsDataURL(file);
        });

        aspectButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                if (!cropper) return;

                const val = btn.dataset.size;
                let ratio = NaN;

                if (val === "free") {
                    ratio = NaN;
                } else if (val.includes(":")) {
                    const parts = val.split(":");
                    ratio = parseFloat(parts[0]) / parseFloat(parts[1]);
                } else {
                    ratio = parseFloat(val);
                }

                cropper.setAspectRatio(isNaN(ratio) ? NaN : ratio);
            });
        });

        pxButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                if (!cropper) return;

                const px = btn.dataset.px.split("x");
                const width = parseInt(px[0]);
                const height = parseInt(px[1]);

                cropper.setAspectRatio(width / height);
            });
        });

        cropButton.addEventListener("click", function () {
            if (!cropper) return;

            const canvas = cropper.getCroppedCanvas({
                fillColor: '#fff',
                imageSmoothingEnabled: true,
                imageSmoothingQuality: 'high'
            });

            if (!canvas) return;
            cropperContainer.classList.add("hidden");
            canvas.toBlob(function (blob) {
                if (!blob) return;

                // Convert blob to File
                const file = new File([blob], "cropped_image.png", { type: "image/png" });

                // Create a DataTransfer to simulate file input selection
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(file);
                imageInput.files = dataTransfer.files;

                // Manually trigger the onchange event
                imageInput.dispatchEvent(new Event('change'));


            }, "image/png");

        });

        let scaleX = 1;
        let scaleY = 1;

        document.getElementById('rotateLeft').addEventListener('click', () => {
            if (cropper) cropper.rotate(-90);
        });

        document.getElementById('rotateRight').addEventListener('click', () => {
            if (cropper) cropper.rotate(90);
        });

        document.getElementById('flipHorizontal').addEventListener('click', () => {
            if (cropper) {
                scaleX = -scaleX;
                cropper.scaleX(scaleX);
            }
        });

        document.getElementById('flipVertical').addEventListener('click', () => {
            if (cropper) {
                scaleY = -scaleY;
                cropper.scaleY(scaleY);
            }
        });

    </script>

    <!-- Upload Section -->
    <section class="py-10 px-4">
        <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)" />

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
            <div class="flex justify-center">
                <div
                    class="border-2 flex justify-center w-1/2 border-gray-300 rounded-lg overflow-hidden bg-white relative">
                    <canvas id="canvasPreview" class="max-w-47 max-h-96 bg-blue-700"></canvas>
                </div>
            </div>

            <!-- Background Color Picker -->
            <div class="mt-4">
                <label class="block text-gray-700 mb-2 font-semibold">Choose Background Color:</label>
                <input type="color" id="bgColorPicker" value="#ffffff" onchange="changeBackgroundColor()"
                    class="border-2 rounded px-2 py-1">
            </div>

            <!-- DPI Setting -->
            <div class="mt-6">
                <label class="block text-gray-700 mb-2 font-semibold">Set DPI (Dots Per Inch):</label>
                <input type="number" id="dpiInput" value="300" min="72" max="1200"
                    class="border-2 rounded px-3 py-2 text-center w-28 font-semibold">
                <p class="text-sm text-gray-500 mt-1">Recommended: 300 DPI</p>
            </div>

            <!-- Sheet Customization Options -->
            <div class="mt-6 grid gap-4 grid-cols-1 sm:grid-cols-3">
                <!-- Spacing -->
                <div>
                    <label class="block text-gray-700 mb-1 font-semibold">Spacing (inches):</label>
                    <input type="number" id="spacingInput" value="0.15" step="0.05" min="0"
                        class="border rounded px-3 py-2 w-full">
                </div>

                <!-- Border Thickness -->
                <div>
                    <label class="block text-gray-700 mb-1 font-semibold">Border Thickness (px):</label>
                    <input type="number" id="borderThickness" value="1" step="1" min="0"
                        class="border rounded px-3 py-2 w-full">
                </div>

                <!-- Border Color -->
                <div>
                    <label class="block text-gray-700 mb-1 font-semibold">Border Color:</label>
                    <input type="color" id="borderColor" value="#000000" class="border rounded px-3 py-2 w-full">
                </div>
            </div>



            <!-- Size Options -->
            <div class="mt-6">
                <label class="block text-gray-700 mb-2 font-semibold">Select Passport Size:</label>
                <div class="flex flex-wrap gap-4 justify-center mt-2">
                    <button class="size-button" onclick="selectPassportSize('2x2')">2x2 inch</button>
                    <button class="size-button" onclick="selectPassportSize('35x45')">1.38x1.77 inch</button>
                    <button class="size-button" onclick="selectPassportSize('51x51')">2x2 inch</button>
                    <button class="size-button" onclick="selectPassportSize('45x35')">1.77x1.38 inch</button>
                    <button class="size-button" onclick="selectPassportSize('50x50')">1.97x1.97 inch</button>
                    <button class="size-button" onclick="selectPassportSize('33x48')">1.30x1.89 inch</button>
                    <button class="size-button" onclick="selectPassportSize('40x60')">1.57x2.36 inch</button>
                </div>
            </div>


            <!-- Sheet Size Options -->
            <div class="mt-6">
                <label class="block text-gray-700 mb-2 font-semibold">Select Print Sheet:</label>
                <div class="flex flex-wrap gap-4 justify-center mt-2">
                    <button class="sheet-button" onclick="selectSheetSize('A4')">A4 (8.3x11.7 inch)</button>
                    <button class="sheet-button" onclick="selectSheetSize('4x6')">4x6 inch</button>
                    <button class="sheet-button" onclick="selectSheetSize('5x7')">5x7 inch</button>
                    <button class="sheet-button" onclick="selectSheetSize('8x10')">8x10 inch</button>
                    <button class="sheet-button" onclick="selectSheetSize('Letter')">Letter (8.5x11 inch)</button>

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
            class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <div class="flex flex-col items-center">
                <!-- Success Icon -->
                <div class="w-16 h-16 flex items-center justify-center bg-green-100 text-green-600 rounded-full mb-4">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>

                <!-- Title -->
                <h3 class="text-xl font-bold text-gray-900">Conversion Successful!</h3>
                <p class="text-gray-600 mt-2">Your Passport Photo file is ready for download.</p>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row sm:space-x-4 justify-center mt-6 w-full">
                    <a id="downloadLink"
                        class="cursor-pointer bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow-md transition duration-200 w-full sm:w-auto mb-4 sm:mb-0">
                        <i class="fas fa-download md:mr-2"></i>
                        Download Sheet
                    </a>
                    <button id="convertAgainBtn"
                        class="bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 shadow-md transition duration-200 w-full sm:w-auto">
                        <i class="fas fa-sync-alt md:mr-2"></i>
                        Convert Again
                    </button>
                </div>

            </div>
        </div>

    </section>

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
                        img.onload = function () {
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
            const dpi = parseInt(document.getElementById("dpiInput").value) || 300;

            const sizeMap = {
                "2x2": [2, 2],
                "35x45": [35 / 25.4, 45 / 25.4],
                "45x35": [45 / 25.4, 35 / 25.4],
                "51x51": [51 / 25.4, 51 / 25.4],
                "50x50": [50 / 25.4, 50 / 25.4],
                "33x48": [33 / 25.4, 48 / 25.4],
                "40x60": [40 / 25.4, 60 / 25.4],
            };


            const sheetMap = {
                "A4": [8.27, 11.69],
                "4x6": [4, 6],
                "5x7": [5, 7],
                "8x10": [8, 10],
                "Letter": [8.5, 11],
            };


            const [photoInchW, photoInchH] = sizeMap[selectedPassportSize];
            const [sheetInchW, sheetInchH] = sheetMap[selectedSheetSize];

            const spacingInput = parseFloat(document.getElementById("spacingInput").value) || 0.15;
            const spacing = Math.round(spacingInput * dpi);

            const borderThickness = parseInt(document.getElementById("borderThickness").value) || 1;
            const borderColor = document.getElementById("borderColor").value || "#000";


            const photoWidth = Math.round(photoInchW * dpi);
            const photoHeight = Math.round(photoInchH * dpi);
            const sheetWidth = Math.round(sheetInchW * dpi);
            const sheetHeight = Math.round(sheetInchH * dpi);

            const sheetCanvas = document.createElement("canvas");
            sheetCanvas.width = sheetWidth;
            sheetCanvas.height = sheetHeight;
            const sheetCtx = sheetCanvas.getContext("2d");

            sheetCtx.fillStyle = '#ffffff';
            sheetCtx.fillRect(0, 0, sheetWidth, sheetHeight);

            const totalPhotoWidth = photoWidth + spacing;
            const totalPhotoHeight = photoHeight + spacing;

            const columns = Math.floor((sheetWidth + spacing) / totalPhotoWidth);
            const rows = Math.floor((sheetHeight + spacing) / totalPhotoHeight);

            const offsetX = Math.floor((sheetWidth - (columns * totalPhotoWidth - spacing)) / 2);
            const offsetY = Math.floor((sheetHeight - (rows * totalPhotoHeight - spacing)) / 2);

            for (let y = 0; y < rows; y++) {
                for (let x = 0; x < columns; x++) {
                    const dx = offsetX + x * totalPhotoWidth;
                    const dy = offsetY + y * totalPhotoHeight;

                    // Draw photo
                    sheetCtx.drawImage(canvas, 0, 0, canvas.width, canvas.height, dx, dy, photoWidth, photoHeight);

                    // Draw border
                    sheetCtx.strokeStyle = borderColor;
                    sheetCtx.lineWidth = borderThickness;
                    sheetCtx.strokeRect(dx, dy, photoWidth, photoHeight);
                }
            }

            const finalImage = sheetCanvas.toDataURL("image/png");
            const downloadLink = document.getElementById("downloadLink");
            downloadLink.href = finalImage;
            downloadLink.download = "passport_photos_sheet.png";
            document.getElementById("imagePreviewContainer").classList.add("hidden");
            document.getElementById("downloadSection").classList.remove("hidden");
            document.getElementById("stepSheet").classList.add("active");
            document.getElementById("stepDownload").classList.add("active");

        }
    </script>

    <!-- Custom Style for Buttons -->
    <style>
        .size-button,
        .sheet-button {
            background-color: #f3f4f6;
            padding: 5px 10px;
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

    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach([['📸', 'Fast & Simple', 'Upload your image and get a passport-sized photo instantly.'], ['🔒', 'Highly Secure', 'Your images are processed securely and never stored.'], ['💻', 'Cross-Device Access', 'Works perfectly on desktop, tablet, and mobile.']] as $feature)
                    <div class="p-6 rounded-lg">
                        <div class="text-4xl">{{ $feature[0] }}</div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4">{{ $feature[1] }}</h3>
                        <p class="text-gray-600 mt-2">{{ $feature[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How to Make Passport Photo -->
    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Make Your Passport Photo</h2>
            <p class="text-lg text-gray-600 mb-8">Follow these simple steps to create your passport-size photo with ease.
            </p>
            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach([['Upload your image', 'Drag & drop or browse your device to upload an image.'], ['Adjust photo size', 'Select the size and alignment for the passport photo.'], ['Download your photo', 'Click the download button to get your passport-size photo.']] as $index => $step)
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

@endsection
