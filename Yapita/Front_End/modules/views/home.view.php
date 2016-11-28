<!-- INFORMASI TERBARU -->
<div class="middle-panel">
    <div class="top-middle-panel">Informasi Terbaru</div>
    <div class="bottom-middle-panel">
        <ul>
            <?php
                foreach($data["artikel"] as $artikel) {
                    ?>
                    <li>
                        <div class="date"><?php echo $artikel->waktu; ?> - <?php echo date("d/m/Y", strtotime($artikel->tanggal)); ?></div>
                        <div class="title"><a href="<?php echo SITE_URL; ?>?page=artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>"><?php echo $artikel->judul; ?></a></div>
     <div class="text">
        <?php
        if($artikel->images) {
            ?>

            <img src="public/images/artikel/<?php echo $artikel->images; ?>" style="float: left; max-width: 200px; margin : 0 5px 5px 0;">
        <?php
        }
        ?>

                        <?php echo substr(strip_tags($artikel->isi), 0,310); ?>

        <div class="clear"></div>
    </div>
                    </li>
                <?php
                }
            ?>
        </ul>
    </div>

    <div class="link">
        <a class="btn btn-primary" href="<?php echo SITE_URL; ?>?page=artikel">Tampilkan Semua Berita</a>
    </div>
</div>
