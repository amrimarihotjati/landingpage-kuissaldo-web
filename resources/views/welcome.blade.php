<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Mainkan kuis dan jawab soal-soal untuk mendapatkan saldo ShopeePay atau Dana. Nikmati tantangan dan kumpulkan hadiah dengan menjawab soal-soal yang telah diberikan." />
    <meta name="author" content="Amri Marihot" />
    <meta name="keywords"
        content="kuis, saldo shopeepay, saldo dana, jawab soal, hadiah, main kuis, kuis online, uang digital" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="{{ $mLandingPage->theme }}">

    <title>{{ $mLandingPage->name }}</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('android-chrome-512x512.png') }}">

    @vite(['resources/css/kuis.css', 'resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
    <style type="text/css">
        .btn-accent {
            color: #eef4fd;
            background-color: {{ $mLandingPage->theme }};
            border-color: {{ $mLandingPage->theme }}
        }

        .btn-accent:hover {
            color: #eef4fd;
            background-color: {{ $mLandingPage->theme }};
            border-color: #8ad3d3
        }

        .btn-accent:focus,
        .btn-accent.focus {
            box-shadow: 0 0 0 .2rem rgba(91, 194, 194, 0.0)
        }

        .btn-accent.disabled,
        .btn-accent:disabled {
            color: #eef4fd;
            background-color: {{ $mLandingPage->theme }};
            border-color: {{ $mLandingPage->theme }}
        }

        .btn-accent:not(:disabled):not(.disabled):active,
        .btn-accent:not(:disabled):not(.disabled).active,
        .show>.btn-accent.dropdown-toggle {
            color: #eef4fd;
            background-color: {{ $mLandingPage->theme }};
            border-color: {{ $mLandingPage->theme }}
        }

        .btn-accent:not(:disabled):not(.disabled):active:focus,
        .btn-accent:not(:disabled):not(.disabled).active:focus,
        .show>.btn-accent.dropdown-toggle:focus {}
    </style>
</head>
@if ($mLandingPage->is_maintanance == 0)

    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top">{{ $mLandingPage->name }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3"
                                href="#features4">{{ $mSection->section_4_title }}</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3"
                                href="#features5">{{ $mSection->section_5_title }}</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3"
                                href="#features6">{{ $mSection->section_6_title }}</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3"
                                href="#features7">{{ $mSection->section_7_title }}</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#marketApp">Download</a></li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-light rounded-pill mb-2 mb-lg-0 dropdown-toggle" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="ms-1">Support</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            @if (!empty($mLandingPage->telegram_url))
                                <li>
                                    <a class="dropdown-item" href="{{ $mLandingPage->telegram_url }}"
                                        target="_blank">Telegram Group</a>
                                </li>
                            @endif

                            @if (!empty($mLandingPage->whatsapp_url))
                                <li>
                                    <a class="dropdown-item" href="{{ $mLandingPage->whatsapp_url }}"
                                        target="_blank">Whatsapp Channel</a>
                                </li>
                            @endif

                            @if (!empty($mLandingPage->youtube_url))
                                <li>
                                    <a class="dropdown-item" href="{{ $mLandingPage->youtube_url }}"
                                        target="_blank">Youtube</a>
                                </li>
                            @endif
                        </ul>

                    </div>
                </div>
            </div>
        </nav>

        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="col-lg-6">
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">{{ $mSection->section_1_title }}</h1>
                            <p class="lead fw-normal text-muted mb-5">{{ $mSection->section_1_desc }}</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-accent dropdown-toggle rounded rounded-2 fw-bold shadow"
                                        data-bs-toggle="dropdown"><i class="fa fa-download me-1"></i> DOWNLOAD SEKARANG
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <h5 class="dropdown-header">Download Via</h5>
                                        </li>

                                        @if (!empty($mApkStore->store_google_url))
                                            <li>
                                                <a class="dropdown-item" href="{{ $mApkStore->store_google_url }}"
                                                    target="_blank">
                                                    <img src="{{ asset('assets/img/ic_playstore.png') }}"
                                                        alt="" width="30" height="30"> Google Play
                                                </a>
                                            </li>
                                        @endif

                                        @if (!empty($mApkStore->store_samsung_url))
                                            <li>
                                                <a class="dropdown-item" href="{{ $mApkStore->store_samsung_url }}"
                                                    target="_blank">
                                                    <img src="{{ asset('assets/img/ic_samsungstore.png') }}"
                                                        alt="" width="30" height="30"> Samsung Store
                                                </a>
                                            </li>
                                        @endif

                                        @if (!empty($mApkStore->store_mi_url))
                                            <li>
                                                <a class="dropdown-item" href="{{ $mApkStore->store_mi_url }}"
                                                    target="_blank">
                                                    <img src="{{ asset('assets/img/ic_mistore.png') }}"
                                                        alt="" width="30" height="30"> Mi Store
                                                </a>
                                            </li>
                                        @endif

                                        @if (!empty($mApkStore->store_oppo_url))
                                            <li>
                                                <a class="dropdown-item" href="{{ $mApkStore->store_oppo_url }}"
                                                    target="_blank">
                                                    <img src="{{ asset('assets/img/ic_oppostore.png') }}"
                                                        alt="" width="30" height="30"> Oppo Store
                                                </a>
                                            </li>
                                        @endif

                                        @if (!empty($mApkStore->store_vivo_url))
                                            <li>
                                                <a class="dropdown-item" href="{{ $mApkStore->store_vivo_url }}"
                                                    target="_blank">
                                                    <img src="{{ asset('assets/img/ic_vivostore.png') }}"
                                                        alt="" width="30" height="30"> Vivo Store
                                                </a>
                                            </li>
                                        @endif

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li>
                                            <h5 class="dropdown-header">Server Alternatif</h5>
                                        </li>

                                        @if (!empty($mApkSelfStore->url_apk))
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ env('MASTER_LANDING_URL') }}{{ $mApkSelfStore->url_apk }}">
                                                    <img src="{{ asset('favicon-32x32.png') }}" alt=""
                                                        width="30" height="30"> Download
                                                    V.{{ $mApkSelfStore->version_code_apk }}.{{ $mApkSelfStore->version_name_apk }}
                                                </a>
                                            </li>
                                        @endif

                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="masthead-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"
                                            style="stop-color:{{ $mLandingPage->theme_accent }}"></stop>
                                        <stop class="gradient-end-color" offset="100%"
                                            style="stop-color:{{ $mLandingPage->theme_highlight }}"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(-49.88 120.42) rotate(-45)"></rect>
                            </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                    data-color="black"
                                    style="background-image: url('/assets/img/portrait_black.png')">
                                    <div class="screen bg-black">
                                        <img src="{{ env('MASTER_LANDING_URL') }}{{ $mSection->section_1_img }}"
                                            alt="" style="max-width: 100%; height: auto;" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <aside class="text-center" style="background-color:{{ $mLandingPage->theme }};">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4" data-aos="zoom-in-up" data-aos-duration="1500">
                            {{ $mSection->section_2_desc }}</div>
                    </div>
                </div>
            </div>
        </aside>

        <section id="featuresKuis">
            <div class="container px-5" data-aos="fade-right" data-aos-duration="1500">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">

                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <div class="text-center">
                                        <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt fw-bold">{{ $mSection->section_3_subtitle_1 }}</h3>
                                        <p class="text-muted mb-0">{{ $mSection->section_3_subdesc_1 }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-5">
                                    <div class="text-center">
                                        <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt fw-bold">{{ $mSection->section_3_subtitle_2 }}</h3>
                                        <p class="text-muted mb-0">{{ $mSection->section_3_subdesc_2 }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-5">
                                    <div class="text-center">
                                        <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt fw-bold">{{ $mSection->section_3_subtitle_3 }}</h3>
                                        <p class="text-muted mb-0">{{ $mSection->section_3_subdesc_3 }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-5 mb-md-0">
                                    <div class="text-center">
                                        <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt fw-bold">{{ $mSection->section_3_subtitle_4 }}</h3>
                                        <p class="text-muted mb-0">{{ $mSection->section_3_subdesc_4 }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <div class="features-device-mockup" data-aos="zoom-in" data-aos-duration="1500">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"
                                            style="stop-color:{{ $mLandingPage->theme_accent }}"></stop>
                                        <stop class="gradient-end-color" offset="100%"
                                            style="stop-color:{{ $mLandingPage->theme_highlight }}"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(-49.88 120.42) rotate(-45)"></rect>
                            </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                    data-color="black"
                                    style="background-image: url('/assets/img/portrait_black.png')">
                                    <div class="screen bg-black">
                                        <img src="{{ env('MASTER_LANDING_URL') }}{{ $mSection->section_3_img }}"
                                            alt="" style="max-width: 100%; height: auto;" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-white" id="features4" style="background-color:{{ $mLandingPage->theme }};">
            <div class="container px-5" data-aos="fade-left" data-aos-duration="1500">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">{{ $mSection->section_4_title }}</h2>
                        <p class="lead fw-normal text-light mb-5 mb-lg-0">{{ $mSection->section_4_desc }}</p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="features-device-mockup" data-aos="zoom-in" data-aos-duration="1500">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"
                                            style="stop-color:{{ $mLandingPage->theme_accent }}"></stop>
                                        <stop class="gradient-end-color" offset="100%"
                                            style="stop-color:{{ $mLandingPage->theme_highlight }}"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(-49.88 120.42) rotate(-45)"></rect>
                            </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                    data-color="black"
                                    style="background-image: url('/assets/img/portrait_black.png')">
                                    <div class="screen bg-black">
                                        <img src="{{ env('MASTER_LANDING_URL') }}{{ $mSection->section_4_img }}"
                                            alt="" style="max-width: 100%; height: auto;" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features5">
            <div class="container px-5" data-aos="fade-right" data-aos-duration="1500">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <h2 class="display-4 lh-1 mb-4">{{ $mSection->section_5_title }}</h2>
                            <p class="lead fw-normal text-dark mb-5 mb-lg-0">{{ $mSection->section_5_desc }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <div class="features-device-mockup" data-aos="zoom-in" data-aos-duration="1500">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"
                                            style="stop-color:{{ $mLandingPage->theme_accent }}"></stop>
                                        <stop class="gradient-end-color" offset="100%"
                                            style="stop-color:{{ $mLandingPage->theme_highlight }}"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(-49.88 120.42) rotate(-45)"></rect>
                            </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                    data-color="black"
                                    style="background-image: url('/assets/img/portrait_black.png')">
                                    <div class="screen bg-black">
                                        <img src="{{ env('MASTER_LANDING_URL') }}{{ $mSection->section_5_img }}"
                                            alt="" style="max-width: 100%; height: auto;" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-white" style="background-color:{{ $mLandingPage->theme }};" id="features6">
            <div class="container px-5" data-aos="fade-left" data-aos-duration="1500">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">{{ $mSection->section_6_title }}</h2>
                        <p class="lead fw-normal text-light mb-5 mb-lg-0">{{ $mSection->section_6_desc }}</p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="features-device-mockup" data-aos="zoom-in" data-aos-duration="1500">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"
                                            style="stop-color:{{ $mLandingPage->theme_accent }}"></stop>
                                        <stop class="gradient-end-color" offset="100%"
                                            style="stop-color:{{ $mLandingPage->theme_highlight }}"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(-49.88 120.42) rotate(-45)"></rect>
                            </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                    data-color="black"
                                    style="background-image: url('/assets/img/portrait_black.png')">
                                    <div class="screen bg-black">
                                        <img src="{{ env('MASTER_LANDING_URL') }}{{ $mSection->section_6_img }}"
                                            alt="" style="max-width: 100%; height: auto;" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features7">
            <div class="container px-5" data-aos="fade-right" data-aos-duration="1500">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <h2 class="display-4 lh-1 mb-4">{{ $mSection->section_7_title }}</h2>
                            <p class="lead fw-normal text-dark mb-5 mb-lg-0">{{ $mSection->section_7_desc }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <div class="features-device-mockup" data-aos="zoom-in" data-aos-duration="1500">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"
                                            style="stop-color:{{ $mLandingPage->theme_accent }}"></stop>
                                        <stop class="gradient-end-color" offset="100%"
                                            style="stop-color:{{ $mLandingPage->theme_highlight }}"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                    transform="translate(-49.88 120.42) rotate(-45)"></rect>
                            </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                    data-color="black"
                                    style="background-image: url('/assets/img/portrait_black.png')">
                                    <div class="screen bg-black">
                                        <img src="{{ env('MASTER_LANDING_URL') }}{{ $mSection->section_6_img }}"
                                            alt="" style="max-width: 100%; height: auto;" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="" style="background-color: {{ $mLandingPage->theme }};" id="marketApp">
            <div class="container px-5 justify-content-center text-center" data-aos="zoom-in-down"
                data-aos-duration="1500">
                <h2 class="text-center text-white mb-4">DOWNLOAD SEKARANG</h2>
                <span class="justify-content-center text-center text-white fw-normal">Pilih opsi unduhan yang paling
                    sesuai untuk mendapatkan aplikasi kami.
                    Kami telah menyediakan beberapa pilihan unduhan agar Anda dapat memilih yang paling sesuai dengan
                    perangkat atau preferensi Anda. Cukup klik salah satu tombol di bawah untuk memulai unduhan dan
                    nikmati kemudahan menggunakan aplikasi kami!</span>
                <div class="row justify-content-center text-center mt-4 pt-4">
                    @if (!empty($mApkStore->store_google_url))
                        <div class="col-md-4 mb-4">
                            <a href="{{ $mApkStore->store_google_url }}">
                                <img class="app-badge" src="{{ asset('assets/img/badge_google_store.png') }}"
                                    alt="" />
                            </a>
                        </div>
                    @endif

                    @if (!empty($mApkStore->store_samsung_url))
                        <div class="col-md-4 mb-4">
                            <a href="{{ $mApkStore->store_samsung_url }}">
                                <img class="app-badge" src="{{ asset('assets/img/badge_samsung_store.png') }}"
                                    alt="" />
                            </a>
                        </div>
                    @endif

                    @if (!empty($mApkStore->store_mi_url))
                        <div class="col-md-4 mb-4">
                            <a href="{{ $mApkStore->store_mi_url }}">
                                <img class="app-badge" src="{{ asset('assets/img/badge_mi_store.png') }}"
                                    alt="" />
                            </a>
                        </div>
                    @endif

                    @if (!empty($mApkStore->store_oppo_url))
                        <div class="col-md-4 mb-4">
                            <a href="{{ $mApkStore->store_oppo_url }}">
                                <img class="app-badge" src="{{ asset('assets/img/badge_oppo_store.png') }}"
                                    alt="" />
                            </a>
                        </div>
                    @endif

                    @if (!empty($mApkStore->store_vivo_url))
                        <div class="col-md-4 mb-4">
                            <a href="{{ $mApkStore->store_vivo_url }}">
                                <img class="app-badge" src="{{ asset('assets/img/badge_vivo_store.png') }}"
                                    alt="" />
                            </a>
                        </div>
                    @endif

                    @if (!empty($mApkSelfStore->url_apk))
                        <div class="col-md-4 mb-4">
                            <a href="{{ env('MASTER_LANDING_URL') }}{{ $mApkSelfStore->url_apk }}">
                                <img class="app-badge" src="{{ asset('assets/img/badge_self_store.png') }}"
                                    alt="" />
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </section>


        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; {{ $mLandingPage->name }} 2024. All Rights Reserved.</div>
                    <a href="/privterms">Privacy - Terms - Faq</a>
                </div>
            </div>
        </footer>

    </body>
@else
    @include('maintanance')
@endif

</html>
