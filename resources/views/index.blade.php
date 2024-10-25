<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Zachran Razendra">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#FFFFFF">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>Alfalimasatu</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <section class="h-screen bg-white flex justify-center items-center">
        <img class="h-[200px]" src="{{ asset('images/alfalimasatu.png') }}" alt="">
    </section>

</body>

</html>
