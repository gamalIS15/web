<div class="row">
    <div class="col-lg-12">
        <h1><?php echo $data["title"]; ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li><a href="<?php SITE_URL; ?>?page=user"><i class="fa fa-users"></i> User</a></li>
            <li class="active"><i class="fa fa-pencil"></i> <?php echo $data["title"]; ?></li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?php
        if(isset($data["error"]) && count($data["error"]) > 0) {
            ?>
            <div class="alert alert-danger" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul class="list-square">
                    <?php
                    foreach($data["error"] as $error) {
                        ?>
                        <li>
                            <?php echo $error; ?>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        <?php

        }else if(isset($data["success"])) {
            ?>

            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $data["success"]; ?>
            </div>
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=user">

        <?php } ?>


        <div class="alert alert-info">
            Password dan Gambar jika tidak di ganti Kosongkan saja
        </div>

        <form method="post" role="form" enctype="multipart/form-data">
            <table class="table-responsive table">

                <tbody>
                <tr>
                    <td style="width: 200px;"><label>Nama Lengkap</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="nama_lengkap" <?php if(isset($data["user"])) echo 'value="' . $data["user"]->nama_lengkap . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="email" name="email" <?php if(isset($data["user"])) echo 'value="' . $data["user"]->email . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Nomor HP</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="no_hp" <?php if(isset($data["user"])) echo 'value="' . $data["user"]->no_hp . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Alamat</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <textarea name="alamat" class="form-control" rows="5"><?php if(isset($data["user"])) echo $data["user"]->alamat; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;"><label>Username</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="username" <?php if(isset($data["user"])) echo 'value="' . $data["user"]->username . '" disabled'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;"><label>Password</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="password" name="password" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;"><label>Re-Type Password</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="password" name="re_password" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Foto</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="file" name="images" class="form-control">
                        <?php
                            if(isset($data["user"])) {
                                if($data["user"]->images){
                                ?>
                                <img src="../public/images/user/<?php echo $data["user"]->images; ?>" alt="images" style="width:100%; max-width: 200px;">
                            <?php
                                }
                            }
                        ?>
                    </td>
                </tr>
                <?php
                if(isset($data["user"])) {
                ?>
                <?php

                }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-warning" href="<?php echo PATH; ?>?page=user">Tampilkan Semua User</a> </td>
                </tr>
                </tbody>

            </table>
        </form>

    </div>
</div>