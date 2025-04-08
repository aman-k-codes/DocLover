@extends('sw.layout.master')

@section('title', 'DocLover - Remove Image Background')

@section('meta_description', 'Remove the background from any image instantly with DocLover. Free, fast, and easy to use.')
@section('meta_keywords', 'Image background remover, remove background, transparent background, JPG PNG background remover')

@section('content')
<section class="pt-12 px-4 bg-gray-50">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-gray-800">Remove Background from Image</h2>
        <p class="text-lg text-gray-600 mt-3">Upload your image and get a transparent version instantly.</p>
    </div>
</section>

<section class="py-10 px-4">
    <div class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
        @foreach (['Upload Image', 'Remove Background', 'Download Image'] as $i => $step)
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">{{ $i + 1 }}</div>
            <span class="text-gray-800 font-semibold">{{ $step }}</span>
        </div>
        @endforeach
    </div>

    <div class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md" id="uploadSection">
        <p class="text-lg font-medium mb-4">Drop your image here <span class="text-gray-500">or</span></p>
        <label class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
            <i class="fas fa-upload mr-2"></i> Upload Image
            <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)" />
        </label>
        <p class="text-sm text-gray-500 mt-4">Max file size: 25MB. Supported: PNG, JPG, JPEG.</p>
    </div>

    <div id="imagePreviewContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
        <h3 class="text-xl font-bold text-gray-900 mb-4">Image Preview</h3>
        <div class="border-2 border-gray-300 rounded-lg overflow-hidden">
            <img id="imagePreview" class="w-full max-h-96 object-contain" />
        </div>
    </div>

    <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
        <button id="removeBgBtn" class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-green-700 hidden" onclick="removeBackground()">
            <i class="fas fa-magic mr-2"></i> Remove Background
        </button>
    </div>

    <div id="downloadSection" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
        <h3 class="text-xl font-bold text-gray-900">Background Removed!</h3>
        <p class="text-gray-600 mt-2">Your transparent image is ready for download.</p>
        <div class="flex flex-wrap justify-center mt-6 space-x-4">
            <button id="downloadBtn" class="mt-4 bg-green-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-700" onclick="downloadTransparentImage()">
                <i class="fas fa-download mr-2"></i> Download Image
            </button>
            <button id="convertAgainBtn" class="mt-4 bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800" onclick="convertAgain()">
                <i class="fas fa-sync-alt mr-2"></i> Remove Another
            </button>
        </div>
    </div>
</section>

<!-- Features -->
<section class="py-18 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            @foreach ([['🎯', 'Accurate Background Removal', 'Cleanly cut out background from your image.'], ['🔐', 'Secure Processing', 'Your images are never stored or shared.'], ['⚡', 'Instant Output', 'Get your result within seconds.']] as $feature)
                <div class="p-6 rounded-lg">
                    <div class="text-4xl">{{ $feature[0] }}</div>
                    <h3 class="text-xl font-bold text-gray-900 mt-4">{{ $feature[1] }}</h3>
                    <p class="text-gray-600 mt-2">{{ $feature[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- How to -->
<section class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Remove Image Background</h2>
        <p class="text-lg text-gray-600 mb-8">Follow these simple steps to make your image background transparent.</p>
        <div class="text-left max-w-2xl mx-auto">
            <ol class="space-y-6 list-none">
                @foreach ([['Upload your image', 'Choose JPG or PNG file.'], ['Click “Remove Background”', 'AI will detect and erase the background.'], ['Download result', 'Get your transparent PNG file.']] as $index => $step)
                    <li class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-indigo-600 text-white font-bold rounded-full">
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

<!-- Rating & Tools -->
<section class="py-12 bg-gray-100">
    <div class="bg-white p-6 md:p-12">
        <div class="text-center mb-8">
            <h2 class="text-xl font-semibold text-gray-800">Rate this tool</h2>
            <div class="flex items-center justify-center mt-2 space-x-1 text-yellow-500">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <span class="text-gray-700 ml-2 font-medium">4.9 / 5 - 90,000+ users</span>
            </div>
        </div>
        @include('sw.components.tools')
    </div>
</section>

<script>
    let transparentImageUrl = null;

    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const fileURL = URL.createObjectURL(file);
            document.getElementById("imagePreview").src = fileURL;
            document.getElementById("imagePreviewContainer").classList.remove("hidden");
            document.getElementById("removeBgBtn").classList.remove("hidden");
        }
    }

    function removeBackground() {
        const fileInput = document.getElementById('imageInput');
        if (fileInput.files.length === 0) {
            alert("Please upload an image file first.");
            return;
        }

        const file = fileInput.files[0];
        const formData = new FormData();
        formData.append('image', file);

        // Replace below with your actual Laravel route that handles background removal
        fetch("{{ route('background.remove') }}", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(response => response.blob())
        .then(blob => {
            transparentImageUrl = URL.createObjectURL(blob);
            document.getElementById("downloadSection").classList.remove("hidden");
            document.getElementById("uploadSection").classList.add("hidden");
            document.getElementById("imagePreviewContainer").classList.add("hidden");
            document.getElementById("removeBgBtn").classList.add("hidden");
        })
        .catch(error => {
            alert("Failed to remove background.");
            console.error(error);
        });
    }

    function downloadTransparentImage() {
        if (transparentImageUrl) {
            const link = document.createElement('a');
            link.href = transparentImageUrl;
            link.download = 'transparent_image.png';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            URL.revokeObjectURL(transparentImageUrl);
        }
    }

    function convertAgain() {
        location.reload();
    }
</script>
@endsection
