<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>

    <!-- Main page content-->
    <div class="container-xl px-4 mt-4 pt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="<?php base_url() ?>/">Pilihan Beasiswa</a>
            <a class="nav-link" href="<?php base_url() ?>/daftar_beasiswa">Daftar</a>
            <a class="nav-link" href="#">Hasil</a>
        </nav>
        <hr class="mt-0 mb-4" />
        <div class="row">
            <?php foreach($beasiswa as $beas){ ?>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-start-lg border-start-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-primary mb-1"><?= ucwords($beas['value_beasiswa']) ?></div>
                                    <div class="h6">Minimun IPK 3,00 untuk pendaftaran Beasiswa</div>
                                    <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-up"></i>
                                        Jumlah Layanan
                                    </div>
                                </div>
                                <div class="ms-2"><i class="fas fa-mouse-pointer fa-2x text-gray-200"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


<?= $this->endSection(); ?>