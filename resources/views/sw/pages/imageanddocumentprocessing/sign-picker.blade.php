@extends('sw.layout.master')

@section('title', 'DocLover - Sign Picker')

@section('meta_description', 'Easily extract signatures from any document or image using advanced processing.')
@section('meta_keywords', 'Sign Picker, Extract Signature, Digital Signature Tool, Image to Signature, Signature Extraction')

@section('content')
<section class="pt-12 px-4 bg-gray-50">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-gray-800">Extract Signature from Image</h2>
        <p class="text-lg text-gray-600 mt-3">Upload your image and pick the signature cleanly using our advanced tool.</p>
    </div>
</section>

<section class="py-10 px-4">
    <div class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">1</div>
            <span class="text-gray-800 font-semibold">Upload Image</span>
        </div>
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">2</div>
            <span class="text-gray-800 font-semibold">Detect Signature</span>
        </div>
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold">3</div>
            <span class="text-gray-800 font-semibold">Download or Use</span>
        </div>
    </div>

    <div class="border-2 border-dashed border-gray-300 rounded-2xl p-10 max-w-3xl mx-auto text-center bg-white shadow-md" id="uploadSection">
        <p class="text-lg font-medium mb-4">Drop your image file here <span class="text-gray-500">or</span></p>
        <label class="inline-flex items-center bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md cursor-pointer hover:bg-indigo-800">
            <i class="fas fa-upload mr-2"></i>
            Upload Image
            <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)" />
        </label>
        <p class="text-sm text-gray-500 mt-4">Max file size: 25MB. Supports PNG, JPG, JPEG, BMP.</p>
    </div>

    <div id="imagePreviewContainer" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6">
        <h3 class="text-xl font-bold text-gray-900 mb-4">Image Preview</h3>
        <div class="border-2 border-gray-300 rounded-lg overflow-hidden">
            <img id="imagePreview" class="w-full max-h-96 object-contain" />
        </div>
    </div>

    <div id="convertSection" class="mt-8 max-w-3xl mx-auto text-center">
        <button id="convertBtn" class="bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-green-700 hidden" onclick="extractSignature()">
            <i class="fas fa-pen-nib mr-2"></i>
            Extract Signature
        </button>
    </div>

    <div id="downloadSection" class="hidden mt-8 max-w-3xl mx-auto text-center bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
        <h3 class="text-xl font-bold text-gray-900">Signature Extracted!</h3>
        <p class="text-gray-600 mt-2">Below is your extracted signature. You can download it directly.</p>
        <div class="mt-4">
            <img id="signatureResult" class="mx-auto max-w-full rounded border border-gray-300" />
        </div>
        <div class="flex flex-wrap justify-center mt-6 space-x-4">
            <button class="mt-4 bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700" onclick="downloadSignature()">
                <i class="fas fa-download mr-2"></i>
                Download Signature
            </button>
            <button class="mt-4 bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800" onclick="convertAgain()">
                <i class="fas fa-sync-alt mr-2"></i>
                Pick Another
            </button>
        </div>
    </div>
</section>

<!-- Additional Info -->
<section class="py-18 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            @foreach ([['🖋️', 'Signature Focused', 'Isolate and extract signatures only from documents.'], ['🔒', 'No Data Stored', 'We don’t keep your files.'], ['⚙️', 'Smart Detection', 'Works well with scanned or digital documents.']] as $feature)
                <div class="p-6 rounded-lg">
                    <div class="text-4xl">{{ $feature[0] }}</div>
                    <h3 class="text-xl font-bold text-gray-900 mt-4">{{ $feature[1] }}</h3>
                    <p class="text-gray-600 mt-2">{{ $feature[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- How it Works -->
<section class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-4">How to Pick Signature from Image</h2>
        <p class="text-lg text-gray-600 mb-8">Just upload, extract, and use your signature. It's that simple.</p>

        <div class="text-left max-w-2xl mx-auto">
            <ol class="space-y-6 list-none">
                @foreach ([['Upload an image', 'Choose an image with your signature.'], ['Click Extract Signature', 'We’ll isolate the signature cleanly.'], ['Download it', 'Save your extracted signature as an image.']] as $index => $step)
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

<!-- Rating + Tools -->
<section class="py-12 bg-gray-100">
    <div class="bg-white p-6 md:p-12">
        <div class="text-center mb-8">
            <h2 class="text-xl font-semibold text-gray-800">Rate this tool</h2>
            <div class="flex items-center justify-center mt-2 space-x-1 text-yellow-500">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <span class="text-gray-700 ml-2 font-medium">4.9 / 5 - 70,000+ users</span>
            </div>
        </div>
        @include('sw.components.tools')
    </div>
</section>

<script>
    let signatureData = '';

    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const fileURL = URL.createObjectURL(file);
            document.getElementById("imagePreview").src = fileURL;
            document.getElementById("imagePreviewContainer").classList.remove("hidden");
            document.getElementById("convertBtn").classList.remove("hidden");
        }
    }

    function extractSignature() {
        const input = document.getElementById("imageInput");
        if (input.files.length === 0) return alert("Upload an image first.");

        const reader = new FileReader();
        reader.onload = function (e) {
            const canvas = document.createElement("canvas");
            const ctx = canvas.getContext("2d");
            const img = new Image();

            img.onload = function () {
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0);

                const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                const data = imageData.data;

                // Convert to black and white (simple thresholding)
                for (let i = 0; i < data.length; i += 4) {
                    const avg = (data[i] + data[i + 1] + data[i + 2]) / 3;
                    const val = avg < 180 ? 0 : 255;
                    data[i] = data[i + 1] = data[i + 2] = val;
                }

                ctx.putImageData(imageData, 0, 0);
                const finalURL = canvas.toDataURL("image/png");
                document.getElementById("signatureResult").src = finalURL;
                document.getElementById("downloadSection").classList.remove("hidden");
                signatureData = finalURL;
            };

            img.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }

    function downloadSignature() {
        const link = document.createElement("a");
        link.href = signatureData;
        link.download = "signature.png";
        link.click();
    }

    function convertAgain() {
        document.getElementById("imageInput").value = "";
        document.getElementById("imagePreviewContainer").classList.add("hidden");
        document.getElementById("convertBtn").classList.add("hidden");
        document.getElementById("downloadSection").classList.add("hidden");
        document.getElementById("signatureResult").src = "";
        signatureData = "";
    }
</script>
@endsection
