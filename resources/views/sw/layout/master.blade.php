<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/imgs/fav.png') }}">
    {{-- adsense --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1623922509742047" crossorigin="anonymous"></script>
    <!-- Primary Meta Tags -->
    <title>@yield('title', 'CraftMyDoc - Document Conversion, Editing & Resume Maker')</title>
    <meta name="description" content="@yield('meta_description', 'CraftMyDoc is an all-in-one platform for document conversion, editing, image processing, and resume creation. Convert PDFs, edit documents, process images, and build resumes effortlessly.')">
    <meta name="keywords" content="@yield('meta_keywords', 'document conversion, PDF to Word, Word to PDF, image processing, document editing, resume maker, file converter, online document editor, OCR tool')">
    <meta name="author" content="CraftMyDoc">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'CraftMyDoc - Convert, Edit, and Process Documents Easily')">
    <meta property="og:description" content="@yield('og_description', 'CraftMyDoc is your go-to solution for document conversion, editing, image processing, and resume creation. Fast, secure, and easy to use.')">
    <meta property="og:image" content="@yield('og_image', asset('public/default-image.jpg'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', 'CraftMyDoc - Convert, Edit & Process Documents')">
    <meta property="twitter:description" content="@yield('twitter_description', 'Easily convert, edit, and process documents with CraftMyDoc. From PDF conversions to resume creation, we make document handling seamless.')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('public/default-image.jpg'))">


    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('public/favicon.ico') }}">

    <!-- Preconnect & Preload (Performance Optimization) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "name": "CraftMyDoc",
          "url": "{{ url()->current() }}",
          "description": "@yield('meta_description', 'CraftMyDoc is a powerful platform for document conversion, editing, image processing, and resume making. Easily convert PDFs, edit documents, process images, and create professional resumes.')",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "{{ url()->current() }}/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
        </script>
    </script>

    <!-- Stylesheets -->
    @include('sw.layout.head')

</head>

<body class="bg-gray-50 text-gray-800">
    <script>
        var localUrl = '{{ asset('public/') }}';
        var CSRF = '{{ csrf_token() }}';
        var routeName = '{{ Route::currentRouteName() }}';
        var pagination  = '';
    </script>
    <!-- Header -->
    @include('sw.layout.navbar')

    <div>
        @yield('content')
    </div>

    <!-- Footer -->
    @include('sw.layout.footer')

    @include('sw.layout.scripts')

</body>

</html>
