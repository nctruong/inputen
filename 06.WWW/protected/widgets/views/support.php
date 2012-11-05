 <div class="support row-fluid margin_topbot10">
      <div class="top_support">
          <img style="margin-left: 45px"  src="<?php echo Yii::app()->theme->GetBaseUrl()?>/assets/img/support.jpg">
      </div><!--end. top_support-->
      <div class="title_support">Hỗ trợ trực tuyến</div>
      <div class="body_right">
         <ul class="none_list_style">
             <?php
                foreach($data as $k){
                    switch($k->type){
                        case 0:
                            echo "<li>".$k->name.": <a href='ymsgr:sendim?".$k->nick."'><img src='http://opi.yahoo.com/online?u=".$k->nick."&amp;m=g&amp;t=2&amp;l=us' border='0' style='height:18px'></a></li>";
                            break;
                        case 1:
                            echo "<li>".$k->name.": <a href='ymsgr:sendim?".$k->nick."' title='".$k->name."'><img src='http://opi.yahoo.com/online?u=".$k->nick."&amp;m=g&amp;t=2&amp;l=us' border='0' style='height:18px'></a></li>";
                            break;
                    }
                }
             ?>
         </ul>
    </div>
</div><!--end .suport-->