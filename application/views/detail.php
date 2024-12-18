<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>NextPage - Blog, Magazine Html Template</title>

        <!-- favicon -->
        <link
            rel="icon"
            href="<?=base_url('assets/dwi/')?>assets/img/favicon.png"
            sizes="20x20"
            type="image/png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="<?=base_url('assets/dwi/')?>assets/css/vendor.css">
        <link rel="stylesheet" href="<?=base_url('assets/dwi/')?>assets/css/style.css">
        <link
            rel="stylesheet"
            href="<?=base_url('assets/dwi/')?>assets/css/responsive.css">
        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>

    </head>
    <body>

        <!-- preloader area start -->

        <!-- search popup start-->
        <div class="td-search-popup" id="td-search-popup">
            <form action="index.html" class="search-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search.....">
                </div>
                <button type="submit" class="submit-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- search popup end-->
        <div class="body-overlay" id="body-overlay"></div>

        <!-- header start -->
        <div class="navbar-area">
            <!-- topbar end-->
            <div class="topbar-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-7 align-self-center">
                            <div class="topbar-menu text-md-left text-center">
                                <ul class="align-self-center">
                                    <li>
                                        <a href="#">Author</a>
                                    </li>
                                    <li>
                                        <a href="#">Advertisment</a>
                                    </li>
                                    <li>
                                        <a href="#">Member</a>
                                    </li>
                                    <li>
                                        <a href="#">Sitemap</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 mt-2 mt-md-0 text-md-right text-center">
                            <div class="topbar-social">
                                <div class="topbar-date d-none d-lg-inline-block">
                                    <i class="fa fa-calendar"></i>
                                    Saturday, October 7</div>
                                <ul class="social-area social-area-2">
                                    <li>
                                        <a class="facebook-icon" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter-icon" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="youtube-icon" href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram-icon" href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="google-icon" href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- topbar end-->

            <!-- adbar end-->
            <div class="adbar-area bg-black d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5 align-self-center">
                            <div class="logo text-md-left text-center">
                                <a class="main-logo" href="<?= base_url('admin/home') ?>"><img src="<?=base_url('assets/dwi/')?>assets/img/logo.png" alt="img"></>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- adbar end-->

            <!-- navbar start -->
        
        </div>
        <!-- navbar end -->

        <center>
      <div style="width:1100px;">
            <h3><?=$konten->judul?></h3>
            <img width="1200px" src="<?=base_url('upload/konten/' . $konten->foto)?>" alt="">
            <p style="text-align:left; font-size:24px;"><?=nl2br(htmlspecialchars($konten->keterangan))?></p>
        </div>
    </center>
    <div class="footer-area bg-black pd-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h5 class="widget-title">ABOUT US</h5>
                        <div class="widget_about">
                            <p>Jika kamu bermalas-malasan, maka hasilnya hanya angan-angan tanpa kenyataan."
                                "Malas hari ini, menyesal di kemudian hari." "Kemalasan adalah jalan pintas
                                menuju kegagalan." "Hasil besar tidak akan datang dari usaha yang
                                setengah-setengah." "Malas bergerak, maka jangan heran jika rezeki juga malas
                                menghampirimu." "Waktu terus berjalan, sementara kemalasan hanya menunda masa
                                depanmu." "Berusaha sekarang mungkin melelahkan, tapi bermalas-malasan akan
                                lebih menyakitkan nanti."</p>
                            <ul class="social-area social-area-2 mt-4">
                                <li>
                                    <a class="facebook-icon" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter-icon" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="youtube-icon" href="#">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="instagram-icon" href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="google-icon" href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget_tag_cloud">
                        <h5 class="widget-title">TAGS</h5>
                        <div class="tagcloud">
                            <a href="#">Consectetur</a>
                            <a href="#">Video</a>
                            <a href="#">App</a>
                            <a href="#">Food</a>
                            <a href="#">Game</a>
                            <a href="#">Internet</a>
                            <a href="#">Phones</a>
                            <a href="#">Development</a>
                            <a href="#">Video</a>
                            <a href="#">Game</a>
                            <a href="#">Gadgets</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h5 class="widget-title">CONTACTS</h5>
                        <ul class="contact_info_list">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                829 Cabell Avenue Arlington, VA 22202</li>
                            <li>
                                <i class="fa fa-phone"></i>
                                +085700215801</li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                Infomase@website.com
                                <br>
                                rafifgantengt@mail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget_recent_post">
                        <h5 class="widget-title">POPULAR NEWS</h5>
                        <div class="single-post-list-wrap style-white">
                            <div class="media">
                                <div class="media-left">
                                    <img src="<?=base_url('assets/dwi/')?>assets/img/post/list/1.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-clock-o"></i>08.22.2020</li>
                                            </ul>
                                        </div>
                                        <h6 class="title">
                                            <a href="#">Himachal Pradesh rules in order to allow tourists
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post-list-wrap style-white">
                            <div class="media">
                                <div class="media-left">
                                    <img src="<?=base_url('assets/dwi/')?>assets/img/post/list/2.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-clock-o"></i>08.22.2020</li>
                                            </ul>
                                        </div>
                                        <h6 class="title">
                                            <a href="#">Himachal Pradesh rules in order to allow tourists
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <ul class="widget_nav_menu">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="#">rivacy Policy</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <p>Copyright ©2021
                    <a href="https://solverwp.com/">SolverWp</a>
                </p>
            </div>
        </div>
    </div>

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top">
            <i class="fa fa-angle-up"></i>
        </span>
    </div>
    <!-- back to top area end -->

    <!-- all plugins here -->
    <script src="<?=base_url('assets/dwi/')?>assets/js/vendor.js"></script>
    <!-- main js -->
    <script src="<?=base_url('assets/dwi/')?>assets/js/main.js"></script>
</body>
</html>