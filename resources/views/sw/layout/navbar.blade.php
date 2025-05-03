<header class="bg-white border-b sticky top-0 z-50">
    <div class="max-w-9xl mx-auto px-4 sm:px-6 py-2 flex justify-between items-center">
        <!-- Logo & Tools -->
        <div class="flex items-center space-x-4">
            <h1 class="text-xl sm:text-2xl font-extrabold text-blue-600"><a href="{{ url('/') }}">CraftMyDoc</a></h1>

            <!-- Tools Dropdown -->
            <div class="relative hidden sm:block">
                <div class="inline-flex items-center mt-2 space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M4 5.125C4 4.504 4.504 4 5.125 4h1.75C7.496 4 8 4.504 8 5.125v1.75C8 7.496 7.496 8 6.875 8h-1.75A1.125 1.125 0 0 1 4 6.875zm6 0C10 4.504 10.504 4 11.125 4h1.75C13.496 4 14 4.504 14 5.125v1.75C14 7.496 13.496 8 12.875 8h-1.75A1.125 1.125 0 0 1 10 6.875zM17.25 4C16.56 4 16 4.56 16 5.25v1.5c0 .69.56 1.25 1.25 1.25h1.5C19.44 8 20 7.44 20 6.75v-1.5C20 4.56 19.44 4 18.75 4zM16 11.125c0-.621.504-1.125 1.125-1.125h1.75c.621 0 1.125.504 1.125 1.125v1.75c0 .621-.504 1.125-1.125 1.125h-1.75A1.125 1.125 0 0 1 16 12.875zM17.125 16c-.621 0-1.125.504-1.125 1.125v1.75c0 .621.504 1.125 1.125 1.125h1.75c.621 0 1.125-.504 1.125-1.125v-1.75c0-.621-.504-1.125-1.125-1.125zM10 11.125c0-.621.504-1.125 1.125-1.125h1.75c.621 0 1.125.504 1.125 1.125v1.75c0 .621-.504 1.125-1.125 1.125h-1.75A1.125 1.125 0 0 1 10 12.875zM11.125 16c-.621 0-1.125.504-1.125 1.125v1.75c0 .621.504 1.125 1.125 1.125h1.75c.621 0 1.125-.504 1.125-1.125v-1.75c0-.621-.504-1.125-1.125-1.125zM4 11.125C4 10.504 4.504 10 5.125 10h1.75C7.496 10 8 10.504 8 11.125v1.75C8 13.496 7.496 14 6.875 14h-1.75A1.125 1.125 0 0 1 4 12.875zM5.125 16C4.504 16 4 16.504 4 17.125v1.75C4 19.496 4.504 20 5.125 20h1.75C7.496 20 8 19.496 8 18.875v-1.75C8 16.504 7.496 16 6.875 16z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <button id="toolsToggle" class="text-sm font-medium text-gray-700 hover:text-yellow-600">
                        Tools ▾
                    </button>
                </div>

                <div id="toolsMenu"
                    class="absolute top-full mt-2 hidden bg-white shadow-lg border border-gray-200 rounded-lg p-6 w-full sm:w-[900px] z-50 overflow-y-auto max-h-[80vh]">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-sm text-gray-800">
                        <!-- Column 1 -->
                        <div>
                            <h3 class="font-semibold mb-3 text-gray-600">File Conversions</h3>
                            <ul class="space-y-2">
                                <li><i class="fas fa-file-archive text-blue-600 mr-2"></i><a
                                        href="{{ route('pdf-to-zip') }}"><span>PDF to ZIP</span></a></li>
                                <li><i class="fas fa-file-word text-indigo-600 mr-2"></i><a
                                        href="{{ route('pdf-to-doc') }}"><span>PDF to DOC</span></a></li>
                                <li><i class="fas fa-image text-yellow-600 mr-2"></i><a
                                        href="{{ route('pdf-to-jpg') }}"><span>PDF to JPG</span></a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-3 text-gray-600">Image Conversions</h3>
                            <ul class="space-y-2">
                                <li><i class="fas fa-file-image text-pink-600 mr-2"></i><a
                                        href="{{ route('jpg-to-png') }}"><span>JPG to PNG</span></a></li>
                                <li><i class="fas fa-image text-purple-600 mr-2"></i><a
                                        href="{{ route('png-to-jpg') }}"><span>PNG to JPG</span></a></li>
                                <li><i class="fas fa-file-word text-blue-600 mr-2"></i><a
                                        href="{{ route('jpg-to-doc') }}"><span>JPG to DOC</span></a></li>
                                <li><i class="fas fa-file-excel text-green-600 mr-2"></i><a
                                        href="{{ route('jpg-to-xl') }}"><span>JPG to XL</span></a></li>
                            </ul>
                        </div>

                        <!-- Column 2 -->
                        <div>
                            <h3 class="font-semibold mb-3 text-gray-600">Image & Document Processing</h3>
                            <ul class="space-y-2">
                                <li><i class="fas fa-crop-alt text-yellow-700 mr-2"></i><a
                                        href="{{ route('crop') }}"><span>Crop</span></a></li>
                                <li><i class="fas fa-magic text-indigo-600 mr-2"></i><a
                                        href="{{ route('photo-clarity-enhancement') }}"><span>Photo Clarity
                                            Enhancement</span></a></li>
                                <li><i class="fas fa-image text-orange-600 mr-2"></i><a
                                        href="{{ route('background-change') }}"><span>Background Remover</span></a></li>
                                <li><i class="fas fa-file-alt text-blue-500 mr-2"></i><a
                                        href="{{ route('resume.index') }}"><span>Resume Maker</span></a></li>
                                <li><i class="fas fa-compress-alt text-red-600 mr-2"></i><a
                                        href="{{ route('photo-size-compression') }}"><span>Photo Size
                                            Compression</span></a></li>
                                <li><i class="fas fa-file-signature text-teal-600 mr-2"></i><a
                                        href="{{ route('image-to-text-conversion') }}"><span>Image to Text
                                            Conversion</span></a></li>
                                <li><i class="fas fa-signature text-pink-700 mr-2"></i><a
                                        href="{{ route('sign-picker') }}"><span>Sign Picker</span></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Hamburger for Mobile -->
        <div class="sm:hidden">
            <button id="mobileMenuToggle" class="text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Nav links -->
        <nav class="hidden sm:flex items-center space-x-4 text-sm ">
            <a href="{{ route('home.index') }}" class="hover:text-yellow-600 transition">Home</a>
            <a href="{{ route('home.AllTools') }}" class="hover:text-yellow-600 transition">All Tools</a>
            <a href="{{ route('resume.index') }}"
                class="bg-blue-600 text-white px-4 py-1.5 rounded hover:bg-blue-700 transition whitespace-nowrap">Make
                Resume</a>
        </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="sm:hidden hidden px-6 pb-4 space-y-3 text-sm ">
        <a href="{{ route('home.index') }}" class="block hover:text-yellow-600 transition">Home</a>
        <a href="{{ route('home.AllTools') }}" class="block hover:text-yellow-600 transition">All Tools</a>
        {{-- <a href="#" class="block hover:text-yellow-600 transition">Edit</a>
        <a href="#" class="block hover:text-yellow-600 transition">Pricing</a> --}}
        <a href="{{ route('resume.index') }}"
            class="block bg-blue-600 text-white px-4 py-1.5 rounded hover:bg-blue-700 transition text-center">Make
            Resume</a>
    </div>

    <script>
        // Function to toggle menu visibility
        function toggleMenu(buttonId, menuId) {
            const button = document.getElementById(buttonId);
            const menu = document.getElementById(menuId);

            button.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevents event from bubbling to `document`
                menu.classList.toggle('hidden');
            });

            // Click outside to hide menu
            document.addEventListener('click', function(event) {
                if (!menu.contains(event.target) && !button.contains(event.target)) {
                    menu.classList.add('hidden');
                }
            });
        }

        // Apply toggle function to both menus
        toggleMenu('toolsToggle', 'toolsMenu');
        toggleMenu('mobileMenuToggle', 'mobileMenu');
    </script>

</header>
