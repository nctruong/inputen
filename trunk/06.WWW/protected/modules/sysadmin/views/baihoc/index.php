<?php

$this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'bordered ',
    'dataProvider' => $dataProvider,
    'template' => "{items}",
    'columns' => array(
        array('name' => 'id', 'header' => 'Id'),
        array('name' => 'title', 'header' => 'Title'),
        array('name' => 'slug', 'header' => 'Slug'),
        array('name' => 'content', 'header' => 'Content'),
    ),
));
?>