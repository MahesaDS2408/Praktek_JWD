<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>


    <!-- Main page content-->
    <div class="container-xl px-4 mt-4 pt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link ms-0" href="<?php base_url() ?>/">Pilihan Beasiswa</a>
            <a class="nav-link active" href="<?php base_url() ?>/daftar_beasiswa">Daftar</a>
            <a class="nav-link" href="#">Hasil</a>
        </nav>
        <hr class="mt-0 mb-4" />
        <div class="row">
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Form Pendaftaran Beasiswa</div>
                    <div class="card-body">
                        <form action="<?php base_url() ?>/daftar_beasiswa" method="post" enctype="multipart/form-data">
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">

                                <!-- Form Group (Semester)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="semester">Semester Saat Ini</label>
                                    <select class="form-select" id="semester" name="semester" aria-label="Default select example" required>
                                        <option value="" disabled selected>Pilih Semester</option>
                                        <?php foreach($semester as $semes){ ?>
                                            <option value="<?= $semes['id_semester'] ?>"><?= ucwords($semes['value_semester']) ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                               
                                <!-- Form Group (email)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="no_hp">Nomor HP</label>
                                    <input class="form-control" id="no_hp" name="no_hp" type="text" onkeypress="return inputAngka(event)" placeholder="08xxxxx" required />
                                </div>
                            </div>
                            <!-- Form Group (nama)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="nama">Nama</label>
                                    <input class="form-control" id="nama" type="text" name="nama" placeholder="Nama Lengkap" required />
                               
                            </div>
                            <!-- Form Row  -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (email)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input class="form-control" id="email" type="email" placeholder="Masukan Email" required />
                                    <p id="emailValidationText" class="text-danger"></p>
                                </div>
                                <!-- Form Group (IPK)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="ipk">IPK Terakhir</label>
                                    <input class="form-control" id="ipk" type="text" name="ipk" placeholder="Ipk Muncul Setelah input semester saat ini" disabled />
                                </div>
                            </div>
                            
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="beasiswa">Pilihan Beasiswa</label>
                                    <select class="form-select" id="beasiswa" name="beasiswa" aria-label="Default select example" required>
                                        <option value="" disabled selected>Pilih Beasiswa</option>
                                        <?php foreach($beasiswa as $beas){ ?>
                                            <option value="<?= $beas['id_beasiswa'] ?>"><?= ucwords($beas['value_beasiswa']) ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <!-- Form Group (Upload File)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="file_berkas">Upload Berkas Syarat</label>
                                    <input class="form-control" accept=".pdf, .png, .zip" id="file_berkas" type="file" name="file_berkas" required/>
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" id="submitButton" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



</script>
<!-- input angka -->
<script>
    function inputAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
    }
</script>

<?= $this->endSection(); ?>