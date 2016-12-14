<div class="row">
    <div class="col-lg-12">
        <h1>Guru</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-users"></i> Guru</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <a href="<?php echo PATH; ?>?page=guru&&action=insert" class="btn btn-primary">+ Tambah Data Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header" style="width: 40px;">No</th>
                    <th>Foto</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                    <th style="width: 88px;">Jenis Kelamin</th>
                    <th>Status</th>
                    <th class="header" style="width:150px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["guru"] as $guru) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td>

                                <?php
                                    if($guru->images) {
                                ?>
                                    <img src="../public/images/guru/<?php echo $guru->images; ?>" style="width: 50px;" alt="<?php echo $guru->images; ?>">
                                <?php
                                }else{
                                ?>
                                    <img src="../resources/images/no_user.jpg" style="width: 50px;" alt="<?php echo $guru->images; ?>">
                                <?php
                                }
                                ?>

                            </td>
                            <td><?php echo $guru->nip; ?></td>
                            <td><?php echo $guru->nama_lengkap; ?></td>
                            <td><?php echo $guru->mata_pelajaran; ?></td>
                            <td><?php echo $guru->jenis_kelamin; ?></td>
                            <td><?php echo $guru->status; ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?php echo SITE_URL; ?>?page=guru&&action=detail&&id=<?php echo $guru->id_guru; ?>">Detail</a>
                                <a class="btn btn-warning btn-sm" href="<?php echo SITE_URL; ?>?page=guru&&action=update&&id=<?php echo $guru->id_guru; ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="<?php echo SITE_URL; ?>?page=guru&&action=delete&&id=<?php echo $guru->id_guru; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
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