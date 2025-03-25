<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-9xl mx-auto px-4 sm:px-6 py-4 flex justify-between items-center">
        <!-- Logo & Tools -->
        <div class="flex items-center space-x-4">
            <h1 class="text-xl sm:text-2xl font-extrabold text-blue-600">DocLover</h1>

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
                            <h3 class="font-semibold mb-3 text-gray-600">Compress</h3>
                            <ul class="space-y-2">
                                <li><i class="fas fa-compress text-red-500 mr-2"></i>Compress PDF</li>
                            </ul>

                            <h3 class="font-semibold mt-6 mb-3 text-gray-600">Convert</h3>
                            <ul class="space-y-2">
                                <li><i class="fas fa-sync-alt text-blue-500 mr-2"></i>PDF Converter</li>
                            </ul>

                            <h3 class="font-semibold mt-6 mb-3 text-gray-600">AI PDF</h3>
                            <ul class="space-y-2">
                                <li><i class="fas fa-comments text-indigo-500 mr-2"></i>Chat with PDF</li>
                                <li><i class="fas fa-brain text-purple-500 mr-2"></i>AI PDF Summarizer</li>
                                <li><i class="fas fa-globe text-green-600 mr-2"></i>Translate PDF</li>
                                <li><i class="fas fa-question-circle text-pink-600 mr-2"></i>AI Question Generator
                                </li>
                            </ul>
                        </div>

                        <!-- Column 2 -->
                        <div>
                            <h3 class="font-semibold mb-3 text-gray-600">Organize</h3>
                            <ul class="space-y-2">
                                <li><i class="fas fa-paperclip text-orange-500 mr-2"></i>Merge PDF</li>
                                <li><i class="fas fa-cut text-pink-500 mr-2"></i>Split PDF</li>
                                <li><i class="fas fa-sync-alt text-yellow-600 mr-2"></i>Rotate PDF</li>
                                <li><i class="fas fa-trash-alt text-red-600 mr-2"></i>Delete Pages</li>
                                <li><i class="fas fa-upload text-teal-600 mr-2"></i>Extract Pages</li>
                            </ul>
                        </div>

                        <!-- Column 3 -->
                        <div>
                            <h3 class="font-semibold mb-3 text-gray-600">View & Edit</h3>
                            <ul class="space-y-2">
                                <li><i class="fas fa-pen-square text-purple-600 mr-2"></i>Edit PDF</li>
                                <li><i class="fas fa-pencil-alt text-indigo-600 mr-2"></i>Annotator</li>
                                <li><i class="fas fa-book-open text-green-700 mr-2"></i>Reader</li>
                                <li><i class="fas fa-sort-numeric-down text-pink-600 mr-2"></i>Number Pages</li>
                                <li><i class="fas fa-crop text-yellow-700 mr-2"></i>Crop PDF</li>
                                <li><i class="fas fa-eraser text-red-500 mr-2"></i>Redact</li>
                                <li><i class="fas fa-tint text-blue-600 mr-2"></i>Watermark</li>
                            </ul>
                        </div>

                        <!-- Column 4 -->
                        <div>
                            <h3 class="font-semibold mb-3 text-gray-600">Convert from PDF</h3>
                            <ul class="space-y-2">
                                <li><i class="fas fa-file-word text-blue-600 mr-2"></i>PDF to Word</li>
                                <li><i class="fas fa-file-excel text-green-600 mr-2"></i>PDF to Excel</li>
                                <li><i class="fas fa-file-powerpoint text-red-500 mr-2"></i>PDF to PPT</li>
                                <li class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded flex items-center">
                                    <i class="fas fa-image text-yellow-600 mr-2"></i>PDF to JPG
                                </li>
                            </ul>

                            <h3 class="font-semibold mt-6 mb-3 text-gray-600">Convert to PDF</h3>
                            <ul class="space-y-2">
                                <li><i class="fas fa-file-alt text-gray-600 mr-2"></i>Word to PDF</li>
                                <li><i class="fas fa-chart-line text-blue-600 mr-2"></i>Excel to PDF</li>
                                <li><i class="fas fa-file-powerpoint text-orange-600 mr-2"></i>PPT to PDF</li>
                                <li><i class="fas fa-image text-pink-500 mr-2"></i>JPG to PDF</li>
                                <li><i class="fas fa-search text-green-500 mr-2"></i>PDF OCR</li>
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
        <nav class="hidden sm:flex items-center space-x-4 text-sm font-medium">
            <a href="#" class="hover:text-yellow-600 transition">Compress</a>
            <a href="#" class="hover:text-yellow-600 transition">Convert</a>
            <a href="#" class="hover:text-yellow-600 transition">Edit</a>
            <a href="#" class="hover:text-yellow-600 transition">Pricing</a>
            <a href="#"
                class="bg-blue-600 text-white px-4 py-1.5 rounded hover:bg-blue-700 transition whitespace-nowrap">Make
                Resume</a>
        </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="sm:hidden hidden px-6 pb-4 space-y-3 text-sm font-medium">
        <a href="#" class="block hover:text-yellow-600 transition">Compress</a>
        <a href="#" class="block hover:text-yellow-600 transition">Convert</a>
        <a href="#" class="block hover:text-yellow-600 transition">Edit</a>
        <a href="#" class="block hover:text-yellow-600 transition">Pricing</a>
        <a href="#"
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
