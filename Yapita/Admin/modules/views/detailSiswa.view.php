<div class="row">
<div class="col-lg-12">
<h1>Detail Siswa / Alumni</h1>
<ol class="breadcrumb">
<li><a href="<?php SITE_URL; ?>">
<i class="fa fa-dashboard"></i></a></li>
<li class=active"><i class="fa fa-users"></i> Detail Siswa / Alumni</li>
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
<?php echo $data["siswa"]->nama_lengkap; ?>
</td>
</tr>
<tr>
<td><b>NIS</b></td><td style="width: 1px;">:</td>
