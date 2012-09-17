<?php
/* @var $this BaiHocController */
/* @var $model BaiHoc */

$this->breadcrumbs=array(
	'Bai Hocs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BaiHoc', 'url'=>array('index')),
	array('label'=>'Manage BaiHoc', 'url'=>array('admin')),
);
?>

<h1>Create BaiHoc</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>