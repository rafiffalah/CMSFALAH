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
                                    senin , Desember 16</div>
                                <ul class="social-area social-area-2">
                                    <li>
                                        <a class="facebook-icon" href="https://www.facebook.com/profile.php?id=100076944781047&mibextid=ZbWKwL">
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
                                    
                                    <li>
                                    <a class="instagram-icon" href="https://www.instagram.com/falaaaahh21_/profilecard/?igsh=MWdwbm9hdnNpN3Z2">
                                    <i class="fa fa-instagram"></i>
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
            <nav class="navbar navbar-expand-lg">
                <div class="container nav-container">
                    <div class="responsive-mobile-menu">
                        <div class="logo d-lg-none d-block">
                            <a class="main-logo" href="index.html"><img src="<?=base_url('assets/dwi/')?>assets/img/logo.png" alt="img"></a>
                        </div>
                        <button
                            class="menu toggle-btn d-block d-lg-none"
                            data-target="#nextpage_main_menu"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="icon-left"></span>
                            <span class="icon-right"></span>
                        </button>
                    </div>
                    <div class="nav-right-part nav-right-part-mobile">
                        <a class="search header-search" href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="nextpage_main_menu">
                        <ul class="navbar-nav menu-open">
                            <li class="current-menu-item">
                                <a href="#banner">Home</a>
                            </li>
                            <li class="current-menu-item">
                                <a href="#rofi">Trending News</a>
                            </li>
                            <?php foreach($kategori as $dwi){?>
                            <li class="current-menu-item">
                                <a href="#trending"><?=$dwi['nama_kategori']?></a>
                            </li>
                            <?php }?>

                        </ul>
                    </div>
                    <div class="nav-right-part nav-right-part-desktop">
                        <div class="menu-search-inner">
                            <input type="text" placeholder="Search For">
                            <button type="submit" class="submit-btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar end -->

        <!-- banner area start -->
        <div class="banner-area banner-inner-1 bg-black" id="banner">
            <!-- banner area start -->
            <div class="banner-inner pt-5">
                <div class="container">
                    <div class="row">
                        <?php
                        shuffle($konten);
$count = 0; // Variabel penghitung
foreach ($konten as $cc) {
    if ($count >= 1) break; // Hentikan setelah menampilkan konten pertama
    ?>
                        <div class="col-lg-6">
                            <div class="thumb after-left-top">
                                <img src="<?= base_url('upload/konten/' . $cc['foto']) ?>" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="banner-details mt-4 mt-lg-0">
                                <div class="post-meta-single">
                                    <ul>
                                        <li>
                                            <a class="tag-base tag-blue" href="#"><?= $cc['nama_kategori'] ?></a>
                                        </li>
                                        <li class="date">
                                            <i class="fa fa-clock-o"></i><?= date('d.m.Y', strtotime($cc['tanggal'])) ?></li>
                                    </ul>
                                </div>
                                <h2><?= $cc['judul'] ?></h2>
                                <p>
                                <?php
    $words = explode(' ', $cc['keterangan']); // Pisahkan string menjadi array kata
    if (count($words) > 10) {
        // Ambil hanya 10 kata pertama dan tambahkan ".."
        echo implode(' ', array_slice($words, 0, 10)) . ' ..';
    } else {
        // Tampilkan seluruh teks jika tidak lebih dari 4 kata
        echo $cc['keterangan'];
    }
    ?>
                                </p>
                                <a class="btn btn-blue" href="<?=base_url('home/artikel/' . $cc['slug'])?>">Read More</a>
                            </div>
                        </div>
                        <?php
    $count++; // Tambah penghitung
}
?>

                    </div>

                </div>
            </div>
            <!-- banner area end -->

            <div class="container">
                <div class="row">
                    <?php
                    shuffle($konten);
