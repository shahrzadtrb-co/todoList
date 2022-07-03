<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        <!--Replace with your tailwind.css once created-->
        <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

            html {
                font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
        </style>

    </head>
    <body class="leading-normal tracking-normal text-indigo-400 m-6 bg-cover bg-fixed" style="background-image: url({{ asset('header.png') }});">
        <div class="">
            {{ $slot }}
        </div>
    </body>
</html>
