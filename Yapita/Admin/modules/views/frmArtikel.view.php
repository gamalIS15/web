<div class="row">
<div class="col-lg-12">
<h1><?php echo $data["title"]; ?></h1>
<ol class="breadcrumb">
<li><a href="<?php SITE_URL; ?>">
<i class="fa fa-dashboard"></i></a></li>
<li><a href="<?php SITE_URL; ?>?page=artikel">
<i class="fa fa-newspaper-o"></i> Artikel</a></li>
<li class="active"><i class="fa fa-pencil"></li>
<?php echo $data["title"]; ?></li>
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
<?php ) ?>
    </ul>
    </div>
    <?php
             }else if(isset($data["success"]))    {
    ?>
    
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo$data["success"]; ?>
        </div>
    <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=artikel">
    
    <?php } ?>
    
    <form method="post" role="form" enctype="multipart/form-data">
        <table class="table-responsive table">
            
            <tbody>
                <tr>
                    <td style="width: 200px;"><label>Judul</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="judul" <?php if(isset($data["artikel"])) echo 'value="' . $data["artikel"]->judul . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;"><label>Kategori</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select class="form-control" name="kategori">
   <?php
        foreach($data["kategori"] as $kategori) {
   ?>
                            <option <?php if(isset($data["artikel"])){
                                              if($data["artikel"]->id_kategori == $kategori->id_kategori) echo 'selected';
                                             }
                                             ?> value="<?php echo $kategori->id_kategori; ?>">
                                <?php echo $kategori->nama_kategori; ?></option>
                            <?php
                                             }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
