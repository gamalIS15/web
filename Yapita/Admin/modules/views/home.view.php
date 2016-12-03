
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Statistik Website</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $data["total"]["bukutamu"]; ?></div>
                        <div>Bukutamu</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo PATH; ?>?page=bukutamu">
                <div class="panel-footer">
                    <span class="pull-left">Tampilkan Semua</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $data["total"]["artikel"]; ?></div>
                        <div>Artikel</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo PATH; ?>?page=artikel">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $data["total"]["guru"]; ?></div>
                        <div>Total Guru</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo PATH; ?>?page=guru">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-phone-square fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $data["total"]["kontak"]; ?></div>
                        <div>Total Kontak</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo PATH; ?>?page=kontak">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Info User</h3>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">

                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>:</th>
                                <td><?php echo $data["userData"]->nama_lengkap; ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <th>:</th>
                                <td><?php echo $data["userData"]->username; ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>:</th>
                                <td><?php echo $data["userData"]->email; ?></td>
                            </tr>
                            <tr>
                                <th>No. HP</th>
                                <th>:</th>
                                <td><?php echo $data["userData"]->no_hp; ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th>:</th>
                                <td><?php echo $data["userData"]->alamat; ?></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-6">


                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Last Login</th>
                                <th>:</th>
                                <td><?php echo date('d-m-Y'); ?></td>
                            </tr>
                            <tr>
                                <th>IP Address</th>
                                <th>:</th>
                                <td><?php echo $_SERVER["REMOTE_ADDR"]; ?></td>
                            </tr>
                            <tr>
                                <th>Server</th>
                                <th>:</th>
                                <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
                            </tr>
                            <tr>
                                <th>Browser</th>
                                <th>:</th>
                                <td><?php echo $_SERVER["HTTP_USER_AGENT"]; ?></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.row -->