<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found - CraftMyDoc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Optional: You can customize Tailwind theme colors here if needed
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // Example: Add a brand color if you have one
                        // brand: '#FF5733',
                    }
                }
            }
        }
    </script>
    <style>
        /* Optional: Add custom base styles or fonts here */
        /* @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap'); */
        body {
            /* font-family: 'Inter', sans-serif; */
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen font-sans">

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-xl p-8 md:p-12 max-w-lg mx-auto text-center">

            <div class="mb-6 text-xl font-semibold text-indigo-600">
                <span><span style="color: black">Craft</span>MyDoc</span>
            </div>

            <h1 class="text-8xl md:text-9xl font-bold text-indigo-500 mb-2">
                404
            </h1>

            <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-4">
                Page Not Found
            </h2>

            <p class="text-gray-600 mb-8 text-base md:text-lg">
                Oops! The page you're looking for seems to have gone missing. It might have been moved, deleted, or maybe you mistyped the URL.
            </p>

            <div class="mt-8">
                <a href="/" class="inline-block px-8 py-3 bg-indigo-600 text-white font-medium text-base leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">
                    Go Back to Homepage
                </a>
            </div>

             </div>
    </div>

</body>
</html>
