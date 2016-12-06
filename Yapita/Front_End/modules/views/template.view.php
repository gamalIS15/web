<?php

    $page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>SMA YAPITA</title>

    <!-- CSS -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet" />
    <link href="resources/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="resources/css/style.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- Javascript  -->

    <script type="text/javascript" src="resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="resources/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="resources/js/expand.js"></script>
    <script type="text/javascript" src="resources/js/common.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

<!-- MAIN -->
<div id="main">

    <!-- HEADER -->
    <div id="header">
        <!-- LOGO WEBSITE -->
        <div id="logo">
            <h1>SMA YAPITA</h1>
            <h2>Keputih, Surabaya</h2>
        </div>

        <!-- SOSMED -->
        <div class="social">
            <ul>
                <li><a href="#"><img src="resources/images/Facebook.png" alt="facebook"></a></li>
                <li><a href="#"><img src="resources/images/Twitter.png" alt="twitter"></a></li>
            </ul>
        </div>

        <div class="clear"></div>
    </div>
    <!-- AKHIR HEADER -->

    <!-- TOP MENU -->
    <div id="top-menu-website">
        <div class="left-side" style="margin-top: 48px;"></div>
        <div class="middle-side">
            <ul>
                <li><a href="<?php echo SITE_URL; ?>" <?php if($page=="" || $page=="home") echo 'class="current"'; ?>>Home</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=artikel" <?php if($page=="artikel") echo 'class="current"'; ?>>Artikel</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=siswa" <?php if($page=="siswa") echo 'class="current"'; ?>>Data Siswa</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=guru" <?php if($page=="guru") echo 'class="current"'; ?>>Data Guru</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=tentang" <?php if($page=="tentang") echo 'class="current"'; ?>>Tentang Sekolah</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=kontak" <?php if($page=="kontak") echo 'class="current"'; ?>>Kontak</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="right-side"></div>
        <div class="clear"></div>
    </div>
    <!-- AKHIR TOP MENU -->

    <?php

        if($page == "" || $page == "home") {
    ?>
            <!-- SLIDER -->
            <div id="slider-website">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo PATH; ?>/resources/images/banner_1.jpg" alt="Sekolahku rumahku">
                        </div>

                        <div class="item">
                            <img src="<?php echo PATH; ?>/resources/images/banner_2.jpg" alt="Sekolahku rumahku">
                        </div>

                        <div class="item">
                            <img src="<?php echo PATH; ?>/resources/images/banner_3.jpg" alt="Sekolahku rumahku">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    <?php } ?>
    <!-- AKHIR SLIDER -->

    <!-- KONTEN -->
    <div id="content">

        <!-- KONTEN KIRI -->
        <div id="left-content">

            <?php
                $view = new View($viewName);
                $view->bind('data', $data);
                $view->forceRender();
            ?>
        </div>
        <!-- AKHIR KONTEN KIRI -->

        <!-- KONTEN KANAN -->
        <div id="right-content">

            <!-- ARTIKEL TERBARU -->
            <div class="right-panel">
                <div class="top-right-panel">Artikel Terbaru</div>
                <div class="bottom-right-panel">
                    <ul>
                        <?php

                            foreach($data["main_artikel"] as $artikel) {

                                ?>
                                <li><a href="<?php echo SITE_URL; ?>?page=artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>"><?php echo $artikel->judul; ?></a></li>
                            <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>

            <!-- KATEGORI ARTIKEL -->
            <div class="right-panel">
                <div class="top-right-panel">Kategori Artikel</div>
                <div class="bottom-right-panel">
                    <ul>
                        <?php

                            foreach($data["main_kategori"] as $kategori) {

                                ?>
                                <li>
                                    <a href="<?php echo SITE_URL; ?>?page=kategori&&action=detail&&id=<?php echo $kategori->id_kategori; ?>">
                                        <?php echo $kategori->nama_kategori; ?> (<?php echo $kategori->total; ?>)
                                    </a>
                                </li>
                            <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>

            <!-- INFO USER -->
            <div class="right-panel">
                <div class="top-right-panel">Info User</div>
                <div class="bottom-right-panel">

                    <table class="table" style="margin-bottom: 0;">
                        <tbody>
                        <tr>
                            <td style="border-top:0;">IP User</td>
                            <td style="border-top:0;">:</td>
                            <td style="border-top:0;">
                                <b>
                                    <?php echo $_SERVER["REMOTE_ADDR"]; ?>
                                </b>

                            </td>
                        </tr>
                        <tr>
                            <td>Waktu</td>
                            <td>:</td>
                            <td>
                                <b>
                                    <?php

                                    date_default_timezone_set('Asia/Jakarta');

                                    echo date('h : i : s');
                                    ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>
                                <b>
                                    <?php echo date('d F Y'); ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td>Browser</td>
                            <td>:</td>
                            <td>
                                <b>
                                    <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
                                </b>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- END OF RIGHT CONTENT WEBSITE -->

        <div class="clear"></div>

    </div>
    <!-- AKHIR KONTEN -->

    <!-- FOOTER  -->
    <div id="footer">
        <div class="content-footer">
            <div class="left-footer"></div>
            <div class="middle-footer">
                &copy; Copyright by SMA YAPITA. All right reserved. Powered by <a href="http://is.its.ac.id" target="_blank">SISTEM INFORMASI</a>.
            </div>
            <div class="right-footer"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- AKHIR MAIN  -->


</body>
</html>
