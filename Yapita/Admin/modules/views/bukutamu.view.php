<div class="row">
    <div class="col-lg-12">
        <h1>Bukutamu</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-book"></i> Bukutamu</li>
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
                    <th class="header">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["bukutamu"] as $bukutamu) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $bukutamu->full_name; ?></td>
                            <td><?php echo $bukutamu->email; ?></td>
                            <td><?php echo $bukutamu->website; ?></td>
                            <td><?php echo $bukutamu->comment; ?></td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure delete this data?');" href="<?php echo SITE_URL; ?>?page=bukutamu&&action=delete&&id=<?php echo $bukutamu->id_bukutamu; ?>">Delete</a></td>
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