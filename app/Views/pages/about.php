<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">About Us</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
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
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h2 class="mt-2">About Us</h2>
                </div>
                <p class="mb-4">Zuppa Clean adalah sebuah start-up yang bergerak di bidang jasa layanan kebersihan dimana pada era revolusi 4.0 ini banyak yang membutuhkan jenis jasa seperti ini. </p>
                <h3>Visi</h3>
                <ul>
                    <li> Menjadi Perusahaan penyedia jasa Terkemuka se-Asia Tenggara dan #1 Pilihan Pelanggan untuk Solusi efektivitas.</li>
                </ul>
                <h3>Misi</h3>
                <ul>
                    <li>Menjalankan bisnis Jasa yang berorientasi pada kepuasan pelanggan, dan anggota perusahaan</li>
                    <li>Menjalankan kegiatan usaha yang berwawasan lingkungan.</li>
                </ul>
                <div class="d-flex align-items-center mt-4">
                    <h6 class="position-relative text-primary ps-4 px-3">Kunjungi Kami</h6>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="<?= base_url('img/about.jpg') ?>">
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>