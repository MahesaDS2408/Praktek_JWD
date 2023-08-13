<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>

    <!-- Main page content-->
    <div class="container-xl px-4 mt-4 pt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link ms-0" href="<?php base_url() ?>/">Pilihan Beasiswa</a>
            <a class="nav-link" href="<?php base_url() ?>/daftar_beasiswa">Daftar</a>
            <a class="nav-link active" href="<?php base_url() ?>/hasil">Hasil</a>
        </nav>
        <hr class="mt-0 mb-4" />
        <div class="row">

            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Cek Data Beasiswa</div>
                    <div class="card-body">
                        <form class="row" action="<?php base_url() ?>/hasil" method="get">
                            <div class="col-auto">
                                <label for="staticEmail2" class="visually-hidden">Email</label>
                                <input type="email" class="form-control" name="email" id="email" >
                            </div>
                            <div class="col-auto">
                                <label for="inputPassword2" class="visually-hidden">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Cari</button>
                            </div>
                        </form>



                        <?php if($hasil == true){ ?>
                        <?php if($beasiswa != null){ ?>
                        <div class="container-xl px-4 mt-4 mb-4">
                            <div class="card invoice">
                                <div class="card-header p-4 p-md-5 border-bottom-0 bg-gradient-primary-to-secondary text-white-50">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-12 col-lg-auto mb-5 mb-lg-0 text-center text-lg-start">
                                            <div class="h2 text-white mb-0">Tracking Pengajuan Beasiswa</div>
                                            <?= ucwords($beasiswa->value_beasiswa) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4 p-md-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <thead class="border-bottom">
                                                <tr class="small text-uppercase text-muted">
                                                    <th scope="col">Nama</th>
                                                    <th class="text-end" scope="col">Semester</th>
                                                    <th class="text-end" scope="col">IPK</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="fw-bold"><?= ucwords($beasiswa->nama_mahasiswa) ?></div>
                                                    </td>
                                                    <td class="text-end fw-bold"><?= ucwords($beasiswa->value_semester) ?></td>
                                                    <td class="text-end fw-bold"><?= $beasiswa->ipk ?></td>
                                                </tr>
                                               
                                                <tr>
                                                    <td class="text-end pb-0" colspan="3"><div class="text-uppercase small fw-700 text-muted">Status Ajuan:</div></td>
                                                    <td class="text-end pb-0"><div class="h5 mb-0 fw-700"><?= ucwords($beasiswa->status_ajuan) ?></div></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                            <div class="container-xl px-4 mt-4 mb-4">
                            <div class="card invoice">
                                <div class="card-header p-4 p-md-5 border-bottom-0 bg-gradient-primary-to-secondary text-white-50">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-12 col-lg-auto mb-5 mb-lg-0 text-center text-lg-start">
                                            <div class="h2 text-white mb-0">Tracking Pengajuan Beasiswa</div>
                                            DATA ANDA TIDAK TERDAFTAR SEBAGAI PENGAJU BEASISWA
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <?php } }?>



                    </div>
                </div>
            </div>

        </div>
    </div>


    


<?= $this->endSection(); ?>