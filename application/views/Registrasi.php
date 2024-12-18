<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?= site_url('assets/sneat')?>/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= site_url('assets/sneat')?>/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?= site_url('assets/sneat')?>/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= site_url('assets/sneat')?>/assets/js/config.js"></script>
  </head>
<body>
  
 
<div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
        <div class="card">
        <div class="card-body">
        <h4 class="mb-2">Welcome to CMS! 👋</h4>
                            <form method="post" action="<?php echo base_url('registrasi/simpan') ?>"class="user">
                                <div  class="mb-3 ">    
                                        <input type="text" class="form-control form-control-user" id="exampleName"
                                            placeholder="Masukan Nama Anda" name="nama">
                                        <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div  class="mb-3">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Masukan Username Anda" name="username">
                                        <?php echo form_error('username', '<div class="text-danger small ml-2 ">', '</div>') ?>
                                </div>                           
                                <div  class="mb-3 ">              
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">   
                                            <?php echo form_error('password', '<div class="text-danger small ml-2 ">', '</div>') ?>                             
                                </div>
                                <div class="row">
                                
                                </div>
                            </div>
                                <div class="text-center">
                                    <button type="submit" class="btn-primary w-100 my-4 mb-2">Simpan </button>
                                    <?php echo $this->session->flashdata('alert',true);?>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!-- /Register -->
       </div>
      </div>
    </div>
 </div>
    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= site_url('assets/sneat')?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= site_url('assets/sneat')?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= site_url('assets/sneat')?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= site_url('assets/sneat')?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= site_url('assets/sneat')?>/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= site_url('assets/sneat')?>/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>