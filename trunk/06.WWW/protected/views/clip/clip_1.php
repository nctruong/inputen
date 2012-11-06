<?php foreach ($data as $k) { ?>
    <li>
        <?php $cat = $k->category; ?>
        <a href='<?php echo Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "-" . $cat->id . "/" . $k->slug . "-" . $k->id . ".html" ?>'>
            <?php
            $img = $k->image;
            if ($img == '') {
                $img = Yii::app()->getBaseUrl(true) . '/uploads/Image/no_image.gif';
            }
            ?>
            <img class="image_box_most_video" src='<?php echo $img ?>' />
            <center><p class="desc_block_video"><?php echo ($k->desc) ?></p></center>
        </a>
    </li>
<?php } ?> 