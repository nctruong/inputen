
<div class="span10">
    <div class="page-header">
        <h1>Data</h1>
    </div>

    <?php
    $this->widget('bootstrap.widgets.TbGridView', array(
        'type' => 'condensed',
        'dataProvider' => $dataProvider,
        'template' => "{items}",
        'columns' => array(
            array('name' => 'id', 'header' => 'Id'),
            array('name' => 'title', 'header' => 'Title'),
            array('name' => 'slug', 'header' => 'Slug'),
            array('name' => 'content', 'header' => 'Content'),
            array(
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'htmlOptions' => array('style' => 'width: 50px'),
            ),
        ),
    ));
    ?>
</div>
<div class="span1">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'list',
        'items' => array(
            array('label' => 'ACTION'),
            array('label' => '', 'icon' => 'icon-large icon-circle-plus', 'url' => '#'),
            array('label' => '', 'icon' => 'icon-large icon-pencil', 'url' => '#'),
            array('label' => '', 'icon' => 'icon-large icon-large icon-circle-minus', 'url' => '#'),
            array('label' => '', 'icon' => 'icon-large icon-circle-remove', 'url' => '#'),
        ),
    ));
    ?>  
</div>