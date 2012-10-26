
<div class='row-fluid margin_topbot10'>

</div><!-- end #sub-nav -->
<div id='wrap-en' class='row-fluid'>                        
    <div class="span9">         
        <div id="page-wrapper" class="re_span9">
            <div id="page-obj">
                <div id="en-left" class="page-wrapper-top">
                    <div class=" row-fluid relative">
                        <div class="span12">
                            <span class="title"><?php echo $item->title ?></span>  							
                            <span class="vip"><?php if ($item->premium == 1) {
    echo 'Bài học vip';
} ?></span>
                        </div>

                        <div class="row-fluid line"></div>       
                    </div><!-- end .row-fluid -->    
                </div><!-- end .page-wrapper-top-->    		
                <div class="page-wrapper-main">
                    <?php
                    echo $item->content;
                    ?>
                </div><!-- end .page-wrapper-main -->
                <div class="clearfix"></div>
            </div><!-- end page-obj -->
       <div id="page-obj">
                <div class="row-fluid">
                </div>
                <div class="clearfix"></div>
            </div><!-- end page-obj -->
        </div> <!-- end #page-wrapper-->
        <div class="clearfix"></div>
        <div id="bottom-page" class="margin_topbot10 margin20">
        </div><!-- end #bottom-page -->
    </div><!-- end span9 -->
    <div id='en-right' class='span3'>
        <?php $this->widget('search'); ?>
        <?php $this->widget('login'); ?>
        <?php $this->widget('support'); ?>
        <?php $this->widget('support2'); ?>
        <?php $this->widget('adv'); ?>
        <?php $this->widget('statistics'); ?>                    
    </div><!-- end #end-right -->
</div><!-- end #wrap-en -->