<h2 class="title-top">Data Guru</h2>

<table class="table table-stripped paging-table">
<thead>
<tr>
<th>Foto</th>
<th>NIP</th>
<th>Nama</th>
<th>Mata Pelajaran</th>
<th style="width: 88px;">Jenis Kelamin</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php
  foreach($data["guru"] as $guru){
  ?>
  <tr>
  <td>
  <?php
        if($guru->images){
  ?>
  
<img src="public/images/guru/<?php echo $guru->images; ?>" style="width: 50px; height: 50px;">
<?php
      }else {
  ?>
<img src="resources/images/no_user.jpg" style="width: 50px; height: 50px;">
<?php
  
?>
</td>
<td style="vertical-align: middle;">
<?php echo $guru->nip; ?></td>
<td style="vertical-align: middle;">
<b><a href="<?php echo SITE_URL; ?>?page=detailguru&&action=detail&&id=<?php echo $guru->id_guru; ?>">
<?php echo $guru->nama_lengkap; ?></a>
</b>
</td>
<td style="vertical-align: middle;">
<?php echo $guru->mata_pelajaran; ?></td>
<td style="vertical-align: middle;">
<?php echo $guru->jenis_kelamin; ?></td>
<td style="vertical-align: middle;">
<?php echo $guru->angkatan; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
