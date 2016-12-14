<div class="row">
    <div class="col-lg-12">
        <h1>Manajemen User</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-users"></i> User</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <a href="<?php echo PATH; ?>?page=user&&action=insert" class="btn btn-primary">+ Tambah Data Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header" style="width: 40px;">No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th class="header" style="width:150px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["user"] as $user) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td>

                                <?php
                                    if($user->images) {
                                ?>
                                    <img src="../public/images/user/<?php echo $user->images; ?>" style="width: 50px;" alt="<?php echo $user->images; ?>">
                                <?php
                                }else{
                                ?>
                                    <img src="../resources/images/no_user.jpg" style="width: 50px;" alt="<?php echo $user->images; ?>">
                                <?php
                                }
                                ?>

                            </td>
                            <td><?php echo $user->nama_lengkap; ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td><?php echo $user->username; ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?php echo SITE_URL; ?>?page=user&&action=detail&&id=<?php echo $user->id_user; ?>">Detail</a>
                                <a class="btn btn-warning btn-sm" href="<?php echo SITE_URL; ?>?page=user&&action=update&&id=<?php echo $user->id_user; ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="<?php echo SITE_URL; ?>?page=user&&action=delete&&id=<?php echo $user->id_user; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
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