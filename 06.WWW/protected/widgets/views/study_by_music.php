<div class='span3 study-by-music'>
    <div class='row-fluid block-home-4-title'>
        <a href='#'>học tiếng anh qua bài hát</a>
    </div>
    <div class='box-ul'>
        <ul class='ul3 music_block_tab_control'>
            <li class='active'><a href='tab1'>Mới nhất</a></li>
            <li><a href='tab2'>Nghe nhiều</a></li>
        </ul>
        <div class='box-ul-body music_block_tab'>
            <div id="tab1" class="_tab">
            <ul id='sty-music'>
                <?php foreach($new_music as $k){ ?>
                <li>
                    <a title="<?php echo $k->title?>" href="<?php echo Yii::app()->getBaseUrl(true)."/".$k->category->taxonomy->slug."/".$k->category->slug."-".$k->category->id."/".$k->slug."-".$k->id.".html"?>"><?php echo $k->title?></a>
                    <p>Nghe: <?php echo $k->view?></p>
                </li>
                <?php } ?>
                
            </ul>
            </div>
            <div id="tab2" class='_tab' style="display:none">
            <ul id='sty-music'>
                <?php foreach($hot_music as $k){ ?>
                <li>
                    <a title="<?php echo $k->title?>" href="<?php echo Yii::app()->getBaseUrl(true)."/".$k->category->taxonomy->slug."/".$k->category->slug."-".$k->category->id."/".$k->slug."-".$k->id.".html"?>"><?php echo $k->title?></a>
                    <p>Nghe: <?php echo $k->view?></p>
                </li>
                <?php } ?>
                
            </ul>
            </div>
        </div>
    </div>
</div>