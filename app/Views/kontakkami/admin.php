<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Admin</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="admin.php">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Admin</li>
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
    <div class="container">
        <table class="table table-hover table-stripped table-bordered text-center">
            <thead class="name-table bg-light">
                <th scope="row">No.</th>
                <th scope="row">Nama</th>
                <th scope="row">Email</th>
                <th scope="row">Subjek</th>
                <th scope="row">Pesan</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kontakkami as $kontak) :
                ?>
                    <tr>
                        <th scope="row">
                            <?= $no; ?>
                        </th>
                        <td>
                            <?= $kontak['nama'] ?>
                        </td>
                        <td>
                            <?= $kontak['email'] ?>
                        </td>
                        <td>
                            <?= $kontak['subjek'] ?>
                        </td>
                        <td>
                            <?= $kontak['pesan'] ?>
                        </td>
                    </tr>
                <?php
                    $no++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>