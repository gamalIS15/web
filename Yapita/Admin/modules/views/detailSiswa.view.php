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
  <td><?php echo $data["siswa"]->nis; ?></td>
  </tr>
  <tr>
    <td><b>Jurusan</b></td><td style="width: 1px;">:</td>
    <td><?php echo $data["siswa"]->nama_jurusan; ?></td>
  </tr>
  <tr>
    <td><b>Status</b></td><td style="width: 1px;">:</td>
    <td>
      <span class="labbel label-primary" style="font-size:15px;">
        <?php echo $data["siswa"]->status; ?></span>
    </td>
  </tr>
  <tr>
    
    <td><b>Jenis Kelamin</b></td><td style="width: 1px;">:</td>
    <td><?php echo $data["siswa"]->jenis_kelamin; ?></td>
  </tr>
  <tr>
    <td><b>No. HP</b></td><td style="width: 1px;">:</td>
    <td><?php echo $data["siswa"]->nomor_hp; ?></td>
  </tr>
  <tr>
    <td><b>Angkatan</b></td><td style="width: 1px;">:</td>
    <td><?php echo $data["siswa"]->angkatan; ?></td>
  </tr>
  <tr>
    <td><b>Alamat</b></td><td style="width: 1px;">:</td>
    <td><?php echo $data["siswa"]->alamat; ?></td>
  </tr>
  <tr>
    <td><b>Foto</b></td><td style="width: 1px;">:</td>
    <td>

<?php
          if($data["siswa"]->images) {
      ?>
      <img src="../public/images/siswa/<?php echo $data["siswa"]->images; ?>" style="max-width: 200px;" alt="<?php echo $data["siswa"]->nama_lengkap; ?>">
      <?php
          }else{
      ?>
      <img src="../resources/images/no_user.jpg" style="max-width: 200px;" alt="<?php echo $data["siswa"]->nama_lengkap; ?>">
      <?php
            }
?>
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
 <td>
      <?php
            if($data["siswa"]->status == "Siswa") {
      ?>
      <a class="btn btn-primary" href="<?php echo SITE_URL; ?>?page=alumni">Daftar Alumni</a>
      <?php
            }
      ?>
      <a class="btn btn-warning" href="<?php echo SITE_URL; ?>?page=siswa&&action=delete&&id=<?php echo $data["siswa"]->id_siswa; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
    </td>
  </tr>
  </tbody>
  </table>
  
  </div>
</div>
