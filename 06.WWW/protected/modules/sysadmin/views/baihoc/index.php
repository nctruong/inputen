<div class="page-header">
    <h1>Data</h1>
</div>
<?php
$gridDataProvider = new CArrayDataProvider(array(
            array('id' => 1, 'firstName' => 'Mark', 'lastName' => 'Otto', 'language' => 'CSS'),
            array('id' => 2, 'firstName' => 'Jacob', 'lastName' => 'Thornton', 'language' => 'JavaScript'),
            array('id' => 3, 'firstName' => 'Stu', 'lastName' => 'Dent', 'language' => 'HTML'),
        ));
$this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'striped bordered condensed',
    'dataProvider' => $gridDataProvider,
    'template' => "",
    'columns' => array(
        array('name' => 'id', 'header' => '#'),
        array('name' => 'firstName', 'header' => 'First name'),
        array('name' => 'lastName', 'header' => 'Last name'),
        array('name' => 'language', 'header' => 'Language'),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'htmlOptions' => array('style' => 'width: 50px'),
        ),
    ),
));
?>