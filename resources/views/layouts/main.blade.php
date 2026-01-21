<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.front.head')

<body class="font-sans text-gray-900 antialiased">
    @include('layouts.front.navbar')
    


        <div class="w-full ">
            {{ $slot }}
        </div>
    


    @include('components.toast')
    @include('layouts.front.scripts')

    @stack('scripts')

</body>

</html>
