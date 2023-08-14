<?php $this->session = session(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Praktek JWD</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
        <link href="<?php base_url() ?>/assets/admin/css/styles.css" rel="stylesheet" />
        <link href="<?php base_url() ?>/assets/admin/css/custom-css.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="<?php base_url() ?>/assets/admin/assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
        <!-- <script src="<?php base_url(); ?>/assets/admin/assets/js/jquery.min.js" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdn.ckeditor.com/4.10.0/full-all/ckeditor.js"></script> -->



    </head>
    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
            <!-- Sidenav Toggle Button-->
            <!-- Navbar Brand-->
            <!-- * * Tip * * You can use text or an image for your navbar brand.-->
            <!-- * * * * * * When using an image, we recommend the SVG format.-->
            <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
            <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="#"> Beasiswa Mahasiswa</a>
            <!-- Navbar Items-->
            <ul class="navbar-nav align-items-center ms-auto">
                
                
            </ul>
        </nav>
        
            <div id="layoutSidenav_content mt-4 mb-4">
                <main class="mt-4">
                    <!-- Main page content-->
                    <div class="card card-waves mb-4 mt-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center justify-content-between">
                                <div class="col">
                                    <h2 class="text-primary">Selamat Datang di Halaman Informasi & Pendaftaran Beasiswa!</h2>
                                    <p class="text-gray-700">Mari Langkahkan Kakimu dengan mantap untuk menuju kedepan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $this->renderSection('content'); ?>
                </main>
            </div>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php base_url() ?>/assets/admin/js/scripts.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php base_url() ?>/assets/admin/assets/demo/chart-area-demo.js"></script>
        <script src="<?php base_url() ?>/assets/admin/assets/demo/chart-bar-demo.js"></script>
        <script src="<?php base_url() ?>/assets/admin/assets/demo/chart-pie-demo.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
        <script src="<?php base_url() ?>/assets/admin/js/litepicker.js"></script>
        <script src="<?php base_url(); ?>/assets/admin/js/simple-datatables.js" crossorigin="anonymous"></script>
        <script src="<?php base_url() ?>/assets/admin/js/datatables/datatables-simple-demo.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


         <!-- script select2 -->
       <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script> 

        <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Validasi Email dengan JS -->
        <script>
        $(document).ready(function() {
            $('#email').on('input', function() {
                var email = $('#email').val();

                // Validasi email dengan regex
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                var isValidEmail = emailPattern.test(email);

                var emailValidationText = $('#emailValidationText');
                if (!isValidEmail) {
                    emailValidationText.text('Masukkan alamat email yang valid.');
                } else {
                    emailValidationText.text('');
                }
            });
        });
        </script>


        <!-- digunakan untuk mengecek ipk dengan nama dan email -->
        <script>
            $(document).ready(function() {
                $('#nama, #email').on('input', function() {
                    
                    var nama = $('#nama').val();
                    var email = $('#email').val();
                    // var semester = $('#email').val();
                    // console.log('Nama:', nama); // Log nilai nama ke konsol
                    // console.log('Email:', email);

                    var url = "/CheckingController/mahasiswa/"+nama+"/"+email;
                    var base_url = window.location.origin;
                    url = base_url + url;

                    // Menggunakan AJAX untuk mengambil nilai IPK dari controller
                    $.ajax({
                        url: url, // Ganti dengan URL controller yang sesuai
                        method: 'GET',
                        // data: { nama: nama, email: email },
                        success: function(response) {
                            // console.log('Response:', response);
                            $('#ipk').val(response.ipk);
                            $('#id_ipk').val(response.id_ipk);


                            // Mengambil nilai IPK dan menonaktifkan tombol jika IPK kurang dari 3
                            var ipk = parseFloat(response.ipk);
                            var submitButton = $('#submitButton'); // Ganti dengan ID tombol yang sesuai
                            var beasiswaSelect = $('#beasiswa'); // Ganti dengan ID select yang sesuai
                            var file_berkas = $('#file_berkas'); // Ganti dengan ID input yang sesuai


                            if (ipk < 3) {
                                submitButton.prop('disabled', true);
                                file_berkas.prop('disabled', true);
                                beasiswaSelect.prop('disabled', true);
                            } else {
                                submitButton.prop('disabled', false);
                                file_berkas.prop('disabled', false);
                                beasiswaSelect.prop('disabled', false);
                            }

                        }
                    });
                });
            });
        </script>

    </body>
</html>
