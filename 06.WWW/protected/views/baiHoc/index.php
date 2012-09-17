<?php
/* @var $this BaiHocController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bai Hocs',
);

$this->menu=array(
	array('label'=>'Create BaiHoc', 'url'=>array('create')),
	array('label'=>'Manage BaiHoc', 'url'=>array('admin')),
);
?>

<h1>Bai Hocs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
