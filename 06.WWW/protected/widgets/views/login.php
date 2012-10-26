<div class="row-fluid margin_topbot10"> 
    <form method="post">
        <div class="top_login">
            <img style="float: left"  src="<?php echo Yii::app()->theme->GetBaseUrl()?>/assets/img/people.png" alt="">
                <a href="#">Thành viên</a><br/>
                   <a href="<?php echo Yii::app()->getBaseUrl(true)?>/thanh-vien/dang-ky.html">Đăng ký thành viên</a>
         </div><!--end .top_login-->
         <div class="body_login">
            <label>Tên đăng nhập:</label>
            <input type="text" class="input inputfix" name="username" title="Username" placeholder="Tên đăng nhập"/>
            <label>Mật khẩu:</label>
            <input type="password" class="input inputfix" name="password" title="Password" placeholder="********"/>
            <button type="submit" class="btn btn-primary" name="actionWc">Đăng nhập</button>
            <div class="checkbox"> <input type="checkbox"/> Ghi nhớ tài khoản <br/> <a href="#">Quên mật khẩu?</a>
            </div>
        </div><!--end .body_login-->
    </form>
</div><!--end.row-fluid-->