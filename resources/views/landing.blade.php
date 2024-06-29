<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-HMk4Sz2cLcjG73/xbo2Hj2FVbdZ76mZSf7yGDzYUevggPTcJ2tmn4y/06JRLmINy4aHzEB/1FSizJVy+0VH8BQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>iK Cam</title>
    <!-- File CSS Tambahan -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/css/templatemo-softy-pinko.css') }}">  
</head>

<body>
    <!-- ***** Mulai Preloader ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Akhir Preloader ***** -->

    <!-- ***** Mulai Area Header ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Mulai Logo ***** -->
                        <a href="#" class="logo">
                            <img src="{{ asset('assets/Img/logo.png') }}" alt="iK Cam" />
                        </a>
                        <!-- ***** Akhir Logo ***** -->
                        <!-- ***** Mulai Menu ***** -->
                        <ul class="nav">
                            <li><a href="#welcome" class="active">Beranda</a></li>
                            <li><a href="#features">Tentang</a></li>
                            <li><a href="#work-process">Panduan</a></li>
                            <li><a href="#contact-us">Kontak</a></li>
                            <li><a href="{{ route('signIn') }}">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Akhir Menu ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Akhir Area Header ***** -->

    <!-- ***** Mulai Area Welcome ***** -->
    <div class="welcome-area" id="welcome">
        <!-- ***** Mulai Teks Header ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Abadikan setiap <strong>Moment </strong><br>dengan <strong>Kamera yang tepat.</strong></h1>
                        <p>Website ini membantu Anda untuk menemukan pilihan kamera yang tepat agar Anda bisa menjadi fotografer profesional.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Akhir Teks Header ***** -->
    </div>
    <!-- ***** Akhir Area Welcome ***** -->

    <!-- ***** Mulai Fitur Kecil ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Mulai Item Fitur Kecil ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{ asset('assets/Img/featured-item-03.png') }}" alt=""></i>
                                </div>
                                <h5 class="features-title">Keamanan Data</h5>
                                <p>Kami menjamin, data Anda aman dan tidak akan bisa dilihat oleh pengguna lainnya.</p>
                            </div>
                        </div>
                        <!-- ***** Akhir Item Fitur Kecil ***** -->

                        <!-- ***** Mulai Item Fitur Kecil ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{ asset('assets/Img/featured-item-01.png') }}" alt=""></i>
                                </div>
                                <h5 class="features-title">Perhitungan SPK</h5>
                                <p>Perhitungan yang kami gunakan yaitu Metode Topsis (Technique for Order Preference by Similarity to Ideal Solution).</p>
                            </div>
                        </div>
                        <!-- ***** Akhir Item Fitur Kecil ***** -->

                        <!-- ***** Mulai Item Fitur Kecil ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{ asset('assets/Img/featured-item-02.png') }}" alt=""></i>
                                </div>
                                <h5 class="features-title">Login Multi Platform</h5>
                                <p>Anda bisa login dengan menggunakan akun Google atau Facebook.</p>
                            </div>
                        </div>
                        <!-- ***** Akhir Item Fitur Kecil ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Akhir Fitur Kecil ***** -->

    <!-- ***** Mulai Item Fitur Besar ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('assets/Img/left-image.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Apa itu iK Cam?</h2>
                    </div>
                    <div class="left-text">
                        <p>iK Cam adalah website Sistem Informasi dan Pendukung Keputusan Pemilihan Kamera dengan Metode Topsis. iK Cam memiliki fitur dan desain yang eye catching. Dengan menggunakan iK Cam untuk menentukan pilihan kamera, Anda dapat menjadi fotografer yang andal dan profesional.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Akhir Item Fitur Besar ***** -->

    <!-- ***** Mulai Home Parallax ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Panduan Perhitungan</h1>
                            <p>Metode Topsis yaitu metode pengambilan keputusan multikriteria dengan ide dasarnya alternatif yang dipilih memiliki jarak terdekat dengan solusi ideal positif dan memiliki jarak terjauh dari solusi ideal negatif.</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mulai Mini Box ***** -->
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/Img/work-process-item-01.png') }}"alt=""></i>
                            <strong>Login</strong>
                            <span>Tentu anda harus Login Terlebih dahulu.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/Img/work-process-item-01.png') }}" alt=""></i>
                            <strong>Data Kriteria</strong>
                            <span>Membuat data kriteria sesuai keinginan.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/Img/work-process-item-01.png') }}"alt=""></i>
                            <strong>Data Alternatif</strong>
                            <span>Membuat Data Alternatif sesuai keinginan.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/Img/work-process-item-01.png') }}" alt=""></i>
                            <strong>Penilaian</strong>
                            <span>Memberi penilaian dari 2 data tadi.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/Img/work-process-item-01.png') }}" alt=""></i>
                            <strong>Perhitungan</strong>
                            <span>Sistem otomatis melakukan menghitung.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/Img/work-process-item-01.png') }}" alt=""></i>
                            <strong>Ranking</strong>
                            <span>Hasil akhir Perhitungan yang ditentukan.</span>
                        </a>
                    </div>
                </div>
                <!-- ***** Akhir Mini Box ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Akhir Home Parallax ***** -->

    <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Jenis Jenis Kamera</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Sekarang terdapat banyak sekali jenis-jenis kamera yang memilki fungsi berbeda. Di era modern ini terdapat sejumlah jenis kamera berbeda yang dapat digunakan dan dimanfaatkan oleh para profesional dan amatir.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="{{ asset('assets/Img/dslr.png') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">Kamera DSLR</a>
                            </h3>
                            <div class="text">
                                Digital Single Lens Reflex adalah kamera digital yang menggunakan sistem cermin otomatis dan pentaprisma atau pentamirror untuk meneruskan cahaya dari lensa menuju ke viewfinder.
                            </div>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="{{ asset('assets/Img/mirorless.png') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">Kamera Mirorless</a>
                            </h3>
                            <div class="text">
                                Sesuai dengan namanya, tidak memiliki cermin atau pentraprisma. Jadi cahaya akan melewati lensa dan langsung ke sensor yang kemudian menampilkan pratinjau gambar di layar LCD atau pada electronic viewfinder (EVF).
                            </div>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="{{ asset('assets/Img/analog.png') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">Kamera Film atau Analog</a>
                            </h3>
                            <div class="text">
                                Walaupun sudah berumur, kamera film kembali naik daun dan populer dikalangan anak-anak muda. Kamera jenis ini kembali digemari karena hasil foto yang unik dan memberikan kesan vintage.
                            </div>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Kontak kami</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Kami menerima saran dan masukan dari anda agar dapat dikembangkan dimasa dapan, dengan mengisi Form dibawah.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->
    
            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">Hubungi kami</h5>
                    <div class="contact-text">
                        <p>30-11/02 Ujungrusi, Adiwerna, 52194
                        <br>Jalan Raya 2, Ujungrusi</p>
                        <p>Isi Form di samping untuk pertanyaan lebih lanjut, Terima kasih.</p>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->
    
                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('sendMessage') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Nama Lengkap" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Alamat Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subjek" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Pesan" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Kirim Pesan</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="https://www.instagram.com/aa.mar._"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                          </svg></a></li>
                        <li><a href="https://github.com/ramsyparker"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                          </svg></a></li>
                        <li><a href="https://wa.me/+6289514463758"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                          </svg></a></li>
                    </ul>
                </div>
            </div>        
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy 2024 iK Cam</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Script JavaScript -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
