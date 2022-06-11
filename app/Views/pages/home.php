<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated zoomIn">All in one House Cleaner Service to help you</h1>
                <p class="text-white pb-3 animated zoomIn">Kami hadir untuk membantu urusan menjaga properti kesayangan anda, sekarang keterawatan tidaklah menjadi masalah bagimu, ayo gabung dan nikmati layanan kebersihan tercepat dan termurah </p>
                <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Daftar</a>
                <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Masuk</a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid" src="img/jumbotron.png" alt="">
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">About Us</h6>
                    <h2 class="mt-2">Jasa Layanan kebersihan terbaik</h2>
                </div>
                <p class="mb-4">Kepercayaan pengguna adalah visi dan misi kami, untuk itu kepuasan pelanggan adalah titik paling tinggi dalam tingkat layanan</p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Rating pertama</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Mitra yang professional</h6>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Dukungan 24/7</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Harga Bersahabat</h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-md-end">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/rumah.png">
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
            <h2 class="mt-2">Apa saja yang bisa kami lakukan?</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-home fa-2x"></i>
                    </div>
                    <h5 class="mb-3">House Cleaning</h5>
                    <p>Membersihan rumah kesayangan mu mulai dari Kamar, Ruang Tamu, Meja Makan, Dan lainnya</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="bi bi-badge-wc fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Toilet</h5>
                    <p>Membuat Kamar mandi seperti baru kembali dan membuat anda nyaman menggunakan nya</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="bi bi-flower1 fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Taman</h5>
                    <p>Malas membersihkan taman? biarkan mitra kami yang bekerja untuk membuat taman anda indah di pandang dan bisa menikmati sepanjang hari</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl bg-primary testimonial wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Menjadi seorang gamer, sangat banyak menghabiskan waktu untuk game. oleh karna itu untuk membersihkan kamar saya, saya menggunakan ZupaClean yang punya mitra tercepat dan harga yang terjangkau</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/aceng.jpeg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Muhammad Fikri Kafili</h6>
                        <small>Baiter</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Sekarang, Saya sering aktif diluar rumah. mulai dari syuting iklan maupun syuting film. Hal itu membuat saya tidak punya waktu untuk merawat rumah saya. Saya memilih mengunakan ZupaCLean </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/aceng1.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Muhammad Aceng Kafili</h6>
                        <small>Actor</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Saya menderita syndrom genshin-skuy, membuat saya malas untuk membersihkan kamar kos saya sendiri. Dengan adanya Zupa Clean membuat kamar saya terlihat indah dalam sekejap saja</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/ija.jpeg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Ananda Myzza</h6>
                        <small>Genshin Addict</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Ya menurut saya, dengan kehadiran zupa clean saya bisa mudah mengatur jadwal saya tanpa terganggu dengan kegiatan bebersih. Suami saya juga suka dengan ada nya Zupa Clean ini. GO ZUPPA CLEAN!!!</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/lesti.jpeg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Lesti Billar</h6>
                        <small>Artist</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>