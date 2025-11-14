<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        TaptoGet Admin Panel
    </title>
    <link rel="icon" href="favicon.ico">
    <link href="{{ asset('tailadmin/build/style.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}">
    @include('admin.partials.preloader')
    <div class="flex h-screen overflow-hidden">
        @include('admin.partials.sidebar')
        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
            @include('admin.partials.overlay')
            @include('admin.partials.header')
            <main>
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('tailadmin/build/bundle.js') }}"></script>
    @livewireScripts
</body>

</html>