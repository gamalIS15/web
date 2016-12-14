<div class="row">
    <div class="col-lg-12">
        <h1><?php echo $data["title"]; ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li><a href="<?php SITE_URL; ?>?page=guru"><i class="fa fa-users"></i> Guru</a></li>
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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=guru">

        <?php } ?>

        <form method="post" role="form" enctype="multipart/form-data">
            <table class="table-responsive table">

                <tbody>
                <tr>
                    <td style="width: 200px;"><label>NIP</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" <?php if(isset($data["guru"])) echo 'value="' . $data["guru"]->nip . '"'; ?> name="nip" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Nama Lengkap</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="nama_lengkap" <?php if(isset($data["guru"])) echo 'value="' . $data["guru"]->nama_lengkap . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Jenip Kelamin</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki" <?php if(isset($data["guru"])) if($data["guru"]->jenis_kelamin == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                            <option value="Perempuan" <?php if(isset($data["guru"])) if($data["guru"]->jenis_kelamin == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Golongan</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="golongan" <?php if(isset($data["guru"])) echo 'value="' . $data["guru"]->golongan . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Nomor HP</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="no_hp" <?php if(isset($data["guru"])) echo 'value="' . $data["guru"]->no_hp . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Tempat Lahir</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="tempat_lahir" <?php if(isset($data["guru"])) echo 'value="' . $data["guru"]->tempat_lahir . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Tanggal Lahir</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="date" name="tanggal_lahir" <?php if(isset($data["guru"])) echo 'value="' . $data["guru"]->tanggal_lahir . '"'; ?> class="form-control">
                        <div style="font-size: 12px; margin-top: 10px;"><span style="color: red;">*</span>Format : mm/dd/yyyy</div>
                    </td>
                </tr>
                <tr>
                    <td><label>Mata Pelajaran</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="mata_pelajaran" <?php if(isset($data["guru"])) echo 'value="' . $data["guru"]->mata_pelajaran . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Alamat</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <textarea name="alamat" class="form-control" rows="5"><?php if(isset($data["guru"])) echo $data["guru"]->alamat; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td><label>Status</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select name="status" class="form-control">
                            <option value="PNS" <?php if(isset($data["guru"])) if($data["guru"]->status == 'PNS') echo 'selected'; ?>>PNS</option>
                            <option value="Honor" <?php if(isset($data["guru"])) if($data["guru"]->status == 'Honor') echo 'selected'; ?>>Honor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Foto</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="file" name="images" class="form-control">
                        <?php
                            if(isset($data["guru"])) {
                                if($data["guru"]->images){
                                ?>
                                <img src="../public/images/guru/<?php echo $data["guru"]->images; ?>" alt="images" style="width:100%; max-width: 200px;">
                            <?php
                                }
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-warning" href="<?php echo PATH; ?>?page=guru">Tampilkan Semua Guru</a> </td>
                </tr>
                </tbody>

            </table>
        </form>

    </div>
</div>