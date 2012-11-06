<div class='row-fluid block-home-4-title'>
    <a href='#'>top thành viên</a>
</div>
<div class='row-fluid box-ul top-member'>
    <ul class='ul3 control_member'>
        
        <li class='active'><a href='tab1'>Nhiệt tình</a></li>
        <li><a href='tab2'>Chuyên cần</a></li>
        <li><a href='tab3'>Thành tích</a></li>
    </ul>
    <div class='row-fluid list-member top_member_list'>
        <div class="member_enthusiasm _tab" id="tab1">
        <ul>
            <?php
                foreach($mem_nhiettinh as $k){
                    $avt = $k->avatar;
                    if($avt == '' ){
                        $avt = Yii::app()->getBaseUrl(true)."/data/avatar/no-avt.png";
                    }
                    echo "<li><img class='span4' style='width:61px' src='".$avt."'>";
                    echo "<div class='info-mem'><span class='name'><a href='#'>".$k->username."</a></span><br />
                    - Danh hiệu:<font color='red' style='margin-left:7px'>".Libraries::getDanhhieu($k->point)."</font><br />
                    - Bài viết: ".$k->point."
                    </div></li>";
                }
            ?>
        </ul>
        </div>
        <div class="member_aggressive _tab hide" id="tab2">
        <ul>
            <?php
                foreach($mem_chuyencan as $k){
                    $avt = $k->avatar;
                    if($avt == '' ){
                        $avt = Yii::app()->getBaseUrl(true)."/data/avatar/no-avt.png";
                    }
                    echo "<li><img class='span4' style='width:61px' src='".$avt."'>";
                    echo "<div class='info-mem'><span class='name'><a href='#'>".$k->username."</a></span><br />
                    -<font color='red' style='margin-left:7px'>".Libraries::getDanhhieu($k->diligent_point,2)."</font><br />
                    - Điểm học bạ: ".$k->diligent_point."
                    </div></li>";
                }
            ?>
        </ul>
        </div>
        <div class="member_achievement _tab hide" id="tab3" >
        <ul>
            <?php
                foreach($mem_thanhtich as $k){
                    $avt = $k->avatar;
                    if($avt == '' ){
                        $avt = Yii::app()->getBaseUrl(true)."/data/avatar/no-avt.png";
                    }
                    echo "<li><img class='span4' style='width:61px' src='".$avt."'>";
                    echo "<div class='info-mem'><span class='name'><a href='#'>".$k->username."</a></span><br />
                    - Điểm thành tích: ".$k->mark."
                    </div></li>";
                }
            ?>
        </ul>
        </div>
    </div><!-- end .list member -->
</div>