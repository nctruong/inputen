<?php
$this->pageTitle = Yii::app()->name . ' - Error';
?>

<h2>Error <?php echo $code; ?></h2>

<div class="error">
    <?php echo CHtml::encode($message); ?>
</div>
<div class="source">
    <?php echo $source; ?>
</div>
<div class="source">
    <?php echo $file; ?>
    <?php echo $line; ?>
</div>
<div class="source">
    <?php echo $trace; ?>
</div>