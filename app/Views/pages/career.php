<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Career</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="career.php">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="career.php">Career</li>
                    </ol>
                </nav>
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
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Lowongan Tersedia</h6>
            <h2 class="mt-2">Lowongan Pekerjaan</h2>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                    <li class="btn px-3 pe-4" data-filter=".first">Officer</li>
                    <li class="btn px-3 pe-4" data-filter=".second">Worker</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url('img/acc.png') ?>" alt="">
                    <div class="portfolio-overlay">
                        <div class="">
                            <small class="text-white">Accountant</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">Full Time Accounting</a>
                            <p class="text-light"> Kriteria :</p>
                            <ul class="text-light">
                                <li>Pria/Wanita Usia Maks. 35 Tahun</li>
                                <li>Pengalaman Minimal 1 Tahun</li>
                                <li>Bisa Bekerja Sama</li>
                                <li>Punya Kendaraan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url('img/cs.png') ?>" alt="">
                    <div class="portfolio-overlay">
                        <div class="">
                            <small class="text-white">Customer Service</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">Full Time CS</a>
                            <p class="text-light"> Kriteria :</p>
                            <ul class="text-light">
                                <li>Pria/Wanita Usia Maks. 35 Tahun</li>
                                <li>Pengalaman Minimal 1 Tahun</li>
                                <li>Bisa Bekerja Sama</li>
                                <li>Punya Kendaraan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url('img/security.png') ?>" alt="">
                    <div class="portfolio-overlay">
                        <div class="">
                            <small class="text-white">Security</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">Full Time Guard</a>
                            <p class="text-light"> Kriteria :</p>
                            <ul class="text-light">
                                <li>Pria Usia Maks. 35 Tahun</li>
                                <li>Pengalaman Minimal 1 Tahun</li>
                                <li>Bisa Bekerja Sama</li>
                                <li>Menguasai Bela Diri</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url('img/driver.png') ?>" alt="">
                    <div class="portfolio-overlay">
                        <div class="">
                            <small class="text-white">Driver</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">Shuttle Driver</a>
                            <p class="text-light"> Kriteria :</p>
                            <ul class="text-light">
                                <li>Pria Usia Maks. 35 Tahun</li>
                                <li>Pengalaman Minimal 1 Tahun</li>
                                <li>Bisa Bekerja Sama</li>
                                <li>Mempunyai SIM A</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url('img/mitra.png') ?>" alt="">
                    <div class="portfolio-overlay">
                        <div class="">
                            <small class="text-white">Cleaner</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">Cleaner Partner</a>
                            <p class="text-light"> Kriteria :</p>
                            <ul class="text-light">
                                <li>Pria/Wanit Usia Maks. 35 Tahun</li>
                                <li>Pengalaman Minimal 1 Tahun</li>
                                <li>Bisa Berkomunikasi dengan baik</li>
                                <li>Mempunyai SIM C</li>
                                <li>Memiliki Smartphone</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url('img/rumput.png') ?>" alt="">
                    <div class="portfolio-overlay">
                        <div class="mt-auto">
                            <small class="text-white">Grass Cleaner</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">Grass Cleaner</a>
                            <p class="text-light"> Kriteria :</p>
                            <ul class="text-light">
                                <li>Pria/Wanit Usia Maks. 35 Tahun</li>
                                <li>Pengalaman Minimal 1 Tahun</li>
                                <li>Bisa Berkomunikasi dengan baik</li>
                                <li>Mempunyai SIM C</li>
                                <li>Memiliki Smartphone</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>