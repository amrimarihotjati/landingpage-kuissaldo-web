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

    <title>Privacy - Terms - Faq | Kuis Saldo</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('android-chrome-512x512.png') }}">

    @vite(['resources/css/kuis.css', 'resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
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
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#privacy">Privacy Policy</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#terms">Terms</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#faq">Faq</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <section id="privacy">

            <div class="container px-5 py-5" data-aos="fade-in" data-aos-duration="1500">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Halaman Utama</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Privacy Policy, Terms & Faq</li>
                </ol>
                <h3>Kebijakan Privasi untuk Kuis Saldo</h3>
                <p>Kami menghargai privasi Anda dan berkomitmen untuk melindungi data pribadi Anda saat menggunakan
                    aplikasi
                    Kuis Saldo.
                    Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi
                    Anda.</p>

                <h4>1. Informasi yang Kami Kumpulkan</h4>
                <p>Kami dapat mengumpulkan jenis informasi berikut:</p>
                <ul>
                    <li><strong>Informasi Pribadi:</strong> Saat Anda mendaftar atau menggunakan aplikasi, kami dapat
                        mengumpulkan nama,
                        alamat email, nomor telepon, dan informasi lainnya yang Anda berikan secara sukarela.</li>
                    <li><strong>Data Penggunaan:</strong> Kami mengumpulkan data mengenai bagaimana Anda berinteraksi
                        dengan
                        aplikasi,
                        termasuk aktivitas bermain kuis, skor, dan preferensi Anda.</li>
                    <li><strong>Informasi Teknis:</strong> Ini termasuk informasi tentang perangkat yang Anda gunakan,
                        nama
                        perangkat,
                        jenis browser, dan data lainnya terkait penggunaan teknologi.</li>
                </ul>

                <h4>2. Penggunaan Informasi</h4>
                <p>Informasi yang kami kumpulkan digunakan untuk:</p>
                <ul>
                    <li><strong>Menyediakan Layanan:</strong> Mengelola akun Anda, mengoptimalkan pengalaman bermain
                        kuis,
                        dan
                        memberikan dukungan pelanggan.</li>
                    <li><strong>Pengembangan Produk:</strong> Menganalisis penggunaan aplikasi untuk memperbaiki fitur,
                        memperkenalkan
                        konten baru, dan meningkatkan keamanan.</li>
                    <li><strong>Komunikasi:</strong> Mengirimkan pemberitahuan, pembaruan, atau promosi terkait dengan
                        aplikasi.</li>
                    <li><strong>Keamanan:</strong> Memantau dan mencegah aktivitas yang mencurigakan atau ilegal yang
                        dapat
                        merugikan
                        pengguna atau platform.</li>
                </ul>

                <h4>3. Keamanan Informasi</h4>
                <p>Kami mengambil langkah-langkah yang wajar untuk melindungi informasi pribadi Anda dari akses,
                    penggunaan,
                    atau
                    pengungkapan yang tidak sah. Namun, perlu diingat bahwa tidak ada metode transmisi data melalui
                    internet
                    atau metode
                    penyimpanan elektronik yang 100% aman.</p>

                <h4>4. Penyimpanan dan Penghapusan Data</h4>
                <p>Kami menyimpan informasi pribadi Anda hanya selama diperlukan untuk tujuan yang diuraikan dalam
                    Kebijakan
                    Privasi
                    ini. Anda dapat meminta penghapusan informasi pribadi Anda dengan menghubungi kami.</p>

                <h4>5. Hak Pengguna</h4>
                <p>Anda memiliki hak untuk:</p>
                <ul>
                    <li><strong>Mengakses Informasi Anda:</strong> Meminta salinan data pribadi yang kami simpan.</li>
                    <li><strong>Memperbaiki Informasi:</strong> Mengoreksi data pribadi yang tidak akurat atau tidak
                        lengkap.</li>
                    <li><strong>Menghapus Informasi:</strong> Meminta penghapusan data pribadi Anda dari sistem kami,
                        kecuali jika ada
                        kewajiban hukum yang mengharuskan kami menyimpannya.</li>
                </ul>

                <h4>6. Perubahan Kebijakan Privasi</h4>
                <p>Kami dapat memperbarui Kebijakan Privasi ini dari waktu ke waktu. Setiap perubahan akan diberitahukan
                    melalui
                    pembaruan di aplikasi atau melalui email. Penggunaan lanjutan Anda atas aplikasi setelah perubahan
                    tersebut
                    menunjukkan persetujuan Anda terhadap kebijakan yang diperbarui.</p>

                <h4>7. Kontak Kami</h4>
                <p>Jika Anda memiliki pertanyaan atau kekhawatiran terkait Kebijakan Privasi ini, silakan hubungi kami.
                </p>

                <p>Dengan menggunakan aplikasi Kuis Saldo, Anda menyetujui syarat-syarat yang ditetapkan dalam Kebijakan
                    Privasi ini.
                </p>

                <hr class="my-5">
            </div>
        </section>

        <section id="terms">
            <div class="container px-5" data-aos="fade-in" data-aos-duration="1500">
                <h3>Syarat dan Ketentuan Penggunaan</h3>
                <p>Selamat datang di Kuis Saldo! Dengan menggunakan aplikasi kami, Anda setuju dengan syarat dan
                    ketentuan berikut:</p>

                <h4>1. Penerimaan Syarat dan Ketentuan</h4>
                <p>Dengan mengakses atau menggunakan Kuis Saldo, Anda menyetujui untuk terikat oleh syarat dan ketentuan
                    ini. Jika Anda tidak setuju dengan syarat dan ketentuan ini, Anda sebaiknya tidak menggunakan
                    aplikasi ini.</p>

                <h4>2. Tanggung Jawab Pengguna</h4>
                <p>Anda bertanggung jawab untuk menjaga keamanan informasi akun Anda, termasuk kata sandi.</p>
                <p>Anda setuju untuk tidak menggunakan Kuis Saldo untuk tujuan ilegal atau tidak sah.</p>

                <h4>3. Kelayakan Pengguna</h4>
                <p>Anda harus berusia minimal 18 tahun untuk menggunakan Kuis Saldo.</p>

                <hr class="my-5">
            </div>
        </section>

        <section id="faq">
            <div class="container px-5" data-aos="fade-in" data-aos-duration="1500">
                <h3>Frequently Asked Questions (FAQ)</h3>

                <h4>1. Apa itu Kuis Saldo?</h4>
                <p>Kuis Saldo adalah aplikasi yang memungkinkan Anda untuk mengikuti kuis dan mendapatkan saldo sebagai
                    hadiah. Anda dapat menjawab pertanyaan kuis, mengumpulkan poin, dan menukarkannya dengan saldo.</p>

                <h4>2. Bagaimana cara saya mendapatkan saldo?</h4>
                <p>Anda dapat mengumpulkan poin dengan mengikuti kuis. Setelah mencapai jumlah poin tertentu, Anda dapat
                    menukarkannya dengan saldo ShopeePay atau Dana.</p>

                <h4>3. Apakah saya perlu membayar untuk menggunakan Kuis Saldo?</h4>
                <p>Tidak, Kuis Saldo adalah aplikasi gratis. Anda dapat mengikuti kuis dan mendapatkan saldo tanpa biaya
                    apapun.</p>

                <h4>4. Bagaimana cara saya menukarkan poin dengan saldo?</h4>
                <p>Setelah Anda mengumpulkan poin yang cukup, Anda dapat menukarkannya melalui menu penukaran di dalam
                    aplikasi. Pilih saldo yang Anda inginkan, dan poin Anda akan dikonversi secara otomatis.</p>

                <h4>5. Apakah ada batasan untuk mengikuti kuis?</h4>
                <p>Tidak, tidak terdapat batasan harian untuk jumlah kuis yang dapat Anda ikuti.</p>

                <h4>6. Apakah Kuis Saldo tersedia untuk semua perangkat?</h4>
                <p>Saat ini, Kuis Saldo tersedia untuk perangkat Android. Kami sedang dalam pengembangan untuk mendukung
                    platform lain di masa depan.</p>

                <hr class="my-5">
            </div>
        </section>

        <footer class="py-4 bg-dark text-white-50">
            <div class="container text-center">
                <small>Copyright &copy; Kuis Saldo 2024</small>
            </div>
        </footer>
    </body>
@else
    @include('maintanance')
@endif

</html>
