<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Web PPDB Wikrama</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://img.freepik.com/free-vector/branding-identity-corporate-vector-logo-letter-w-design_460848-13900.jpg?size=626&ext=jpg" rel="icon">
    <link href="https://img.freepik.com/free-vector/branding-identity-corporate-vector-logo-letter-w-design_460848-13900.jpg?size=626&ext=jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/carou.css') }}" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->


    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>PPDB<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#jurusan">Jurusan</a></li>
                    <li><a href="#testimonials">Testimonial</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Welcome to <span>PPDB Wikrama</span></h2>
                    <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque
                        eum quaerat.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="/register" class="btn-get-started">Daftar Peserta</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('assets/img/bg-1.png') }}" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <h4 class="title"><a href="" class="stretched-link">Afirmation</a></h4>
                            <p>Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri </p>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <h4 class="title"><a href="" class="stretched-link">Motto</a></h4>
                            <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <h4 class="title"><a href="" class="stretched-link">Attitude</a></h4>
                            <p>Aku ada lingkunganku
                                bahagia</p>
                        </div>
                    </div>
                    <!--End Icon Box -->



                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Wikrama</h2>
                </div>

            </div>

            <div id="call-to-action" class="call-to-action" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="container text-center" data-aos="zoom-out">
                    <a href="https://youtu.be/mbM-OrP6BzY" class="glightbox play-btn"></a>
                    <h3>SMK Wikrama Bogor</h3>
                    <p> Video berikut berisikan tentang SMK Wikrama Bogor.</p>
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>
            </div><!-- End Call To Action Section -->
        </section>
        <!-- ======= Our Services Section ======= -->
        <section id="jurusan" class="services sections-bg">
            <div class="container">
                <div class="row">
                    <div class="section-header">
                        <h2 class="heading-section mb-5">Jurusan</h2>
                    </div>
                    <div class="col-md-10 mx-auto" data-aos="fade-right" data-aos-duration="1000">
                        <div class="featured-carousel owl-carousel">
                            <div class="item">
                                <div class="work-wrap d-md-flex">
                                    <div class="img order-md-last jurusan-1"></div>
                                    <div class="text text-left text-lg-right p-4 px-xl-5  d-flex align-items-center">
                                        <div class="desc w-100">
                                            <h2 class=" text-white">PPLG</h2>
                                            <h4> Pengembangan Perangkat Lunak dan Gim</h4>
                                            <p class="h5 mb-4">Keunggulan</p>
                                            <div class="row justify-content-end">
                                                <div class="col-xl-12">
                                                    <p>Far far away, behind the word mountains, far from the countries
                                                        Vokalia and Consonantia, there live the blind texts. Separated
                                                        they live in Bookmarksgrove right at the coast of the Semantics,
                                                        a large language ocean.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work-wrap d-md-flex">
                                    <div class="img order-md-last jurusan-3"></div>
                                    <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                                        <div class="desc w-100">
                                            <h2 class=" text-white">DKV</h2>
                                            <h4>Desain Komunikasi Visual</h4>
                                            <p class="h5 mb-4">Keunggulan</p>
                                            <div class="row justify-content-end">
                                                <div class="col-xl-12">
                                                    <p>Lulusan dapat memiliki kesempatan kerja yang luas dibidang
                                                        periklanan, production house, radio & televisi, studio foto,
                                                        percetakan grafis, corporate brand identity, penerbit
                                                        majalan/Koran, dll.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work-wrap d-md-flex">
                                    <div class="img order-md-last jurusan-4"></div>
                                    <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                                        <div class="desc w-100">
                                            <h2 class="text-white">HTL</h2>
                                            <h4>Hotel</h4>
                                            <p class="h5 mb-4">Keunggulan</p>
                                            <div class="row justify-content-end">
                                                <div class="col-xl-12">
                                                    <p>Siswa jurusan Perhotelan akan mampu bekerja di departemen yang
                                                        ada di hotel dengan kompetensi yang mereka pelajari.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work-wrap d-md-flex">
                                    <div class="img order-md-last jurusan-2"></div>
                                    <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                                        <div class="desc w-100">
                                            <h2 class="text-white">TJKT</h2>
                                            <h4> Teknik Jaringan Komputer dan Telekomunikasi</h4>
                                            <p class="h5 mb-4">Keunggulan</p>
                                            <div class="row justify-content-end">
                                                <div class="col-xl-12">
                                                    <p>Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki
                                                        sertifikasi internasional seperti CNAP (Cisco Networking Academy
                                                        Program) dan MCNA (Mikrotik Certified Network
                                                        Associate).</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work-wrap d-md-flex">
                                    <div class="img order-md-last jurusan-5"></div>
                                    <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                                        <div class="desc w-100">
                                            <h2 class="text-white">MPLB</h2>
                                            <h4>Manajemen Perkantoran Lembaga Bisnis</h4>
                                            <p class="h5 mb-4">Keunggulan</p>
                                            <div class="row justify-content-end">
                                                <div class="col-xl-12">
                                                    <p>Kompetensi keahlian Otomatisasi dan Tata Kelola
                                                        Perkantoran/Administrasi Perkantoran memiliki keunggulan
                                                        dibidang prestasi peserta didik seperti juara II lomba
                                                        keterampilan siswa bidang lomba sekretaris tingkat provinsi
                                                        tahun 2016 dan juara I lomba olimpiade sekretaris tingkat
                                                        nasional tahun 2017</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work-wrap d-md-flex">
                                    <div class="img order-md-last jurusan-6"></div>
                                    <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                                        <div class="desc w-100">
                                            <h2 class="text-white">PMN</h2>
                                            <h4>Pemasaran</h4>
                                            <p class="h5 mb-4">Keunggulan</p>
                                            <div class="row justify-content-end">
                                                <div class="col-xl-12">
                                                    <p>Kompetensi keahlian Bisnis Daring dan Pemasaran memiliki
                                                        kompetensi yang mirip dengan program Multimedia dan Perkantoran.
                                                        Lulusan program ini diharuskan mampu membuat foto produk,
                                                        desain, copy writing, dll.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work-wrap d-md-flex">
                                    <div class="img order-md-last jurusan-7"></div>
                                    <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                                        <div class="desc w-100">
                                            <h2 class="text-white">KLN</h2>
                                            <h4>Kuliner</h4>
                                            <p class="h5 mb-4">Keunggulan</p>
                                            <div class="row justify-content-end">
                                                <div class="col-xl-12">
                                                    <p>Siswa jurusan Tata Boga mampu bekerja diberbagai bidang jasa boga
                                                        seperti restoran, hotel, rumah sakit, katering sesuai dengan
                                                        minat dan bakat yang telah dipelajari.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti
                        fignissimos eos quam</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h3>Akhmad Munito</h3>
                                            <h4>Koordinator Purchasing</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg sangat
                                        bermanfaat dan akhlakul karimah bisa langsung bisa bersaing ke dunia kerja di
                                        era modern ini
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">

                                        <div>
                                            <h3>Devi Indah Sari</h3>
                                            <h4>Business Operation</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>

                                        Our struggle in Wikrama will become Our success in the future
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">

                                        <div>
                                            <h3>Heti Surhayati</h3>
                                            <h4>Marketing Executive</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
	
                                        Sebagai alumni dari SMK Wikrama, saya mendapatkan banyak ilmu yang sangat bermanfaat, selain itu SMK Wikrama mengajarkan kedisplinan, inisiatif dan itu sangat bermanfaat dalam dunia kerja”
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">

                                        <div>
                                            <h3>Imas</h3>
                                            <h4>Staff Finance</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
	
                                        Terima kasih kepada SMK Wikama, selama 3 tahun saya mendapat pelajaran yang sangat bermanfaat, terutama pendidikan akhlak kepada murid muridnya. jaya selalu buat SMK Wikrama, alhamdulillah lulus dari smk wikrama saya langsung bekerja sampe sekarang di jakarta selatan PT Myindo Cyber Media
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h3>Melita</h3>
                                            <h4>Kabag. HRD</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
	
                                        Sebagai alumni SMK Wikrama saya mudah sekali mendapatkan pekerjaan yang saya inginkan karena perusahaan-perusahaan sudah mengetahui bahwa lulusan SMK Wikrama merupakan lulusan yang siap terjun di dunia kerja
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div id="call-to-action" class="call-to-action">
                  <div class="container cont-1 text-center" data-aos="zoom-out">
                      <a href="https://youtu.be/mbM-OrP6BzY" class="glightbox play-btn"></a>
                      <h3>Testimonial</h3>
                      <p>Untuk lebih jelas nya kalian dapat mendengarakan sendiri testimoni berikut.</p>
                      <a class="cta-btn" href="#">Call To Action</a>
                  </div>
              </div>
            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
       
        <!-- ======= Our Team Section ======= -->
        

        <!-- ======= Pricing Section ======= -->
       

        <!-- ======= Frequently Asked Questions Section ======= -->
      

        <!-- ======= Recent Blog Posts Section ======= -->
        

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>In here you can contact me</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Bogor, Indonesia</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>alifnaufalh@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+62 85810 484204</p>
                                </div>
                            </div><!-- End Info Item -->


                        </div>

                    </div>

                    <div class="col-lg-8">
                                
                                <form
                                action="https://formspree.io/f/mvonoqvd"
                                method="POST"  style=" width: 100%;
                                height: 100%;
                                background: #fff;
                                box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
                                padding: 30px;
                                border-radius: 0 10px 10px 0;"
                                >
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" name="email" class="form-control" style="" placeholder="Your Email">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="text" name="name" class="form-control" style="" placeholder="Your Name">
                                </div>
                                <div class="col-md-12 form-group mt-3 mt-md-3">
                                    <input type="text" name="subject" class="form-control" style="" placeholder="Subject">
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" rows="4" placeholder="Message" name="message"></textarea>
                                </div>
                                <!-- your other form fields go here -->
                                <button type="submit" class="text-center mt-md-3 "  style="background: var(--color-primary);
                                border: 0;
                                padding: 14px 45px;
                                color: #fff;
                                margin-left:300px;
                                transition: 0.4s;
                                border-radius: 50px;">Send</button>
                                </form>
                            </div>
                        </form>
                       
                            
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>PPDB</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>





                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Me</h4>
                    <p>
                        Alif Naufal Hermawan <br>
                        Ciawi, Bogor<br>
                        Indonesia<br><br>
                        <strong>Phone:</strong> +62 85810 484204<br>
                        <strong>Email:</strong> alifnaufalh@gmail.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Alipp</span></strong>. Thanks
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/splide-4.1.3/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/esm/popper-base.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>

</body>

</html>
