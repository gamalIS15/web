<div class="row">
    <div class="col-lg-12">
        <h1>Kontak</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-phone-square"></i> Kontak</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header">No</th>
                    <th class="header">Nama Lengkap</th>
                    <th class="header">Email</th>
                    <th class="header">Website</th>
                    <th class="header">Komentar</th>
                    <th class="header" style="width:110px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["kontak"] as $kontak) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kontak->nama_lengkap; ?></td>
                            <td><?php echo $kontak->email; ?></td>
                            <td><?php echo $kontak->website; ?></td>
                            <td><?php echo $kontak->isi; ?></td>
                            <td>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this data?');" href="<?php echo SITE_URL; ?>?page=kontak&&action=delete&&id=<?php echo $kontak->id_kontak; ?>">Delete</a>
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