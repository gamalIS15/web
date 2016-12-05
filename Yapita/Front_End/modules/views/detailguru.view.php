<h2 class="title-top">Detail Guru</h2>
<table style="width : 100%;">
<tbody>
<?php
    foreach($data["guru"] as $guru) {
?>
<tr>
<td style="vertical-align: top; width : 220px; padding-right: 20px;">
<?php
      if($guru->images) {
?>

<img src"public/images/guru/<?php echo $guru->images; ?>" style="width: 200px;">
<?php
        }else {
?>

<img src="resources/images/no_user.jpg" style="width: 200px;">
<?php
      }
?>
<a href="?php echo SITE_URL; ?>?page=guru" style="margin-top:10px; display: block;" class="btn btn-primary">Daftar Guru</a>
</td>
<td style="vertical-align: top;">

<table class="table">
<tbody>
<tr>
<td style="border-top: 0;">Nama</td>
<td style="border-top: 0;">:</td>
<td style="border-top: 0;">
<b><?php echo $guru->nama_lengkap; ?></b>
</td>
</tr>