// Pastikan array $konten memiliki elemen
if (!empty($konten)) {
    // Loop melalui elemen pertama hingga kelima
    for ($i = 0; $i < 4; $i++) {
        if (!isset($konten[$i])) break; // Hentikan jika elemen tidak ada
        ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-post-wrap style-white">
                            <div class="thumb">
                                <img src="<?= base_url('upload/konten/' . $konten[$i]['foto']) ?>" alt="img">
                                <a class="tag-base tag-blue" href="#"><?=$konten[$i]['nama_kategori']?></a>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="<?=base_url('home/artikel/' . $cc['slug'])?>"><?= $konten[$i]['judul'] ?></a>
                                </h6>
                                <div class="post-meta-single mt-3">
                                    <ul>
                                        <li>
                                            <i class="fa fa-clock-o"></i><?= $konten[$i]['tanggal'] ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
    }
}
?>

                </div>
            </div>
        </div>
        <!-- banner area end -->

        <div class="post-area pd-top-75 pd-bottom-50" id="rofi">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="section-title">
                            <h6 class="title">Trending News</h6>
                        </div>
                        <div class="post-slider owl-carousel">
                            <div class="item">
                                <div class="trending-post">
                                    <?php
                                // Pastikan array $konten memiliki elemen
                                if (!empty($konten)) {
                                    // Loop melalui elemen pertama hingga kelima
                                    for ($i = 4; $i < 8; $i++) {
                                        if (!isset($konten[$i])) break; // Hentikan jika elemen tidak ada
                                        ?>

                                    <div class="single-post-wrap style-overlay">
                                        <div class="thumb">
                                            <img src="<?= base_url('upload/konten/' . $konten[$i]['foto']) ?>" alt="img">
                                        </div>
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <p>
                                                    <i class="fa fa-clock-o"></i><?=$konten[$i]['tanggal'] ?></p>
                                            </div>
                                            <h6 class="title">
                                                <a href="<?=base_url('home/artikel/' . $konten[$i]['slug'])?>"><?= $konten[$i]['judul']?></a>
                                            </h6>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <?php }?>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="section-title">
                            <h6 class="title">Latest News</h6>
                        </div>
                        <div class="post-slider owl-carousel">
                            <div class="item">
                                <?php
                                // Pastikan array $konten memiliki elemen
                                if (!empty($konten)) {
                                    // Loop melalui elemen pertama hingga kelima
                                    for ($i =8; $i < 16; $i++) {
                                        if (!isset($konten[$i])) break; // Hentikan jika elemen tidak ada
                                        ?>

                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img
                                                src="<?=base_url('upload/konten/' . $konten[$i] ['foto'])?>"
                                                style="width:140px;"
                                                alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li>
                                                            <i class="fa fa-clock-o"></i>
                                                            <?= $konten[$i]['tanggal']?></li>
                                                    </ul>
                                                </div>
                                                <h6 class="title">
<a href="<?=base_url('home/artikel/' . $konten[$i]['slug'])?>">
    <?php
    $judul = $konten[$i]['judul']; // Ambil judul
    $kata = explode(' ', $judul); // Pecah judul menjadi array kata
    $judulTerbatas = implode(' ', array_slice($kata, 0,8)); // Ambil maksimal8 kata
    echo $judulTerbatas . (count($kata) >8 ? '...' : ''); // Tambahkan "..." jika lebih dari8 kata
    ?>
</a>
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } }?>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="section-title">
                            <h6 class="title">What’s new</h6>
                        </div>
                        <div class="post-slider owl-carousel">
                            <?php foreach($konten as $cc){?>
                            <div class="item">
                                <div class="single-post-wrap">
                                    <div class="thumb">
                                        <img src="<?=base_url('upload/konten/' .$cc['foto'])?>" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single mb-4 pt-1">
                                            <ul>
                                                <!-- <li><a class="tag-base tag-blue"
                                                href="#"><?=$cc['nama_kategori']?></a></li> -->
                                                <li>
                                                    <i class="fa fa-clock-o"></i><?=$cc['judul']?></li>
                                            </ul>
                                        </div>
                                        <p>
                                        <?php
                                            $words = explode(' ', $cc['keterangan']); // Pisahkan string menjadi array kata
                                            if (count($words) > 10) {
                                                // Ambil hanya 10 kata pertama dan tambahkan ".."
                                                echo implode(' ', array_slice($words, 0, 10)) . ' ..';
                                            } else {
                                                // Tampilkan seluruh teks jika tidak lebih dari 4 kata
                                                echo $cc['keterangan'];
                                            }
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="section-title">
                            <h6 class="title">Join With Us</h6>
                        </div>
                        <div class="social-area-list mb-4">
                            <ul>
                                <li>
                                    <a class="facebook" href="#">
                                        <i class="fa fa-facebook social-icon"></i>
                                        <span>12,300</span><span>Like</span>
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter" href="#">
                                        <i class="fa fa-twitter social-icon"></i>
                                        <span>12,600</span><span>Followers</span>
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="youtube" href="#">
                                        <i class="fa fa-youtube-play social-icon"></i>
                                        <span>1,300</span><span>Subscribers</span>
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="instagram" href="#">
                                        <i class="fa fa-instagram social-icon"></i>
                                        <span>52,400</span><span>Followers</span>
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="google-plus" href="#">
                                        <i class="fa fa-google social-icon"></i>
                                        <span>19,101</span><span>Subscribers</span>
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="add-area">
                            <a href="#"><img
                                class="w-100"
                                src="<?=base_url('assets/dwi/')?>assets/img/add/6.png"
                                alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-sky pd-top-80 pd-bottom-50" id="latest">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-sm-7">

                        <div class="container">
                            <div class="row">
                                <?php foreach($konten as $cc){ ?>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-post-wrap style-overlay">
                                        <div class="thumb">
                                            <img height="200" width="400" src="<?=base_url('upload/konten/' . $cc['foto'])?>" alt="img">
                                        </div>
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <p>
                                                    <i class="fa fa-clock-o"></i><?=$cc['tanggal']?></p>
                                            </div>

                                            <h6 class="title">
                                                <a href="<?=base_url('home/artikel/' . $cc['slug'])?>">

                                                    <p>
                                                        <?php
                                                $words = explode(' ', $cc['judul']); // Pisahkan string menjadi array kata
                                                if (count($words) > 4) {
                                                    // Ambil hanya 4 kata pertama dan tambahkan ".."
                                                    echo implode(' ', array_slice($words, 0, 4)) . ' ..';
                                                } else {
                                                    // Tampilkan seluruh teks jika tidak lebih dari 4 kata
                                                    echo $cc['judul'];
                                                }
                                                ?>
                                                </p>
                                            </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="trending-post style-box">
                            <div class="section-title">
                                <h6 class="title">Trending News</h6>
                            </div>
                            <div class="post-slider owl-carousel">
                                <div class="item">
                                    <?php 
$counter = 0; // Inisialisasi penghitung
foreach ($konten as $dwi) {

    $counter++; // Tambah penghitung
    if ($counter >= 16) { // Jika penghitung mencapai 4
        break; // Keluar dari loop
    }

?>
                                    <div class="single-post-list-wrap">
                                        <div class="media">
                                            <div class="media-left">
                                                <img
                                                    style="width:100px;"
                                                    src="<?=base_url('upload/konten/' . $dwi['foto'])?>"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li>
                                                                <i class="fa fa-clock-o"></i><?=$dwi['tanggal']?></li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title">
                                                        <a href="<?=base_url('home/artikel/' . $cc['slug'])?>" style="font-size:15px;">

                                                        <?php
                                                            $words = explode(' ', $dwi['judul']); // Pisahkan string menjadi array kata
                                                            if (count($words) > 4) {
                                                                // Ambil hanya 4 kata pertama dan tambahkan ".."
                                                                echo implode(' ', array_slice($words, 0, 4)) . ' ..';
                                                            } else {
                                                                // Tampilkan seluruh teks jika tidak lebih dari 4 kata
                                                                echo $dwi['judul'];
                                                            }
                                                            ?>
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $counter++; }?>

                                </div>
                                <div class="item">
                                <?php 
$counter = 0; // Inisialisasi penghitung
foreach ($konten as $dwi) {

    $counter++; // Tambah penghitung
    if ($counter >= 16) { // Jika penghitung mencapai 4
        break; // Keluar dari loop
    }

?>                                    <div class="single-post-list-wrap">
                                        <div class="media">
                                            <div class="media-left">
                                                <img
                                                    style="width:100px;"
                                                    src="<?=base_url('upload/konten/' . $dwi['foto'])?>"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li>
                                                                <i class="fa fa-clock-o"></i><?=$dwi['tanggal']?></li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title">
                                                        <a href="<?=base_url('home/artikel/' . $cc['slug'])?>" style="font-size:15px;">

                                                        <?php
                                                            $words = explode(' ', $dwi['judul']); // Pisahkan string menjadi array kata
                                                            if (count($words) > 4) {
                                                                // Ambil hanya 4 kata pertama dan tambahkan ".."
                                                                echo implode(' ', array_slice($words, 0, 4)) . ' ..';
                                                            } else {
                                                                // Tampilkan seluruh teks jika tidak lebih dari 4 kata
                                                                echo $dwi['judul'];
                                                            }
                                                            ?>
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $counter++;}?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-area bg-black pd-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h5 class="widget-title">ABOUT US</h5>
                        <div class="widget_about">
                            <p>"Berusaha sekarang mungkin melelahkan, tapi bermalas-malasan akan
                                lebih menyakitkan nanti."</p>
                            <ul class="social-area social-area-2 mt-4">
                                <li>
                                    <a class="facebook-icon" href="https://www.facebook.com/profile.php?id=100076944781047&mibextid=ZbWKwL">
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
                                    <a class="instagram-icon" href="https://www.instagram.com/falaaaahh21_/profilecard/?igsh=MWdwbm9hdnNpN3Z2">
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
                <p>Copyright ©2024
                    <a href="https://solverwp.com/">Falahh</a>
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