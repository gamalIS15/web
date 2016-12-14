<div class="row">
    <div class="col-lg-12">
        <h1>Artikel</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-newspaper-o"></i> Artikel</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <a href="<?php echo PATH; ?>?page=artikel&&action=insert" class="btn btn-primary">+ Tambah Data Baru</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header">No</th>
                    <th class="header">Tanggal</th>
                    <th class="header">Gambar</th>
                    <th class="header">Kategori</th>
                    <th class="header">Judul</th>
                    <th class="header">Penulis</th>
                    <th class="header">Isi</th>
                    <th class="header" style="width:100px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["artikel"] as $artikel) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td>
                                <h6><?php echo $artikel->waktu; ?></h6>
                                <h6><?php echo $artikel->tanggal; ?></h6>
                            </td>
                            <td>

                                <?php
                                    if($artikel->images) {
                                ?>
                                    <img src="../public/images/artikel/<?php echo $artikel->images; ?>" style="width: 100px;" alt="<?php echo $artikel->judul; ?>">
                                <?php
                                }
                                ?>

                            </td>
                            <td><?php echo $artikel->nama_kategori; ?></td>
                            <td><?php echo $artikel->judul; ?></td>
                            <td><?php echo $artikel->penulis; ?></td>
                            <td><?php echo substr(strip_tags($artikel->isi), 0,100); ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="<?php echo SITE_URL; ?>?page=artikel&&action=update&&id=<?php echo $artikel->id_artikel; ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="<?php echo SITE_URL; ?>?page=artikel&&action=delete&&id=<?php echo $artikel->id_artikel; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
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