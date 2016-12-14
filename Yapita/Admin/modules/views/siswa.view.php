<div class="row">
    <div class="col-lg-12">
        <h1><?php echo $data["title"]; ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-users"></i> <?php echo $data["title"]; ?></li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <a href="<?php echo PATH; ?>?page=siswa&&action=insert" class="btn btn-primary">+ Tambah Data Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header" style="width: 40px;">No</th>
                    <th class="header">Foto</th>
                    <th class="header">NIS</th>
                    <th class="header">Nama</th>
                    <th class="header">Jurusan</th>
                    <th class="header">Jenis Kelamin</th>
                    <th class="header">Angkatan</th>
                    <th class="header" style="width:150px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["siswa"] as $siswa) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td>

                                <?php
                                    if($siswa->images) {
                                ?>
                                    <img src="../public/images/siswa/<?php echo $siswa->images; ?>" style="width: 50px;" alt="<?php echo $siswa->images; ?>">
                                <?php
                                }else{
                                ?>
                                    <img src="../resources/images/no_user.jpg" style="width: 50px;" alt="<?php echo $siswa->images; ?>">
                                <?php
                                }
                                ?>

                            </td>
                            <td><?php echo $siswa->nis; ?></td>
                            <td><?php echo $siswa->nama_lengkap; ?></td>
                            <td><?php echo $siswa->nama_jurusan; ?></td>
                            <td><?php echo $siswa->jenis_kelamin; ?></td>
                            <td><?php echo $siswa->angkatan; ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?php echo SITE_URL; ?>?page=siswa&&action=detail&&id=<?php echo $siswa->id_siswa; ?>">Detail</a>
                                <a class="btn btn-warning btn-sm" href="<?php echo SITE_URL; ?>?page=siswa&&action=update&&id=<?php echo $siswa->id_siswa; ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="<?php echo SITE_URL; ?>?page=siswa&&action=delete&&id=<?php echo $siswa->id_siswa; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>