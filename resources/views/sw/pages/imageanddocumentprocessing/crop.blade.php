@extends('sw.layout.master')

@section('title', 'CraftMyDoc - Image Cropper')
@section('meta_description', 'Crop your images quickly and easily with CraftMyDoc.')
@section('meta_keywords', 'Image Cropper, Crop Image, Online Image Editing')

@section('content')
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Crop Your Images Instantly</h2>
            <p class="text-lg text-gray-600 mt-3">Upload your image, crop it just the way you want, and download it!</p>
        </div>
    </section>

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
                <input type="file" id="imageInput" class="hidden" accept="image/*" />
            </label>
            <p class="text-sm text-gray-500 mt-4">Supported formats: JPG, PNG, GIF. Max size: 10MB.</p>
        </div>

        <div id="cropperContainer"
            class="hidden mt-8 max-w-6xl mx-auto bg-white shadow-lg rounded-2xl p-6 flex flex-col md:flex-row gap-6">
            <div class="md:w-1/4 space-y-3">
                <h3 class="text-lg font-semibold mb-2">Crop Sizes</h3>
                <button data-size="free"
                    class="aspect-btn w-full bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">Free</button>
                <button data-size="1" class="aspect-btn w-full bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">1:1
                    (Square)</button>
                <button data-size="4:3"
                    class="aspect-btn w-full bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">4:3</button>
                <button data-size="16:9"
                    class="aspect-btn w-full bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">16:9</button>
                <button data-size="3:2"
                    class="aspect-btn w-full bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">3:2</button>
                <button data-size="2:3"
                    class="aspect-btn w-full bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">2:3</button>
                <button data-size="21:9"
                    class="aspect-btn w-full bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-md">21:9</button>

                {{-- Custom Sizes --}}
                <h4 class="text-md font-semibold pt-4 border-t border-gray-200">Custom Sizes</h4>
                <button data-px="413x531"
                    class="px-btn w-full bg-indigo-100 hover:bg-indigo-200 px-4 py-2 rounded-md">Passport Size
                    (413x531)</button>
                <button data-px="826x1062"
                    class="px-btn w-full bg-indigo-100 hover:bg-indigo-200 px-4 py-2 rounded-md">Aadhar Card
                    (826x1062)</button>
                <button data-px="1010x630" class="px-btn w-full bg-indigo-100 hover:bg-indigo-200 px-4 py-2 rounded-md">PAN
                    Card (1010x630)</button>
                <button data-px="150x150"
                    class="px-btn w-full bg-indigo-100 hover:bg-indigo-200 px-4 py-2 rounded-md">Thumbnail
                    (150x150)</button>
            </div>

            <div class="md:w-3/4">
                <div class="overflow-hidden border rounded-lg w-full max-h-[500px]">
                    <img id="imagePreview" class="mx-auto max-w-full h-auto" />
                </div>
                <div class="mt-6 flex justify-center">
                    <button id="cropButton"
                        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-all">
                        Crop & Download
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- Features -->
    <section class="py-18 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach([['✂️', 'Fast & Simple', 'Upload your image and crop it easily.'], ['🔒', 'Highly Secure', 'Your images are processed securely and never stored.'], ['💻', 'Cross-Device Access', 'Works perfectly on desktop, tablet, and mobile.']] as $feature)
                    <div class="p-6 rounded-lg">
                        <div class="text-4xl">{{ $feature[0] }}</div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4">{{ $feature[1] }}</h3>
                        <p class="text-gray-600 mt-2">{{ $feature[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How to Crop Image -->
    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Crop Your Image</h2>
            <p class="text-lg text-gray-600 mb-8">Follow these simple steps to crop your image with ease.</p>
            <div class="text-left max-w-2xl mx-auto">
                <ol class="space-y-6 list-none">
                    @foreach([['Upload your image', 'Drag & drop or browse your device to upload an image.'], ['Select crop area', 'Choose the area you want to crop with the tool.'], ['Apply crop', 'Click the crop button to apply the changes to your image.']] as $index => $step)
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


    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

    <script>
        let cropper;
        const imageInput = document.getElementById("imageInput");
        const imagePreview = document.getElementById("imagePreview");
        const cropperContainer = document.getElementById("cropperContainer");
        const cropButton = document.getElementById("cropButton");
        const aspectButtons = document.querySelectorAll(".aspect-btn");
        const pxButtons = document.querySelectorAll(".px-btn");

        imageInput.addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (!file || !file.type.startsWith("image/")) return;

            const reader = new FileReader();
            reader.onload = function (e) {
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

            canvas.toBlob(function (blob) {
                if (!blob) return;

                const link = document.createElement("a");
                link.href = URL.createObjectURL(blob);
                link.download = "cropped_image.png";
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                URL.revokeObjectURL(link.href);

                // Reload the page after download
                location.reload();
            }, "image/png");
        });

    </script>
@endsection
