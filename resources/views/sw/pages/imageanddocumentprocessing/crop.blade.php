@extends('Layout.master')

@section('title', 'DocLover - Image Cropper')
@section('meta_description', 'Crop your images quickly and easily with DocLover.')
@section('meta_keywords', 'Image Cropper, Crop Image, Online Image Editing')

@section('content')
<!-- Hero Section -->
<section class="pt-12 px-4 bg-gray-50">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-gray-800">Crop Your Images Instantly - Not Complete</h2>
        <p class="text-lg text-gray-600 mt-3">Upload your image, crop it just the way you want, and download it in seconds!</p>
    </div>
</section>

<!-- Upload Section -->
<section class="py-10 px-4">
    <div class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
        @foreach (['Upload Image', 'Crop the Image', 'Download Cropped Image'] as $i => $step)
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">{{ $i + 1 }}</div>
            <span class="text-gray-800 font-semibold">{{ $step }}</span>
        </div>
        @endforeach
    </div>

    <div id="uploadSection" class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md">
        <p class="text-lg font-medium mb-4">Drop your image here <span class="text-gray-500">or</span></p>
        <label class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
            <i class="fas fa-upload mr-2"></i>
            Upload Image
            <input type="file" id="imageInput" class="hidden" accept="image/*" />
        </label>
        <p class="text-sm text-gray-500 mt-4">Supported formats: JPG, PNG, GIF. Max size: 10MB.</p>
    </div>

    <div id="cropperContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
        <h3 class="text-xl font-bold text-gray-900 mb-4">Adjust Crop</h3>

        <div class="mb-4 text-left">
            <label for="aspectRatio" class="font-semibold mr-2">Select Crop Size:</label>
            <select id="aspectRatio" class="border px-3 py-2 rounded-md">
                <option value="NaN">Free</option>
                <option value="1">1:1 (Square)</option>
                <option value="4/3">4:3</option>
                <option value="16/9">16:9</option>
                <option value="3/2">3:2</option>
                <option value="2/3">2:3 (Portrait)</option>
                <option value="21/9">21:9 (Cinematic)</option>
            </select>
        </div>

        <div class="overflow-hidden border rounded-lg">
            <img id="imagePreview" class="mx-auto max-w-full" />
        </div>

        <button id="cropButton" class="mt-6 bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-all">Crop & Download</button>
    </div>
</section>

<!-- Footer -->
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
                <span class="text-gray-700 ml-2 font-medium">4.9 / 5 - 90,000+ users</span>
            </div>
        </div>
        @include('Components.tools')
    </div>
</section>

<!-- CropperJS -->
<link href="https://unpkg.com/cropperjs/dist/cropper.min.css" rel="stylesheet" />
<script src="https://unpkg.com/cropperjs/dist/cropper.min.js"></script>

<!-- Custom JS -->
<script>
    let cropper;
    const imageInput = document.getElementById("imageInput");
    const imagePreview = document.getElementById("imagePreview");
    const cropperContainer = document.getElementById("cropperContainer");
    const aspectSelect = document.getElementById("aspectRatio");
    const cropButton = document.getElementById("cropButton");

    imageInput.addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (!file || !file.type.startsWith("image/")) return;

        const reader = new FileReader();
        reader.onload = function (e) {
            cropperContainer.classList.remove("hidden");
            imagePreview.src = ''; // Reset src
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

    aspectSelect.addEventListener("change", function () {
        if (!cropper) return;
        const val = aspectSelect.value;
        let ratio;

        try {
            ratio = val.includes('/') ? (parseFloat(val.split('/')[0]) / parseFloat(val.split('/')[1])) : parseFloat(val);
        } catch (e) {
            ratio = NaN;
        }

        cropper.setAspectRatio(isNaN(ratio) ? NaN : ratio);
    });

    cropButton.addEventListener("click", function () {
        if (!cropper) return;

        const canvas = cropper.getCroppedCanvas({
            fillColor: '#fff',
            imageSmoothingEnabled: true,
            imageSmoothingQuality: 'high'
        });

        canvas.toBlob(function (blob) {
            const link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.download = "cropped_image.png";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            URL.revokeObjectURL(link.href);
        }, "image/png");
    });
</script>
@endsection
