<div class="thongke margin_topbot10">
   <div class="title_support">Thống Kê</div>
      <div class="body_right">
         <ul class="none_list_style">
            <li>Thành viên: <b><?php echo $user['total']?></b></li>
            <li>Thành viên mới: <a href="#"><?php echo $user['new']->username?></a> </li>
            <li>Đang trực tuyến: <?php echo Yii::app()->counter->getOnline(); ?></li>
            <li>Xem chi tiết <img  src="<?php echo Yii::app()->theme->GetBaseUrl()?>/assets/img/icon_people.jpg" alt=""/></li>
            <li class='hitstat'><!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="" ><script  type="text/javascript" >
try {Histats.start(1,2114582,4,605,110,55,"00011111");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2114582&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  --></li>
         </ul>
       </div>
</div>