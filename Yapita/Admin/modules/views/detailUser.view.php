<div class="row">
    <div class="col-lg-12">
        <h1>Detail User</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-users"></i> Detail User</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">

        <table class="table-responsive table">

            <tbody>
            <tr>
                <td style="width: 200px;"><b>Nama Lengkap</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["user"]->nama_lengkap; ?>
                </td>
            </tr>
            <tr>
                <td><b>Username</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["user"]->username; ?>
                </td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["user"]->email; ?>
                </td>
            </tr>
            <tr>
                <td><b>Nomor HP</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["user"]->no_hp; ?>
                </td>
            </tr>
            <tr>
                <td><b>Alamat</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["user"]->alamat; ?>
                </td>
            </tr>
            <tr>
                <td><b>Foto</b></td>
                <td style="width: 1px;">:</td>
                <td>

                    <?php
                    if($data["user"]->images) {
                        ?>
                        <img src="../public/images/user/<?php echo $data["user"]->images; ?>" style="max-width: 200px;" alt="<?php echo $data["user"]->nama_lengkap; ?>">
                    <?php
                    }else{
                        ?>
                        <img src="../resources/images/no_user.jpg" style="max-width: 200px;" alt="<?php echo $data["user"]->nama_lengkap; ?>">
                    <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-primary" href="<?php echo SITE_URL; ?>?page=user">Daftar User</a>
                    <a class="btn btn-warning" href="<?php echo SITE_URL; ?>?page=user&&action=update&&id=<?php echo $data["user"]->id_user; ?>">Edit</a>
                    <a class="btn btn-danger" href="<?php echo SITE_URL; ?>?page=user&&action=delete&&id=<?php echo $data["user"]->id_user; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
                </td>
            </tr>
            </tbody>

        </table>

    </div>
</div>