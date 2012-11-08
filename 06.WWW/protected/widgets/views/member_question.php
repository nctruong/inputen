<div class='span3  '>
    <div class='card fix-card relative'>
        <div class='card-title'>
            <A href='#'>Câu hỏi & trả lời của thành viên</a>
        </div>
        <div class='mem-body' style="width:205px">
            <ul class="list_question_">
                <?php
                $i = 0;
                foreach ($question as $k) {
                    $i++;
                    $rep = Mquestion::getQuestion($k->id)
                    ?>
                    <li>
                        <span class="name"><a href="<?php echo Yii::app()->getBaseUrl(true) . "/thanh-vien/" . $k->user_id ?>.html "><?php echo $k->member->username ?></a><?php if ($k->member->premium == 1) {
                        echo "<img src='" . Yii::app()->getBaseUrl(true) . "/themes/default/assets/img/vip_i.gif'>";
                    } ?></span>
                        <p><?php echo $k->content ?></p>
                        <span class='answer' name="<?php echo count($rep) ?>" alt="<?php echo $k->id ?>">Trả lời (<?php echo count($rep) ?>)</span>

                        <div class='hidden_reply hide' alt="<?php echo $k->id ?>">
                            <div class="total_reply">
    <?php
    echo '<ul>';
    if (is_array($rep)) {
;
        foreach ($rep as $v) {
            ?>
                                        <li><span class="name"><a href="<?php echo Yii::app()->getBaseUrl(true) . "/thanh-vien/" . $v->user_id ?>.html "><?php echo $v->member->username ?></a><?php if ($v->member->premium == 1) {
                                echo "<img src='" . Yii::app()->getBaseUrl(true) . "/themes/default/assets/img/vip_i.gif'>";
                            } ?></span>
                                            <p><?php echo $v->content ?></p>
                                        </li>  
        <?php
        }
    }
    echo '</ul>';
    ?>
                            </div>
                            <?php if ($this->_session['login_id']) { ?>
                                <form method="post" class="form_ajax_<?php echo $k->id ?>" name="form_ajax_<?php echo $k->id ?>">
                                    <textarea name="content_reply"  style="width:177px;height:70px;font-size:11px"></textarea>
                                    <button onclick="javascript:void(0)" alt="<?php echo $k->id ?>" class="floatR btn btn-info btn-mini btn_ajax_submit" style="margin-left:5px">Send</button>&nbsp;<button class="floatR btn btn-info btn-mini close_cmt">Close</button>
                                    <input type="hidden" name="submit_reply" value="ok">
                                    <input type="hidden" name="hid" value="<?php echo $k->id ?>">
                                    <input type="hidden" name="vip" value="<?php echo Libraries::get_vip($this->_session['login_id']) ?>">
                                </form>
                    <?php
                    } else {
                        echo '<a class="btn btn-warning"><font size="11px">Bạn phải đăng nhập mới gửi được phản hồi</font></a>';
                    }
                    ?>
                        </div>
                    </li> 

<?php }
?>

            </ul>

        </div>
        <div style="" class="get_question">
            <a class="icon-arrow-left floatL get_old_question" alt="0" href="javascript:void(0)"></a><a class="icon-arrow-right floatR get_new_question" alt="<?php echo $i ?>" href="javascript:void(0)"></a>
        </div>
    </div>
    <div class='clearfix' style='margin-bottom: -4px!important'></div>
    <div class='row-fluid'>
<?php $this->widget('statistics') ?>
    </div><!-- end thong ke -->
</div>