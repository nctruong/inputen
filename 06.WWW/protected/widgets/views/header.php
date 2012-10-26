 <div id='sub-nav' class='row-fluid'>
                        	
                        	<?php  if($this->main_title){?>
                                        <div class='page3'>
                                               <div class='title_ab span6'>
                                                    <span class="row-fluid span12 title_small"><?php echo $this->main_title['big'] ?></span>
                                                    
                                                    <span class="row-fluid span12 title_big"><?php echo $this->main_title['small'] ?></span>           
                                                    
                                                </div>
                                        </div>   
                                <?php }if($this->title) {?>
                            <div id='' class='span6 page3_2'>
                                
								<?php echo $this->title ?>
                            </div>
    <?php } ?>
            </div><!-- end #sub-nav -->