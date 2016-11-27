<?php
$page = (isset($_GET['page']) && $_GET['page']) ?
$_GET['page'] : '';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Halaman Admin SMA Yapita</title>

        <!--Boostrap Core CSS-->
        <link href="<?php echo PATH; ?>
        resources/css/bootstrap.min.css" rel="stylesheet">

        <!--Custom CSS-->
        <link href="<?php echo PATH; ?>
        resources/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="<?php echo PATH; ?>
        resources/css/sb-admin.css" rel="stylesheet">

        <!--Custom Font-->
        <link href="<?php echo PATH; ?>
        resources/Font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

      </head>
      <body>
          <div id="wrapper">
            <!--Navigation-->>
              <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <!--Brand logo dan group agar tampilan mobile rapi-->>
                  <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   </button>
                  <a class="navbar-brand" href="index.php">Halaman Admin SMA Yapita</a>
                  </div>
                  <!--Top Menu-->>
                  <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                            <?php echo $data['login']->nama_lengkap; ?>
                            <b class="caret"></b>
                        </a>
                    </li>
                  </ul>

              </nav>
          </div>

      </body>
</html>