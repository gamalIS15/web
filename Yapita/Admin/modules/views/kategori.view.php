<div class="row">
    <div class="col-lg-12">
        <h1>Kategori</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-th-large"></i> Kategori</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <a href="<?php echo PATH; ?>?page=kategori&&action=insert" class="btn btn-primary">+ Tambah Data Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header" style="width: 40px;">No</th>
                    <th class="header">Kategori</th>
                    <th class="header" style="width:100px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["kategori"] as $kategori) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kategori->nama_kategori; ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="<?php echo SITE_URL; ?>?page=kategori&&action=update&&id=<?php echo $kategori->id_kategori; ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="<?php echo SITE_URL; ?>?page=kategori&&action=delete&&id=<?php echo $kategori->id_kategori; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
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