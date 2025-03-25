<!DOCTYPE html>
<html lang="en">

@include('Layout.head')

<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    @include('Layout.navbar')

    <div>
        @yield('content')
    </div>

    <!-- Footer -->
    @include('Layout.footer')

    @include('Layout.scripts')

</body>

</html>
