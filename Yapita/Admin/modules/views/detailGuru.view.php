<div class="row">
    <div class="col-lg-12">
        <h1>Detail Guru</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-users"></i> Detail Guru</li>
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
                    <?php echo $data["guru"]->nama_lengkap; ?>
                </td>
            </tr>
            <tr>
                <td><b>NIP</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["guru"]->nip; ?>
                </td>
            </tr>
            <tr>
                <td><b>Jenis Kelamin</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["guru"]->jenis_kelamin; ?>
                </td>
            </tr>
            <tr>
                <td><b>Golongan</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["guru"]->golongan; ?>
                </td>
            </tr>
            <tr>
                <td><b>Tempat Tanggal Lahir</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["guru"]->tempat_lahir; ?>, <?php echo $data["guru"]->tanggal_lahir; ?>
                </td>
            </tr>
            <tr>
                <td><b>Mata Pelajaran</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["guru"]->mata_pelajaran; ?>
                </td>
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["guru"]->status; ?>
                </td>
            </tr>
            <tr>
                <td><b>Alamat</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["guru"]->alamat; ?>
                </td>
            </tr>
            <tr>
                <td><b>Foto</b></td>
                <td style="width: 1px;">:</td>
                <td>

                    <?php
                    if($data["guru"]->images) {
                        ?>
                        <img src="../public/images/guru/<?php echo $data["guru"]->images; ?>" style="max-width: 200px;" alt="<?php echo $data["guru"]->nama_lengkap; ?>">
                    <?php
                    }else{
                        ?>
                        <img src="../resources/images/no_user.jpg" style="max-width: 200px;" alt="<?php echo $data["guru"]->nama_lengkap; ?>">
                    <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-primary" href="<?php echo SITE_URL; ?>?page=guru">Daftar Guru</a>
                    <a class="btn btn-warning" href="<?php echo SITE_URL; ?>?page=guru&&action=update&&id=<?php echo $data["guru"]->id_guru; ?>">Edit</a>
                    <a class="btn btn-danger" href="<?php echo SITE_URL; ?>?page=guru&&action=delete&&id=<?php echo $data["guru"]->id_guru; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
                </td>
            </tr>
            </tbody>

        </table>

    </div>
</div>