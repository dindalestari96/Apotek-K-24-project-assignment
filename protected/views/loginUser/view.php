<?php
/* @var $this LoginUserController */
/* @var $model LoginUser */

$this->breadcrumbs=array(
	'Login Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	
	
	array('label'=>'Update LoginUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LoginUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),

);
?>

<h1>View LoginUser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
	),
)); ?>
