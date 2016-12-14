<h2 class="title-top">Kontak Kami</h2>

<?php
    if(isset($data["error"]) && count($data["error"]) > 0) {
?>
<div class="alert alert-danger" role="alert">
    <ul class="list-square">
        <?php
            foreach($data["error"] as $error) {
        ?>
        <li>
            <?php echo $error; ?>
        </li>
        <?php } ?>

    </ul>
</div>
<?php

    }else if(isset($data["success"])) {
?>

    <div class="alert alert-success">
        <?php echo $data["success"]; ?>
    </div>

<?php } ?>

<form role="form" method="post" action="<?php echo POSITION_URL; ?>">
    <div class="form-group">
        <label for="name">Nama Lengkap:</label>
        <input type="name" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="website">Website:</label>
        <input type="url" class="form-control" name="website" placeholder="http://" id="website">
    </div>
    <div class="form-group">
        <label for="pwd">Isi:</label>
        <textarea class="form-control" name="comment" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>