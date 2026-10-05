<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Oi</title>
        
    </head>

    <body class="bg-[#FFEDD6]">

        {{-- HEADER   --}}
        <x-header/>

        {{-- CONTENT --}}

        {{ $slot }}

        {{-- FOOTER --}}

        <x-footer/>

    </body>

</html>