{{-- <div class="grid grid-cols-2 md:grid-cols-5 gap-10 text-[15px] text-gray-800">
    <!-- File Conversions -->
    <div>
        <h3 class="text-md font-semibold text-gray-900 mb-4">File Conversions</h3>
        <ul class="space-y-3">
            <li class="flex items-center space-x-2"><i class="fas fa-file-archive text-red-500"></i><a
                    href="{{ route('pdf-to-zip') }}"><span>PDF to
                        ZIP</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-file-word text-blue-500"></i><a
                    href="{{ route('pdf-to-doc') }}"><span>PDF to DOC</span></a>
            </li>
            <li class="flex items-center space-x-2"><i class="fas fa-file-image text-yellow-500"></i><a
                    href="{{ route('pdf-to-jpg') }}"><span>PDF to
                        JPG</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-file-code text-green-600"></i><a
                    href="{{ route('pdf-to-html') }}"><span>PDF to
                        HTML</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-file-excel text-blue-600"></i><a
                    href="{{ route('pdf-to-xl') }}"><span>PDF to
                        XL</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-image text-purple-500"></i><a
                    href="{{ route('jpg-to-png') }}"><span>JPG to PNG</span></a>
            </li>
            <li class="flex items-center space-x-2"><i class="fas fa-image text-indigo-500"></i><a
                    href="{{ route('png-to-jpg') }}"><span>PNG to JPG</span></a>
            </li>
            <li class="flex items-center space-x-2"><i class="fas fa-file-word text-red-500"></i><a
                    href="{{ route('jpg-to-doc') }}"><span>JPG to DOC</span></a>
            </li>
            <li class="flex items-center space-x-2"><i class="fas fa-file-excel text-green-500"></i><a
                    href="{{ route('jpg-to-xl') }}"><span>JPG to
                        XL</span></a></li>
        </ul>
    </div>

    <!-- Image and Document Processing -->
    <div>
        <h3 class="text-md font-semibold text-gray-900 mb-4">Image & Document Processing</h3>
        <ul class="space-y-3">
            <li class="flex items-center space-x-2"><i class="fas fa-crop text-orange-500"></i><a
                    href="{{ route('crop') }}"><span>Crop</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-th text-pink-500"></i><a
                    href="{{ route('collage') }}"><span>Collage</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-expand-arrows-alt text-blue-600"></i><a
                    href="{{ route('resize') }}"><span>Resize</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-id-card text-green-600"></i><a
                    href="{{ route('passport-size-photo') }}"><span>Passport-size Photo</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-magic text-purple-500"></i><a
                    href="{{ route('photo-clarity-enhancement') }}"><span>Photo Clarity Enhancement</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-image text-indigo-600"></i><a
                    href="{{ route('background-change') }}"><span>Background Remover</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-file-alt text-gray-600"></i><a
                    href="{{ route('resume-maker') }}"><span>Resume Maker</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-compress text-red-500"></i><a
                    href="{{ route('photo-size-compression') }}"><span>Photo Size Compression</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-text-height text-blue-600"></i><a
                    href="{{ route('image-to-text-conversion') }}"><span>Image to Text Conversion</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-signature text-green-600"></i><a
                    href="{{ route('sign-picker') }}"><span>Sign Picker</span></a></li>
        </ul>
    </div>

    <!-- Organize PDF -->
    <div>
        <h3 class="text-md font-semibold text-gray-900 mb-4">Organize PDF</h3>
        <ul class="space-y-3">
            <li class="flex items-center space-x-2"><i class="fas fa-paperclip text-orange-500"></i><a
                    href="{{ route('merge-pdf') }}"><span>Merge PDF</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-cut text-pink-500"></i><a
                    href="{{ route('split-pdf') }}"><span>Split PDF</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-sync-alt text-yellow-600"></i><a
                    href="{{ route('rotate-pdf') }}"><span>Rotate PDF</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-trash-alt text-red-600"></i><a
                    href="{{ route('delete-pdf-pages') }}"><span>Delete PDF Pages</span></a></li>
        </ul>
    </div>

    <!-- Convert PDF -->
    <div>
        <h3 class="text-md font-semibold text-gray-900 mb-4">Convert from PDF</h3>
        <ul class="space-y-3">
            <li class="flex items-center space-x-2"><i class="fas fa-file-word text-blue-600"></i><a
                    href="{{ route('pdf-to-word') }}"><span>PDF to Word</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-file-excel text-green-600"></i><a
                    href="{{ route('pdf-to-excel') }}"><span>PDF to Excel</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-file-powerpoint text-red-500"></i><a
                    href="{{ route('pdf-to-ppt') }}"><span>PDF to PPT</span></a></li>
        </ul>

        <h3 class="text-md font-semibold text-gray-900 mt-6 mb-4">Convert to PDF</h3>
        <ul class="space-y-3">
            <li class="flex items-center space-x-2"><i class="fas fa-file-alt text-gray-600"></i><a
                    href="{{ route('word-to-pdf') }}"><span>Word to PDF</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-chart-line text-blue-600"></i><a
                    href="{{ route('excel-to-pdf') }}"><span>Excel to PDF</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-file-powerpoint text-orange-600"></i><a
                    href="{{ route('ppt-to-pdf') }}"><span>PPT to PDF</span></a></li>
        </ul>
    </div>

    <!-- Sign & Secure -->
    <div>
        <h3 class="text-md font-semibold text-gray-900 mb-4">Sign & Secure</h3>
        <ul class="space-y-3">
            <li class="flex items-center space-x-2"><i class="fas fa-signature text-indigo-700"></i><a
                    href="{{ route('sign-pdf') }}"><span>Sign PDF</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-lock text-red-600"></i><a
                    href="{{ route('protect-pdf') }}"><span>Protect PDF</span></a></li>
            <li class="flex items-center space-x-2"><i class="fas fa-lock-open text-green-600"></i><a
                    href="{{ route('unlock-pdf') }}"><span>Unlock PDF</span></a></li>
        </ul>
    </div>
</div> --}}

