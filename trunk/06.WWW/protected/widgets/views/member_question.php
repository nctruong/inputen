<div class='span3'>
    <div class='card fix-card'>
        <div class='card-title'>
            <A href='#'>Câu hỏi & trả lời của thành viên</a>
        </div>
        <div class='mem-body' style="width:205px">
            <ul>
                <?php
                    foreach($question as $k){ $rep = Mquestion::getQuestion($k->id)?>
                <li>
                    <span class="name"><a href="<?php echo Yii::app()->getBaseUrl(true)."/thanh-vien/".$k->user_id?>.html "><?php echo $k->member->username?></a><?php if($k->member->premium==1) {echo "<img src='".Yii::app()->getBaseUrl(true)."/themes/default/assets/img/vip_i.gif'>"; }?></span>
                    <p><?php echo $k->content?></p>
                    <span class='answer' alt="<?php echo $k->id ?>">Trả lời (<?php echo count($rep)?>)</span>
                    
                    <div class='hidden_reply hide' alt="<?php echo $k->id?>">
                        <div class="total_reply">
                            <?php
                                if(is_array($rep)){ echo '<ul>';
                                    foreach($rep as $v){?>
                            <li><span class="name"><a href="<?php echo Yii::app()->getBaseUrl(true)."/thanh-vien/".$v->user_id?>.html "><?php echo $v->member->username?></a><?php if($v->member->premium==1) {echo "<img src='".Yii::app()->getBaseUrl(true)."/themes/default/assets/img/vip_i.gif'>"; }?></span>
                                        <p><?php echo $v->content?></p>
                            </li>  
                                   <?php }
                                   echo '</ul>';
                                }
                            ?>
                        </div>
                        <?php if($u_log) {?>
                        <form method="post" class="" name="form_ajax_<?php echo $k->id ?>">
                            <textarea name="content_reply" style="width:177px;height:70px;font-size:11px"></textarea>
                            <button type="submit" alt="<?php echo $k->id?>" class="floatR btn btn-info btn-mini btn_ajax_submit" style="margin-left:5px">Send</button>&nbsp;<button class="floatR btn btn-info btn-mini close_cmt">Close</button>
                            <input type="hidden" name="submit_reply" value="ok">
                            <input type="hidden" name="hid" value="<?php echo $k->id?>">
                        </form>
                        <?php } ?>
                    </div>
                </li>    
                    <?php }
                    
                ?>
            </ul>
        </div>
    </div>
    <div class='clearfix' style='margin-bottom: -4px!important'></div>
    <div class='row-fluid'>
        <?php $this->widget('statistics') ?>
    </div><!-- end thong ke -->
</div>