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


    <!-- Javascript for animation -->

    <script type="text/javascript" src="resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="resources/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="resources/js/expand.js"></script>
    <script type="text/javascript" src="resources/js/common.js"></script>
</head>

<body>

<div class="container">

    <form class="form-signin" method="post">

        <div class="form-group">
            <div class="text-center text-header">
                <img src="<?php echo PATH; ?>resources/images/logo.png" style="width:75px;" alt="logo">
                <h1>SMA YAPITA</h1>
                <h2>Login Administrator</h2>
            </div>
        </div>
        <hr>

        <?php
        if(count($message)) {
            ?>

            <div class="alert <?php if($message["success"] == false) echo "alert-danger"; else echo "alert-success"; ?>"><?php echo $message["message"]; ?></div>

        <?php
        }
        ?>
        <div class="form-group">

            <label for="input-username">Username</label>
            <input type="text" id="input-username" name="username" class="form-control" placeholder="ex : SMAYapita" required autofocus>
        </div>
        <div class="form-group">

            <label for="input-password">Password</label>
            <input type="password" name="password" id="input-password" class="form-control" required>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div> <!-- /container -->


</body>
</html>