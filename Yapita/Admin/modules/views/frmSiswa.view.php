<div class="row">
    <div class="col-lg-12">
        <h1><?php echo $data["title"]; ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li><a href="<?php SITE_URL; ?>?page=siswa"><i class="fa fa-newspaper-o"></i> Siswa / Alumni</a></li>
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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=<?php echo strtolower($_POST["status"]); ?>">

        <?php } ?>

        <form method="post" role="form" enctype="multipart/form-data">
            <table class="table-responsive table">

                <tbody>
                <tr>
                    <td style="width: 200px;"><label>NIS</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" <?php if(isset($data["siswa"])) echo 'value="' . $data["siswa"]->nis . '"'; ?> name="nis" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Nama Lengkap</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="nama_lengkap" <?php if(isset($data["siswa"])) echo 'value="' . $data["siswa"]->nama_lengkap . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Jurusan</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select class="form-control" name="jurusan">
                            <?php
                                foreach($data["jurusan"] as $jurusan) {
                                    ?>
                                    <option <?php if(isset($data["siswa"])) {
                                        if($data["siswa"]->id_jurusan == $jurusan->id_jurusan) echo 'selected';
                                    }
                                    ?> value="<?php echo $jurusan->id_jurusan; ?>"><?php echo $jurusan->nama_jurusan; ?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Jenis Kelamin</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki" <?php if(isset($data["siswa"])) if($data["siswa"]->jenis_kelamin == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                            <option value="Perempuan" <?php if(isset($data["siswa"])) if($data["siswa"]->jenis_kelamin == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Nomor HP</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="no_hp" <?php if(isset($data["siswa"])) echo 'value="' . $data["siswa"]->nomor_hp . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Angkatan</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="number" min="1700" name="angkatan" <?php if(isset($data["siswa"])) echo 'value="' . $data["siswa"]->angkatan . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Alamat</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <textarea name="alamat" class="form-control" rows="5"><?php if(isset($data["siswa"])) echo $data["siswa"]->alamat; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td><label>Status</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select name="status" class="form-control">
                            <option value="Siswa" <?php if(isset($data["siswa"])) if($data["siswa"]->status == 'Siswa') echo 'selected'; ?>>Siswa</option>
                            <option value="Alumni" <?php if(isset($data["siswa"])) if($data["siswa"]->status == 'Alumni') echo 'selected'; ?>>Alumni</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Foto</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="file" name="images" class="form-control">
                        <?php
                            if(isset($data["siswa"])) {
                                if($data["siswa"]->images){
                                    echo "a";
                                ?>
                                <img src="../public/images/siswa/<?php echo $data["siswa"]->images; ?>" alt="images" style="width:100%; max-width: 200px;">
                            <?php
                                }
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" class="btn btn-primary">Submit</button> <a class="btn btn-warning" href="<?php echo PATH; ?>?page=siswa">Tampilkan Semua Siswa / Alumni</a> </td>
                </tr>
                </tbody>

            </table>
        </form>

    </div>
</div>