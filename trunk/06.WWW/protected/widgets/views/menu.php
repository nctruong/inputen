<div id='en-nav' class='row-fluid'>
    <ul>
        <li><a href='<?php echo Yii::app()->getBaseUrl(true); ?>'>Home</a></li>
        <?php
        foreach ($menus as $key => $value) {
            ?>
            <li <?php if ($key == $total) {
            echo "class='li-last'";
        } ?>><a href='<?php echo Yii::app()->getBaseUrl(true) . '/' . $value->slug.'.html'; ?>'><?php echo $value->name; ?></a></li>
            <?php
        }
        ?>
    </ul>
</div><!-- end #menu-bar -->