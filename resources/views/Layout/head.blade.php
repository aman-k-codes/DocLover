<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DocLover</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-ZX...your-integrity-hash..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Optional: keep dropdown open on hover */
        #toolsToggle:hover+#toolsMenu,
        #toolsMenu:hover {
            display: block;
        }
    </style>

    @yield('head')
</head>
