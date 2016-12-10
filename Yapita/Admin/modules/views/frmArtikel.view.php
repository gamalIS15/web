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
