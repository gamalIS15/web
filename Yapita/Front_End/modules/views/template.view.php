<?php
$page = (isset($_GET['page']) && $_GET['page']) ?
$_GET['page'] : '';
?>
<!DOCTYPE html>
<!--[if IE 8]>><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9]>><html lang="en" class="ie8"><![endif]-->
<!--[if !IE ]>><!-->><html lang="en"><!--<![endif]-->
    <head>
    <meta charset="utf-8" />
    <title>SMA YAPITA</title>

    <!--CSS-->>
    <link href="resources/css/bootstrap.min.css"
     rel="stylesheet" />
    <link href="resources/css/jquery.dataTables.min.css"
     rel="stylesheet" />
    <link href="resources/css/style.min.css"
     rel="stylesheet" />

    <!--Javascript-->>
    <script type="text/javascript" src="resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="resources/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="resources/js/expand.js"></script>
    <script type="text/javascript" src="resources/js/common.js"></script>

    </head>
    <body>
    <!--Main Website-->>
        <div id="main">

            <!--Header Website-->>
            <div id="Header">
            <!--Logo-->>
                <div id="logo">
                <h1>SMA YAPITA</h1>
                <h2>Keputih, Surabaya</h2>
                </div>
            </div>

            <!--Sosmed-->>
            <div class="social">
            <ul>
                <li><a href="#"><img src="resources/images/Facebook.png" alt="facebook"></a></li>
                <li><a href="#"><img src="resources/images/Twitter.png" alt="twitter"></a></li>
            </ul>
            </div>
            <div class="clear"></div>
        </div>
        <!--Akhir Header-->>
        <div id="top-menu-website">
            <div class="left-side" style="margin-top: 48px;"></div>
            <div class="middle-side">
            <ul>
            
            </ul>
            </div>
        </div>
    </body>
</html>