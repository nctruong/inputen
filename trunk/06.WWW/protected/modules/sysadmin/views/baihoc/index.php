<?php

$this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'bordered ',
    'dataProvider' => $dataProvider,
    'selectableRows' => 2, // multiple rows can be selected
    'template' => "{items}",
    'columns' => array(
        array(
            'class' => 'CCheckBoxColumn',
            'id' => 'cid',
            'value' => '2',
             'htmlOptions' => array('style' => 'width: 20px')
        ),
        array('name' => 'title', 'header' => 'Title'),
        array('name' => 'slug', 'header' => 'Slug'),
        array('name' => 'content', 'header' => 'Content'),
        array('name' => 'created_date', 'header' => 'Created Date','htmlOptions' => array('style' => 'width: 150px')),
    ),
));
?>