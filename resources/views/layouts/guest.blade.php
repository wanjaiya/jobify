<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.front.head')

<body class="font-sans text-gray-900 antialiased">
    @include('layouts.front.navbar')
    <div class="min-h-screen flex flex-col sm:justify-center items-center ">


        <div class="w-full ">
            {{ $slot }}
        </div>
    </div>


    @include('layouts.front.scripts')

    @yield('scripts')

</body>

</html>