<div class="flex justify-center">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-[15px] text-gray-800">

        <!-- PDF Conversions -->
        <div>
            <h3 class="text-md font-semibold text-gray-900 mb-4">PDF Conversions</h3>
            <ul class="space-y-3">
                <li class="flex items-center space-x-2"><i class="fas fa-file-archive text-red-500"></i><a href="{{ route('pdf-to-zip') }}"><span>PDF to ZIP</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-word text-blue-500"></i><a href="{{ route('pdf-to-doc') }}"><span>PDF to DOC</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-image text-yellow-500"></i><a href="{{ route('pdf-to-jpg') }}"><span>PDF to JPG</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-code text-green-600"></i><a href="{{ route('pdf-to-html') }}"><span>PDF to HTML</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-excel text-blue-600"></i><a href="{{ route('pdf-to-xl') }}"><span>PDF to XL</span></a></li>
            </ul>
        </div>

        <!-- Image Conversions -->
        <div>
            <h3 class="text-md font-semibold text-gray-900 mb-4">Image Conversions</h3>
            <ul class="space-y-3">
                <li class="flex items-center space-x-2"><i class="fas fa-image text-purple-500"></i><a href="{{ route('jpg-to-png') }}"><span>JPG to PNG</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-image text-indigo-500"></i><a href="{{ route('png-to-jpg') }}"><span>PNG to JPG</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-word text-red-500"></i><a href="{{ route('jpg-to-doc') }}"><span>JPG to DOC</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-excel text-green-500"></i><a href="{{ route('jpg-to-xl') }}"><span>JPG to XL</span></a></li>
            </ul>
        </div>

        <!-- Image & Document Tools -->
        <div>
            <h3 class="text-md font-semibold text-gray-900 mb-4">Image & Document Tools</h3>
            <ul class="space-y-3">
                <li class="flex items-center space-x-2"><i class="fas fa-crop text-orange-500"></i><a href="{{ route('crop') }}"><span>Crop</span></a></li>
                {{-- <li class="flex items-center space-x-2"><i class="fas fa-th text-pink-500"></i><a href="{{ route('collage') }}"><span>Collage</span></a></li> --}}
                {{-- <li class="flex items-center space-x-2"><i class="fas fa-expand-arrows-alt text-blue-600"></i><a href="{{ route('resize') }}"><span>Resize</span></a></li> --}}
                {{-- <li class="flex items-center space-x-2"><i class="fas fa-id-card text-green-600"></i><a href="{{ route('passport-size-photo') }}"><span>Passport-size Photo</span></a></li> --}}
                <li class="flex items-center space-x-2"><i class="fas fa-magic text-purple-500"></i><a href="{{ route('photo-clarity-enhancement') }}"><span>Photo Clarity Enhancement</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-image text-indigo-600"></i><a href="{{ route('background-change') }}"><span>Background Remover</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-alt text-gray-600"></i><a href="{{ route('resume-maker') }}"><span>Resume Maker</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-compress text-red-500"></i><a href="{{ route('photo-size-compression') }}"><span>Photo Size Compression</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-text-height text-blue-600"></i><a href="{{ route('image-to-text-conversion') }}"><span>Image to Text Conversion</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-signature text-green-600"></i><a href="{{ route('sign-picker') }}"><span>Sign Picker</span></a></li>
            </ul>
        </div>

    </div>
</div>



