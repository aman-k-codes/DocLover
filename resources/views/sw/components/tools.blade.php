<div class="flex justify-center">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 text-[15px] text-gray-800">

        <!-- PDF Conversions -->
        <div>
            <h3 class="text-md font-semibold text-gray-900 mb-4">PDF Conversions</h3>
            <ul class="space-y-3">
                <li class="flex items-center space-x-2"><i class="fas fa-file-archive text-red-500"></i><a
                        href="{{ route('pdf-to-zip') }}"><span>PDF to ZIP</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-word text-blue-500"></i><a
                        href="{{ route('pdf-to-doc') }}"><span>PDF to DOC</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-image text-yellow-500"></i><a
                        href="{{ route('pdf-to-jpg') }}"><span>PDF to JPG</span></a></li>
            </ul>
        </div>

        <!-- Image Conversions -->
        <div>
            <h3 class="text-md font-semibold text-gray-900 mb-4">Image Conversions</h3>
            <ul class="space-y-3">
                <li class="flex items-center space-x-2"><i class="fas fa-image text-purple-500"></i><a
                        href="{{ route('jpg-to-png') }}"><span>JPG to PNG</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-image text-indigo-500"></i><a
                        href="{{ route('png-to-jpg') }}"><span>PNG to JPG</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-word text-red-500"></i><a
                        href="{{ route('jpg-to-doc') }}"><span>JPG to DOC</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-excel text-green-500"></i><a
                        href="{{ route('jpg-to-xl') }}"><span>JPG to XL</span></a></li>
            </ul>
        </div>

        <!-- Image & Document Tools -->
        <div>
            <h3 class="text-md font-semibold text-gray-900 mb-4">Image & Document Tools</h3>
            <ul class="space-y-3">
                <li class="flex items-center space-x-2"><i class="fas fa-crop text-orange-500"></i><a
                        href="{{ route('crop') }}"><span>Crop</span></a></li>

                <li class="flex items-center space-x-2"><i class="fas fa-magic text-purple-500"></i><a
                        href="{{ route('photo-clarity-enhancement') }}"><span>Photo Clarity Enhancement</span></a></li>
                <li class="flex items-center space-x-2">
                    <i class="fas fa-passport text-indigo-600"></i>
                    <a href="{{ route('passport-photo') }}">
                        <span>Passport-Photo</span>
                    </a>
                </li>
                <li class="flex items-center space-x-2"><i class="fas fa-image text-indigo-600"></i><a
                        href="{{ route('background-change') }}"><span>Background Remover</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-alt text-gray-600"></i><a
                        href="{{ route('resume.index') }}"><span>Resume Maker</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-compress text-red-500"></i><a
                        href="{{ route('photo-size-compression') }}"><span>Photo Size Compression</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-text-height text-blue-600"></i><a
                        href="{{ route('image-to-text-conversion') }}"><span>Image to Text Conversion</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-signature text-green-600"></i><a
                        href="{{ route('sign-picker') }}"><span>Sign Picker</span></a></li>
            </ul>
        </div>

        <!-- PDF Tools -->
        <div>
            <h3 class="text-md font-semibold text-gray-900 mb-4">PDF Tools</h3>
            <ul class="space-y-3">
                <li class="flex items-center space-x-2">
                    <i class="fas fa-copy text-blue-600"></i>
                    <a href="{{ route('merge-pdf') }}"><span>Merge PDF</span></a>
                </li>

                <li class="flex items-center space-x-2"><i class="fas fa-cut text-yellow-500"></i><a
                        href="{{ route('split-pdf') }}"><span>Split PDF</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-trash-alt text-red-500"></i><a
                        href="{{ route('delete-pdf-pages') }}"><span>Delete PDF Pages</span></a></li>
                <li class="flex items-center space-x-2"><i class="fas fa-file-export text-blue-500"></i><a
                        href="{{ route('extract-pdf-pages') }}"><span>Extract PDF Pages</span></a></li>

            </ul>
        </div>


    </div>
</div>
