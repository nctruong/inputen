<?php
/* @var $this BaiHocController */
/* @var $model BaiHoc */

$this->breadcrumbs=array(
	'Bai Hocs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BaiHoc', 'url'=>array('index')),
	array('label'=>'Create BaiHoc', 'url'=>array('create')),
	array('label'=>'View BaiHoc', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BaiHoc', 'url'=>array('admin')),
);
?>

<h1>Update BaiHoc <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>