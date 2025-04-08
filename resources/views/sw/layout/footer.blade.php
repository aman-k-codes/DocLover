{{-- <footer class="bg-white border-t text-sm text-gray-700">
    <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-5 gap-8">
        <!-- Brand & Tagline -->
        <div class="col-span-1">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gradient-to-br rounded">
                    <img src="{{asset('public/assets/imgs/fav.png')}}" alt="">
                </div>
                <span class="text-xl font-bold">DocLover</span>
            </div>
            <p class="mt-2 text-gray-600">Simplifying PDFs for everyone.</p>
        </div>

        <!-- Footer Links -->
        <div>
            <h3 class="font-semibold mb-2 text-gray-800">Solutions</h3>
            <ul class="space-y-1">
                <li><a href="#" class="hover:text-yellow-600 transition">Teams</a></li>
                <li><a href="#" class="hover:text-yellow-600 transition">Education</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-semibold mb-2 text-gray-800">Company</h3>
            <ul class="space-y-1">
                <li><a href="#" class="hover:text-yellow-600 transition">About</a></li>
                <li><a href="#" class="hover:text-yellow-600 transition">Help</a></li>
                <li><a href="#" class="hover:text-yellow-600 transition">Blog</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-semibold mb-2 text-gray-800">Product</h3>
            <ul class="space-y-1">
                <li><a href="#" class="hover:text-yellow-600 transition">Pricing</a></li>
                <li><a href="#" class="hover:text-yellow-600 transition">Teams</a></li>
                <li><a href="#" class="hover:text-yellow-600 transition">Embed PDF</a></li>
                <li><a href="#" class="hover:text-yellow-600 transition">Developers</a></li>
                <li><a href="#" class="hover:text-yellow-600 transition">Sign.com</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-semibold mb-2 text-gray-800">Apps</h3>
            <ul class="space-y-1">
                <li><a href="#" class="hover:text-yellow-600 transition">Download DocLover</a></li>
                <li><a href="#" class="hover:text-yellow-600 transition">PDF Scanner</a></li>
                <li><a href="#" class="hover:text-yellow-600 transition">Windows App</a></li>
            </ul>
        </div>
    </div>

    <!-- Social Media & Downloads -->
    <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between border-t">
        <div class="flex space-x-4 text-xl">
            <a href="#" class="hover:text-yellow-600 transition"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="hover:text-yellow-600 transition"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="hover:text-yellow-600 transition"><i class="fab fa-instagram"></i></a>
            <a href="#" class="hover:text-yellow-600 transition"><i class="fab fa-youtube"></i></a>
            <a href="#" class="hover:text-yellow-600 transition"><i class="fab fa-x-twitter"></i></a>
        </div>
    </div>

    <!-- Copyright & Legal Links -->
    <div class="text-center py-4 text-xs text-gray-500 border-t">
        © 2025 DocLover AG — Made with <span class="text-red-500">❤</span> for the internet community.
        <div class="mt-2 space-x-4">
            <a href="#" class="hover:text-yellow-600 transition">Privacy Policy</a>
            <a href="#" class="hover:text-yellow-600 transition">Terms of Service</a>
            <a href="#" class="hover:text-yellow-600 transition">Imprint</a>
            <a href="#" class="hover:text-yellow-600 transition">Contact</a>
            <a href="#" class="hover:text-yellow-600 transition">🌐 English</a>
        </div>
    </div>
</footer> --}}

<footer class="bg-white border-t text-sm text-gray-700">
    <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Branding -->
        <div>
            <div class="flex items-center space-x-3">
                <img src="{{ asset('public/assets/imgs/fav.png') }}" alt="Logo" class="w-10 h-10">
                <span class="text-xl font-semibold">DocLover</span>
            </div>
            <p class="mt-3 text-gray-600">Built by an individual, for individuals. Simplifying PDFs, one file at a time.</p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="font-semibold mb-2 text-gray-800">Quick Links</h3>
            <ul class="space-y-1">
                <li><a href="{{route('home.aboutus')}}" class="hover:text-yellow-600 transition">About</a></li>
                <li><a href="{{route('home.contact')}}" class="hover:text-yellow-600 transition">Contact</a></li>
                <li><a href="{{route('home.privacy')}}" class="hover:text-yellow-600 transition">Privacy Policy</a></li>
                <li><a href="{{route('home.terms')}}" class="hover:text-yellow-600 transition">Terms of Use</a></li>
            </ul>
        </div>

        <!-- Connect -->
        <div>
            <h3 class="font-semibold mb-2 text-gray-800">Connect</h3>
            <div class="flex space-x-4 text-xl">
                <a href="#" class="hover:text-yellow-600 transition"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="hover:text-yellow-600 transition"><i class="fab fa-github"></i></a>
                <a href="#" class="hover:text-yellow-600 transition"><i class="fab fa-twitter"></i></a>
            </div>
            <p class="mt-3 text-gray-500 text-xs">Feel free to connect or drop feedback.</p>
        </div>
    </div>

    <!-- Bottom Note -->
    <div class="text-center py-4 text-xs text-gray-500 border-t">
        © 2025 DocLover — Handcrafted with ❤️ by <span class="font-medium">Your Name</span>
    </div>
</footer>

