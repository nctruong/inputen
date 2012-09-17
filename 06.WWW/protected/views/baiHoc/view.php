<?php
/* @var $this BaiHocController */
/* @var $model BaiHoc */

$this->breadcrumbs=array(
	'Bai Hocs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List BaiHoc', 'url'=>array('index')),
	array('label'=>'Create BaiHoc', 'url'=>array('create')),
	array('label'=>'Update BaiHoc', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BaiHoc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BaiHoc', 'url'=>array('admin')),
);
?>

<h1>View BaiHoc #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'slug',
		'premium',
		'content',
		'type',
		'created_date',
		'category_id',
	),
)); ?>
