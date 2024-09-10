<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{ $mArticle->title }}" />
    <meta name="author" content="Amri Marihot" />
    <meta name="keywords" content="kuis, saldo shopeepay, saldo dana, jawab soal, hadiah, main kuis, kuis online, uang digital, {{ $mArticle->title }}" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="{{ $mLandingPage->theme }}">

    <title>{{ $mArticle->title }} | {{ $mLandingPage->name }}</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('android-chrome-512x512.png') }}">

    @vite('resources/css/app.css')
    @vite('resources/css/kuis.css')
    @vite('resources/css/maintanance.css')
</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="/">{{ $mLandingPage->name }}</a>
        </div>
    </nav>

    <main class="mt-5 pt-5 pb-5">
        <div class="container px-5">
            <article class="my-5" data-aos="fade-in" data-aos-duration="2000">
                <h1>{{ $mArticle->title }}</h1>
                <p>{!! Purifier::clean($mArticle->content) !!}</p>
            </article>
        </div>
    </main>

    <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; {{ $mLandingPage->name }} 2024. All Rights Reserved.</div>
                </div>
            </div>
        </footer>


    @vite('resources/js/app.js')
</body>
</html>
