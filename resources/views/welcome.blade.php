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
    <meta name="theme-color" content="#9f1ae2">

    <title>Kuis Saldo</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('android-chrome-512x512.png') }}">

    @vite(['resources/css/kuis.css', 'resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top">{{ env('app_name', 'Kuis Saldo') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#featuresDaget">Dana Kaget</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#featuresPoget">Point Kaget</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#featuresRefferal">Refferal</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#featuresBadge">Badge</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#marketApp">Download</a></li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-light rounded-pill mb-2 mb-lg-0 dropdown-toggle" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="ms-1">Support</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#action1">Telegram Group</a></li>
                        <li><a class="dropdown-item" href="#action2">Whatsapp Channel</a></li>
                        <li><a class="dropdown-item" href="#action3">Youtube</a></li>
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
                            <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge"
                                    src="{{ asset('assets/img/google_store.png') }}" alt="store" /></a>
                            <a href="#!"><img class="app-badge" src="{{ asset('assets/img/app_store.png') }}"
                                    alt="store" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
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
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black"
                                style="background-image: url('/assets/img/portrait_black.png')">
                                <div class="screen bg-black">
                                    <img src="/assets/img/ss_menu_main.png" alt="Features Screen"
                                        style="max-width: 100%; height: auto;" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4" data-aos="zoom-in-up" data-aos-duration="1500">{{ $mSection->section_2_desc }}</div>
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
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
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
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black"
                                style="background-image: url('/assets/img/portrait_black.png')">
                                <div class="screen bg-black">
                                    <img src="/assets/img/ss_menu_playquiz.png" alt="Features Screen"
                                        style="max-width: 100%; height: auto;" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-primary-to-secondary text-white" id="featuresDaget">
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
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
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
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black"
                                style="background-image: url('/assets/img/portrait_black.png')">
                                <div class="screen bg-black">
                                    <img src="/assets/img/ss_menu_daget.png" alt="Features Screen"
                                        style="max-width: 100%; height: auto;" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="featuresPoget">
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
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
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
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black"
                                style="background-image: url('/assets/img/portrait_black.png')">
                                <div class="screen bg-black">
                                    <img src="/assets/img/ss_menu_poget.png" alt="Features Screen"
                                        style="max-width: 100%; height: auto;" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-primary-to-secondary text-white" id="featuresRefferal">
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
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
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
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black"
                                style="background-image: url('/assets/img/portrait_black.png')">
                                <div class="screen bg-black">
                                    <img src="/assets/img/ss_menu_refferal.png" alt="Features Screen"
                                        style="max-width: 100%; height: auto;" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="featuresBadge">
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
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
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
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black"
                                style="background-image: url('/assets/img/portrait_black.png')">
                                <div class="screen bg-black">
                                    <img src="/assets/img/ss_menu_badge.png" alt="Features Screen"
                                        style="max-width: 100%; height: auto;" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-primary-to-secondary" id="marketApp">
        <div class="container px-5" data-aos="zoom-in-down" data-aos-duration="1500">
            <h2 class="text-center text-white font-alt mb-4">Download Sekarang</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge"
                        src="{{ asset('assets/img/google_store.png') }}" alt="..." /></a>
                <a href="#!"><img class="app-badge" src="{{ asset('assets/img/app_store.png') }}"
                        alt="..." /></a>
            </div>
        </div>
    </section>

    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; KUISSALDO 2024. All Rights Reserved.</div>
                <a href="/privterms">Privacy - Terms - Faq</a>
            </div>
        </div>
    </footer>

</body>

</html>
