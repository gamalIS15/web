<h2 class="title-top">Bukutamu</h2>

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
        <?php } ?>

    </ul>
</div>
<?php

    }else if(isset($data["success"])) {
?>

    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
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
        <label for="pwd">Komentar:</label>
        <textarea class="form-control" name="comment" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<br>
<div class="middle-panel">
    <div class="top-middle-panel">Komentar Bukutamu (<?php echo $data["total"]; ?>)</div>

    <div class="list">

        <?php foreach($data["bukutamu"] as $row) { ?>
        <div class="well">
            <div class="title"><?php echo $row->full_name; ?> | <a href="mailto:<?php echo $row->email; ?>"><?php echo $row->email; ?></a> |
                <?php
                    if($row->website){
                ?>
                <a href="<?php echo $row->website; ?>" target="_blank"><?php echo $row->website; ?></a>
                <?php } ?>
            </div>
            <div class="text">
                <?php echo $row->comment; ?>
            </div>
        </div>

        <?php } ?>
    </div>
</div>