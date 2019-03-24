<?php
/* @var $this LoginUserController */
/* @var $model LoginUser */

$this->breadcrumbs=array(
	'Login Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	
	array('label'=>'View LoginUser', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update LoginUser <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>