<?php $this->session = session(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard <?= ucwords($this->session->get('level')) ?> - Karang Taruna</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
        <link href="<?php base_url() ?>/assets/admin/css/styles.css" rel="stylesheet" />
        <link href="<?php base_url() ?>/assets/admin/css/custom-css.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="<?php base_url() ?>/assets/admin/assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
        <script src="<?php base_url(); ?>/assets/admin/assets/js/jquery.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/4.10.0/full-all/ckeditor.js"></script>



    </head>
    <body class="nav-fixed" onload="sweet()">
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
        <script src="<?php base_url() ?>/assets/admin/js/custom-js.js"></script>
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

        <!-- Select Pengumuman -->
        <script>
            $(".theSelect").select2();
        </script>
        <!-- pengumuman-->
        <script>
            $(function() {
                $('#tgl').hide();
                $('#kategori').change(function() {
                    if ($('#kategori').val() == '2') {
                        $('#tgl').show();
                        createByJson();
                    } else {
                        $('#tgl').hide();
                    }
                });
            });
        </script>
    </body>
</html>
