<div class="row">
<div class="col-lg-12">
<h1>Detail Siswa / Alumni</h1>
<ol class="breadcrumb">
<li><a href="<?php SITE_URL; ?>">
<i class="fa fa-dashboard"></i></a></li>
<li class="active"><i class="fa fa-users"></i> Detail Siswa / Alumni</li>
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
          <th class="header" style="width: 150px;">Action</th>
        </tr>
      </thead>
      
